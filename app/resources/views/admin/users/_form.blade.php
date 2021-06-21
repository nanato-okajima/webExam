<div class="col-md-6 offset-md-3">
    <form action="{{ $route }}" method="POST">
      @csrf
      @if ($mode == "edit")
      @method('put')
      @endif

      <div class="row">
        <div class="form-group col">
          <label for="last_name">氏名（姓）</label>
          <input class="form-control" type="text" id="last_name" value="">
        </div>
        <div class="form-group col">
          <label for="first_name">氏名（名）</label>
          <input class="form-control" type="text" id="first_name" value="">
        </div>
      </div>
      <div class="form-group">
        <p>性別</p>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="man" name="sex" value="1">
          <label class="custom-control-label" for="man">男</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" id="woman" name="sex" value="2">
          <label class="custom-control-label" for="woman">女</label>
        </div>
      </div>
      <div class="form-group">
        <label for="age">年齢</label>
        <input class="form-control" type="number" id="age" value="">
      </div>

      <input class="btn btn-primary" type="submit" value="登録">
      @if ($mode == "edit")
      <input class="btn btn-danger" type="button" value="削除">
      @endif
    </form>
  </div>
