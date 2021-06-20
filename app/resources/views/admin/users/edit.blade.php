@extends('admin.layouts.base')

@section('title', config('app.name') . '|ユーザ編集')

@section('content')

  @include('admin.layout._form', [
      'route' => route('edit', $user),
      'mode'  => 'edit'
  ])

@endsection
