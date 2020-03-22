import VueRouter from "vue-router";
import shortArticle from "./components/blocks/short-article";
import fullArticle from "./components/blocks/full-article";
import crudShow from "./components/crud/crud-show";

export default new VueRouter({
  routes: [
    {
      name: "fullArticle",
      path: "/article/:id",
      component: fullArticle
    },
    {
      name: "articlesWithPages",
      path: "/:category?",
      component: shortArticle
    },
    {
      name: "subcategory",
      path: "/items/subcategory/:id",
      component: shortArticle
    },
    {
      name: "articlesWithPages",
      path: "/:category/page/:page",
      component: shortArticle
    },
    {
      name: "crudShow",
      path: "/crud/show/:table/:page?",
      component: crudShow
    }
  ],
  mode: "history"
});
