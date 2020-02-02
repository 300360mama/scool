<template>
  <article>
    <h3 class="title">{{article.title_article}}</h3>
    <span class="article_category"></span>
    <span class="article_date"></span>

    <img src="/image/content/article-img.jpg" alt="logo-article" class="article_logo" />
    <span class="article_text">{{getArticleText()}}</span>

    <a href="/" class="continue_read">
      Продовжити читання
      <span class="fa fa-arrow-right"></span>
    </a>
  </article>
</template>

<script>
export default {
  props: [
  'article'
  ],

  components: {},
  mounted() {},
  methods: {
    getArticleText: function() {
      return `${this.article.content_article.slice(0, 100)}...`;
    }
  }
};
</script>
