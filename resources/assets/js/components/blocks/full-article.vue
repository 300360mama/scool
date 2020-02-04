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
    getArticleText: function() {
      return `${this.article.content_article.slice(0, 100)}...`;
    }
  }
};
</script>
