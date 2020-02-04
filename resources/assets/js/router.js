import VueRouter from "vue-router";
import shortArticle from "./components/blocks/short-article";
import fullArticle from "./components/blocks/full-article";

export default new VueRouter({
  routes: [
    {
      name: "shortArticle",
      path: "/:category",
      component: shortArticle
    },
    {
      name: "fullArticle",
      path: "/:category/:id",
      component: fullArticle
    }
  ],
  mode: "history"
});
