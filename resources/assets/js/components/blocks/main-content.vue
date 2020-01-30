<template>
  <main>
    <short-article></short-article>
    <div>{{ listArticle }}</div>
  </main>
</template>

<script>
import shortArticle from "./short-article";

export default {
  data() {
    return {
      listArticle: Object
    };
  },
  components: {
    "short-article": shortArticle
  },

  methods: {
    getListArticle: function() {
      let path = `/${this.$route.params.category}`;
      axios.post(path).then(res => {
        this.listArticle = res.data;
      });
    }
  },
  mounted() {},
  watch: {
    $route(to, from) {
      this.getListArticle();
      this.listArticle = "sdfsdfs";
    }
  }
};
</script>
