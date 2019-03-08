window.Vue = require('vue');

Vue.component("question", require("./components/Question.vue"));
Vue.component("questions", require("./components/Questions.vue"));

const app = new Vue({
    el: '#app'
});
