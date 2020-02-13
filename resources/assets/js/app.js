require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
import router from "./router";
import Vuex from "vuex";
import App from "./components/App";

Vue.use(VueRouter);
Vue.use(Vuex);

export const store = new Vuex.Store({
  state: {},
  getters: {},
  mutations: {},
  actions: {}
});

const app = new Vue({
  el: "#app",
  render: h => h(App),
  router,
  store
});
