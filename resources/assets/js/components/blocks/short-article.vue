<template>
  <section>
    <article v-for="(article, id) in articles" :key="id">
      <h3 class="title">{{article.title_article}}</h3>
      <span class="article_category">{{getCategory(article.category_id, categories)}}</span>
      <span class="article_date">{{article.created_at}}</span>

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
import { mapState } from "vuex";

export default {
  data: function() {
    return {};
  },
  components: {},
  methods: {
    getPathToArticle: function(id) {
      let path = `/article/${id}`;
      return path;
    },
    getCategory: function(id, data) {
      let res = data.find(elem => {
        return elem.id === id;
      });
      return res.name;
    }
  },
  computed: mapState(["articles", "categories"]),
  watch: {
    $route(to, from) {
    
      let path = "/";
      console.log(this.$route);
      if (this.$route.params.category) {
        path = `/${this.$route.params.category}`;
      } else if (this.$route.params.subcategory && this.$route.params.id) {
        path = `/items/${this.$route.params.subcategory}/${this.$route.params.id}`;
      }

      console.log(path);
      this.$store.dispatch("getArticles", path);
    }
  },
  created: function() {
    let path = this.$route.params.category
      ? `/${this.$route.params.category}`
      : "/";
    console.log(path);
    this.$store.dispatch("getArticles", path);
  }
};
</script>
