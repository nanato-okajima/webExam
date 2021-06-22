@extends('admin.layouts.base')

@section('title', config('app.name') . '|ホーム')

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
        @foreach($users as $user)
        <tr>
          <td>
            <a href="#">採点</a>
          </td>
          <td class="form-check">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" value="{{ $user->id }}" id="check{{ $user->id }}">
            </div>
          </td>
          <td>{{ $user->test_datetime->format('Y年m月d日 H:i:s') }}</td>
          <td>{{ $user->full_name }}</td>
          <td>{{ $user->gender_jp }}</td>
          <td>{{ $user->time . "分" }}</td>
          <td>{{ $user->score . "点" }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
