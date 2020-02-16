<template>
  <section>
    <article v-for="(article, id) in articles" :key="id">
      <h3 class="title">{{article.title_article}}</h3>
      <span class="article_category"></span>
      <span class="article_date"></span>

      <img src="/image/content/article-img.jpg" alt="logo-article" class="article_logo" />
      <span class="article_text">{{ article.content_article }}</span>

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
      articles: {}
    };
  },
  components: {},
  methods: {
    setArticles: function() {
      console.log(this.$store.state.articles);
      this.articles = this.$store.state.articles;
    },
    getPathToArticle: function(id) {
      let path = `/${this.$route.params.category}/article/${id}`;
      return path;
    }
  },
  watch: {},
  created: function() {
    this.setArticles();
  }
};
</script>
