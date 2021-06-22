<div class="col-md-6 offset-md-3">
    <form action="{{ $route }}" method="POST">
      @csrf
      @if ($mode == "edit")
      @method('put')
      @endif

      <div class="row">
        <div class="form-group col">
          <label for="last_name">氏名（姓）</label>
          <input class="form-control" type="text" id="last_name" value="{{ $user->last_name ?? '' }}">
        </div>
        <div class="form-group col">
          <label for="first_name">氏名（名）</label>
          <input class="form-control" type="text" id="first_name" value="{{ $user->first_name ?? ''}}">
        </div>
      </div>
      <div class="form-group">
        <p>性別</p>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="man" name="gender" value="1" {{ isset($user->gender) && $user->gender === 1 ? 'checked': ''}}>
          <label class="custom-control-label" for="man">男</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="woman" name="gender" value="2" {{ isset($user->gender) && $user->gender === 2  ? 'checked': ''}}>
          <label class="custom-control-label" for="woman">女</label>
        </div>
      </div>
      <div class="form-group">
        <label for="age">年齢</label>
        <input class="form-control" type="number" id="age" value="{{ $user->age ?? '' }}">
      </div>

      <input class="btn btn-primary" type="submit" value="登録">
      @if ($mode == "edit")
      <input class="btn btn-danger" type="button" value="削除">
      @endif
      <a href="{{ url()->previous() }}">戻る</a>
    </form>
  </div>
