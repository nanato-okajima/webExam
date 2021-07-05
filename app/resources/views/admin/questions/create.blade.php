@extends('admin.layouts.base')

@section('title', config('app.name') . '|問題作成')

@section('content')
  @include('admin.questions._form')
@endsection
