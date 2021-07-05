<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function score(User $user)
    {
        return view('admin.users.score', compact('user'));
    }
}
