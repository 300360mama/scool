import VueRouter from "vue-router";
import shortArticle from "./components/blocks/short-article";
import fullArticle from "./components/blocks/full-article";

export default new VueRouter({
  routes: [
    {
      name: "fullArticle",
      path: "/:category/:id",
      component: fullArticle
    },
    {
      path: "/:category",
      component: shortArticle
    }
    
  ],
  mode: "history"
});
