<template>
  <main>
    <article>
      <h3 class="title"></h3>
      <span class="article_category"></span>
      <span class="article_date"></span>

      <img src="/image/content/article-img.jpg" alt="logo-article" class="article_logo" />
      <span class="article_text"></span>

      <a href="/" class="continue_read">
        Продовжити читання
        <span class="fa fa-arrow-right"></span>
      </a>
    </article>

    <router-link to="/items">Перейти к Foo</router-link>
  </main>
</template>

<script>
export default {
  mounted() {}
};
</script>
