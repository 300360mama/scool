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
    }
  },
  actions: {
    getArticles(context, path) {
      axios.post(path).then(res => {
        console.log(res.data);
        let articles = res.data.articles.data;
        let like_articles = res.data.like_articles.data;
        let latest_post = res.data.latest_post.data;
        let subcategories = res.data.subcategories.data;

        context.commit("setArticles", articles);
        context.commit("setLikeArticles", like_articles);
        context.commit("setLatestPost", latest_post );
        context.commit("setSubcategories", subcategories);
      });
    }
  }
};
