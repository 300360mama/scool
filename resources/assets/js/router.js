import VueRouter from "vue-router";
import shortArticle from "./components/blocks/short-article";

export default new VueRouter({
  routes: [
    {
      path: "/:category",
      component: shortArticle
    }
  ],
  mode: "history"
});
