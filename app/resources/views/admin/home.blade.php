@extends('admin.layouts.base')

@section('content')
  <div class="container">
    <div class="fix-buttons">
      <button class="btn btn-outline-dark">一括選択</button>
      <button class="btn btn-outline-dark">FIX</button>
    </div>

    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <th scope="col" colspan="2"></th>
        <th scope ="col">受験日</th>
        <th scope="col">氏名</th>
        <th scope="col">性別</th>
        <th scope="col">経過時間</th>
        <th scope="col">点数</th>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>

      </tbody>
    </table>
  </div>
@endsection
