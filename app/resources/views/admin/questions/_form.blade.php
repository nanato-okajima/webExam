<form action="" method="POST">
  @csrf


  <div class="form-group row">
    <label for="short_name col-sm-2 col-form-label">略称</label>
    <div class="col-sm-10">
        <input type="text" id="short_name" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="sentence col-sm-2 col-form-label">問題文</label>
    <div class="col-sm-10">
      <textarea name="sentence" id="sentence" cols="30" rows="10" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">画像</label>
    <div class="col-sm-10">
      <input type="file" class="form-control-file">
    </div>
  </div>
  <div id="app">
    <div>
      <button class="btn btn-outline-primary" @click.prevent="selectFormType('text', $event)">text</button>
      <button class="btn btn-outline-primary" @click.prevent="selectFormType('check', $event)">check</button>
      <button class="btn btn-outline-primary" @click.prevent="selectFormType('radio', $event)">radio</button>
      <button class="btn btn-outline-primary" @click.prevent="selectFormType('select', $event)">select</button>
    </div>
    <div v-show="showForm">
      <button>+</button>
      <question-form></question-form>
    </div>
  </div>
</form>
