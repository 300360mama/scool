<template>
  <aside id="sidebar">
    <i class="fas fa-list-ul"></i>
    <section class="aside_section categories">
      <span class="aside_title">Шкільні предмети</span>
      <div id="categoriesList" :class="{'open_category' : open_category}" class="categories_list">
        <router-link
          v-for="(subcategory, id) in subcategories"
          :key="id"
          class="category"
          :to="getPathToSubcategories(subcategory.id)"
        >{{subcategory.name}}</router-link>
      </div>
      <i
        id="openArrow"
        @click="toggleClass"
        :class="{'fa-angle-double-down' : !open_category, 'fa-angle-double-up' : open_category}"
        class="open_block fa"
      ></i>
    </section>
    <section class="latest_post aside_section">
      <span class="aside_title">Latest Post</span>
      <div class="latest_post_list">
        <router-link
          v-for="(post, id) in latest_post"
          :key="id"
          :to="getPathToArticle(post.id)"
          class="latest_post_block"
        >
          <img :src="post.path_to_image" alt class="post_id_logo" />
          <div class="post_id">
            <span class="post_id_text">{{post.title_article}}</span>
            <span class="post_id_date">{{post.created_at}}</span>
          </div>
        </router-link>
      </div>
    </section>
  </aside>
</template>

<script>
import { mapState } from "vuex";
export default {
  data: function() {
    return {
      open_category: false
    };
  },
  created: function() {},
  methods: {
    getPathToSubcategories: function(id) {
      return `/items/subcategory/${id}`;
    },
    getPathToArticle: function(id) {
      return `/article/${id}`;
    },
    toggleClass: function() {
      this.open_category = !this.open_category;
    }
  },
  computed: mapState(["subcategories", "latest_post"])
};
</script>
