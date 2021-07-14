require('./bootstrap');

import Vue from 'vue'
import axios from 'axios'

import QuestionForm from './components/QuestionForm.vue'

new Vue({
  el: '#app',
  components: {
    QuestionForm
  },
  data() {
    return {
      showForm: false,
      choice: false
    }
  },
  methods: {
    selectFormType(formType, e) {
      this.showForm = true;
      e.target.classList.add("active");

      if (formType === "radio" || formType === "select") {
        this.choice = true;
      }
    },
    createForm() {

    }
  }
});
