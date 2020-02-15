require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
import router from "./router";
import Vuex from "vuex";
import App from "./components/App";
import dataStore from "./objects/store.js";

Vue.use(VueRouter);
Vue.use(Vuex);

export const store = new Vuex.Store(dataStore);

const app = new Vue({
  el: "#app",
  render: h => h(App),
  router,
  store
});
