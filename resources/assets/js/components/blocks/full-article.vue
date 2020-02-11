<template>
  <article>
     <h3 class="title">{{ article.title_article }}</h3>
        <span class="article_category"> </span>
        <span class="article_date"></span>
        <!-- <img src="./image/content/article-img.jpg" alt="logo-article" class="article_logo"> -->
        <span class="article_text">
            {{article.content_article}}
        </span>

        {{article}}
  </article>
</template>

<script>
export default {
   data: function() {
    return {
      article: {},
      subcategories: {},
      latest_post: {},
      like_articles: {}
    };
  },
  props: [
  ],

  components: {},
  mounted() {},
  methods: {
    getData: function() {

      let path = `/${this.$route.params.category}/article/${this.$route.params.id}`;
      axios.post(path).then(res => {
         console.log(res);
           this.article = res.data.article[0];
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
  },
  created: function(){
    this.getData();
  }
};
</script>
