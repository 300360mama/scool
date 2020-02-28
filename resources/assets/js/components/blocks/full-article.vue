<template>
  <article>
    <h3 class="title">{{ article.title_article }}</h3>
    <span class="article_category"></span>
    <span class="article_date">{{article.created_at}}</span>
    <!-- <img src="./image/content/article-img.jpg" alt="logo-article" class="article_logo" /> -->
    <span class="article_text">{{article.content_article}}</span>
    {{categories}}
    {{getCategory()}}
  </article>
</template>

<script>
import { mapState } from "vuex";
export default {
  data: function() {
    return {};
  },
  props: [],
  watch: {
    $route(to, from) {
      let path = `/article/${this.$route.params.id}`;
      this.$store.dispatch("getArticle", path);
    }
  },
  methods: {
    getCategory: function() {
      this.categories.find(elem => {
        return elem.id === this.article.id;
      });
    }
  },
  created: function() {
    let path = `/article/${this.$route.params.id}`;
    this.$store.dispatch("getArticle", path);
  },
  computed: mapState(["article", "categories"])
};
</script>
