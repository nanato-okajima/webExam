@extends('admin.layouts.base')

@section('title', config('app.name') . '|採点')

@section('content')

<table class="table">
  <tr>
    <td>{{ $user->full_name }}</td>
    <td>{{ $user->gender_jp }}</td>
    <td>{{ $user->age }}歳</td>
    <td>{{ $user->score }}点</td>
  </tr>
</table>

  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col"></th>
        <th scope="col">問題</th>
        <th scope="col">正答</th>
        <th scope="col">正解</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>数学１</td>
        <td></td>
        <td>
          <input type="radio" name="score" value="1"><label for="">○</label>
          <input type="radio" name="score" value="2"><label for="">☓</label>
          <input type="radio" name="score" value="3"><label for="">△</label>
        </td>
      </tr>
    </tbody>
  </table>
  <button>Fix</button>
  <button>採点</button>
@endsection
