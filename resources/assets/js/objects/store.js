import { Store } from "vuex";

export default {
  state: {
    articles: {},
    article: {},
    latest_post: {},
    like_articles: {},
    subcategories: {}
  },
  getters: {},
  mutations: {
    setArticles(state, articles) {
      this.state.articles = articles;
    }
  },
  actions: {
    getArticles(context, path) {
      axios.post(path).then(res => {
        let articles = res.data.articles.data;
        context.commit("setArticles", articles);
      });
    }
  }
};
