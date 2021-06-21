@extends('admin.layouts.base')

@section('title', config('app.name') . '|ユーザ編集')

@section('content')

  @include('admin.users._form', [
      'route' => route('user.edit', $user),
      'mode'  => 'edit'
  ])

@endsection
