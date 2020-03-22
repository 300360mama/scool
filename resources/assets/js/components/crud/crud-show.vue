<template>
  <article>
    <h3 class="title">{{ article.title_article }}</h3>
    <span class="article_category">{{getCategory(article.category_id, categories)}}</span>
    <span class="article_date">{{article.created_at}}</span>
    <!-- <img src="./image/content/article-img.jpg" alt="logo-article" class="article_logo" /> -->
    <span class="article_text">{{article.content_article}}</span>
  </article>
</template>

<script>
import {mapState} from "vuex"; 
export default {
  data: function() {
    return {};
  },
  props: [],
  watch: {
    $route(to, from) {
    }
  },
  methods: {
  
  },
  created: function() {
  
  },
  computed: mapState(["article", "categories"])
};
</script>
