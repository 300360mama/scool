<template>
  <article>
    full
  </article>
</template>

<script>
export default {
  props: [
  'articles'
  ],

  components: {},
  mounted() {},
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
      console.log("sdfsdf");
    }
  }
};
</script>
