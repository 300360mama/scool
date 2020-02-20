<template>
  <aside id="sidebar">
    <i class="fas fa-list-ul"></i>
    <section class="aside_section categories">
      <span class="aside_title">Шкільні предмети</span>
      <div id="categoriesList" class="categories_list">
        <a href="/subcategory/" class="category"></a>
      </div>
      <i id="openArrow" class="open_block fa-angle-double-down fa"></i>
    </section>

    <section class="latest_post aside_section">
      <span class="aside_title">Latest Post</span>
      <div class="latest_post_list">
        <a href="/" class="latest_post_block">
          <img src="/image/sidebar/image1.png" alt class="post_id_logo" />
          <div class="post_id">
            <span class="post_id_text"></span>
            <span class="post_id_date"></span>
          </div>
        </a>
      </div>
      {{ subcategories }}
    </section>
  </aside>
</template>

<script>
import { mapState } from "vuex";
export default {
  data: function() {
    return {};
  },
  computed: mapState(["subcategories"])
};
</script>
