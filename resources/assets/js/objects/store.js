import { Store } from "vuex";

export default {
  state: {
    articles: {},
    article: {},
    latest_post: {},
    like_articles: {},
    subcategories: {},
    categories: {}
  },
  getters: {},
  mutations: {
    setArticles(state, data) {
      this.state.articles = data;
    },
    setLikeArticles(state, data) {
      this.state.like_articles = data;
    },
    setLatestPost(state, data) {
      this.state.latest_post = data;
    },
    setSubcategories(state, data) {
      this.state.subcategories = data;
    },
    setArticle(state, data) {
      this.state.article = data;
    },
    setCategories(state, data) {
      this.state.categories = data;
    }
  },
  actions: {
    getArticles(context, path) {
      axios.post(path).then(res => {
        let articles = res.data.articles.data;
        let like_articles = res.data.like_articles;
        let latest_post = res.data.latest_post;
        let subcategories = res.data.subcategories;
        let categories = res.data.categories;

        console.log(res);
        console.log(articles);

        context.commit("setArticles", articles);
        context.commit("setSubcategories", subcategories);
        context.commit("setLikeArticles", like_articles);
        context.commit("setLatestPost", latest_post);
        context.commit("setCategories", categories);
      });
    },
    getArticle(context, path) {
      axios.post(path).then(res => {
        let article = res.data.article[0];
        let like_articles = res.data.like_articles;
        let latest_post = res.data.latest_post;
        let subcategories = res.data.subcategories;
        let categories = res.data.categories;

        console.log(res);

        context.commit("setArticle", article);
        context.commit("setSubcategories", subcategories);
        context.commit("setLikeArticles", like_articles);
        context.commit("setLatestPost", latest_post);
        context.commit("setCategories", categories);
      });
    }
  }
};
