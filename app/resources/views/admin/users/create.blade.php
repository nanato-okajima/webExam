@extends('admin.layouts.base')

@section('title', config('app.name') . '|ユーザ登録')

@section('content')

@include('admin.users._form', [
  'route' => route('user.create'),
  'mode'  => 'create'
])

@endsection
