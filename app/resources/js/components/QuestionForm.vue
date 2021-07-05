<template>
    <div>
      <div class="form-group row">
        <label for="label_position" class="col-sm-2 col-form-label">ラベル位置</label>
        <select name="label_positon" v-model="form.label_position" id="label_position" class="col-sm-10">
          <option value="1">前</option>
          <option value="2">後</option>
          <option value="3">無し</option>
        </select>
      </div>
      <div class="form-group row">
        <label for="label" class="col-sm-2 col-form-label">ラベル</label>
        <input type="text" name="label" v-model="form.label" id="label" class="col-sm-10">
      </div>
      <div class="form-group row">
        <label for="answer" class="col-sm-2 col-form-label">答え</label>
        <input type="text" name="answer" v-model="form.answer" id="answer" class="col-sm-10">
      </div>
      <template v-show="choice">
        <button>＋</button>
        <div class="form-group">
          <label for="choice">選択肢</label>
          <input type="text" name="choice" v-model="form.choice" id="choice">
        </div>
      </template>
    </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        label_position: 1,
        label: "",
        answer: "",
        choice: ""
      }
    }
  }
}
</script>
