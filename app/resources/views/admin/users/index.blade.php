@extends('admin.layouts.base')

@section('title', config('app.name') . '|ユーザ一覧')

@section('content')
  <div class="search-form">
  </div>

  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <th scope="col" colspan="2"></th>
      @foreach(UserConst::INDEX_THEAD_LIST as $thead)
      <th scope="col">{{ $thead }}</th>
      @endforeach
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>
          <a href="{{ route('user.edit', $user) }}">編集</a>
        </td>
        <td>
          <a href="{{ route('user.score', $user) }}">採点</a>
        </td>
        <td>{{ $user->user_status }}</td>
        <td>{{ $user->updated_at->format('Y年m月d日') }}</td>
        <td>{{ isset($user->test_datetime) ? $user->test_datetime->format('Y年m月d日') : '' }}</td>
        <td>{{ $user->full_name }}</td>
        <td>{{ $user->score }}点</td>
        <td>{{ $user->gender_jp }}</td>
        <td>{{ $user->age }}歳</td>
        <td>{{ $user->time }}分</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
