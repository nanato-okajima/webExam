@extends('admin.layouts.base')

@section('title', config('app.name') . '|問題一覧')

@section('content')
  <div>
    <button>問題作成</button>
    <button>問題複製</button>
    <a href="#">出題順変更</a>
  </div>
  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <th scope="col" colspan="3"></th>
      <th scope="col">番号</th>
      <th scope="col">略称</th>
      <th scope="col">正答率</th>
      <th scope="col">出題中</th>
    </thead>
    <tbody>

      <tr>
        <td>
          <a href="#">編集</a>
        </td>
        <td>
          <a href="#">削除</a>
        </td>
        <td>
          <input type="radio">
        </td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>

@endsection
