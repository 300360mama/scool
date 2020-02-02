<template>
  <div class="wrapper">
    <main>
      <short-article v-for="article in articles" :article="article" :key="article.id"></short-article>
    </main>
   <sidebar></sidebar>
  </div>
</template>

<script>
import shortArticle from "./short-article";
import sidebar from "./sidebar";

export default {
  data() {
    return {
      articles: {},
      subcategories: {},
      latest_post: {},
      like_articles: {},
      result: {}
    };
  },
  components: {
    "short-article": shortArticle,
    sidebar
  },

  methods: {
    getData: function() {
      let path = `/${this.$route.params.category}`;
      axios.post(path).then(res => {

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
    }
  }
};
</script>
