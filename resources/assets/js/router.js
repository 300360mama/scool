import VueRouter from "vue-router";
import mainContent from "./components/blocks/main-content";

export default new VueRouter({
  routes: [
    {
      path: "/:category",
      component: mainContent
    }
  ],
  mode: "history"
});
