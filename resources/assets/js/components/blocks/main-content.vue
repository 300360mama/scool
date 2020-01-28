<template>
  <main>
    <short-article :listArticles="listArticles"></short-article>
  </main>
</template>

<script>
import shortArticle from "./short-article";
export default {
  data() {
    return {
      listArticles: Object
    };
  },
  components: {
    "short-article": shortArticle
  },
  mounted() {}
};
</script>
