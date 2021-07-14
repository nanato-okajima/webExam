<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\UserRequest;
use App\User;
use Exception;

class UserController extends Controller
{
    public function home()
    {
      $users = User::all();
      return view('admin.home', compact('users'));
    }

    public function index()
    {
      $users = User::all();
      return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {
      try {
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->gender     = $request->gender;
        $user->age        = $request->age;
        $user->save();
      } catch(\Exception $e) {
        Log::error($e);
        throw $e;
      }

      $users = User::all();
      return redirect()->route('user.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->gender     = $request->gender;
        $user->age        = $request->age;
        $user->save();

        $users = User::all();
        return redirect()->route('user.index', compact('users'));
    }

    public function delete(User $user)
    {
      $user->delete();
      $users = User::all();
      return redirect()->route('user.index', compact('users'));
    }

    public function score(User $user)
    {
        return view('admin.users.score', compact('user'));
    }
}
