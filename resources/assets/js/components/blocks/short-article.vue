<template>
  <section>
    <article v-for="(article, id) in articles" :key="id">
      <h3 class="title">{{article.title_article}}</h3>
      <span class="article_category"></span>
      <span class="article_date"></span>

      <img src="/image/content/article-img.jpg" alt="logo-article" class="article_logo" />
      <span class="article_text">{{getArticleText(id)}}</span>

      <router-link :to="getPathToArticle(article.id)" class="continue_read">
        Продовжити читання
        <span class="fa fa-arrow-right"></span>
      </router-link>
    </article>
  </section>
</template>

<script>
export default {
  data: function() {
    return {
      articles: {},
      subcategories: {},
      latest_post: {},
      like_articles: {},
      category: this.$route.params.category
    };
  },
  components: {},
  methods: {
    getArticleText: function(id) {
      return `${this.articles[id].content_article.slice(0, 100)}...`;
    },
    getPathToArticle: function(id) {
      return `/${this.$route.params.category}/${id}`;
    },
    getData: function() {
      let path = `/${this.$route.params.category}`;
      axios.post(path).then(res => {
        console.log(res);
        this.articles = res.data.articles.data;
        this.subcategories = res.data.subcategories;
        this.latest_post = res.data.latest_post;
        this.like_articles = res.data.like_articles;
      });
    }
  },
  watch: {
    $route(to, from) {
      this.getData();
      console.log("list");
    }
  },
  created: function() {
    this.getData();
  }
};
</script>
