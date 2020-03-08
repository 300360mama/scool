<template>
  <div class="wrapper">
    <main>
      <router-view name="articlesWithPages"></router-view>
      <router-view name="fullArticle"></router-view>
      <router-view></router-view>

      {{$route}}
    </main>
    <sidebar></sidebar>
  </div>
</template>

<script>
import sidebar from "./sidebar";
import fullArticle from "./full-article";
import shortArticle from "./short-article";

export default {
  data() {
    return {};
  },
  components: {
    sidebar,
    "full-article": fullArticle,
    "short-article": shortArticle
  }
};
</script>
