<template>
  <div class="crud-content">
    <router-view name="crudAll"></router-view>
  </div>
</template>

<script>
import { mapState } from "vuex";
export default {
  data: function() {
    return {};
  },
  props: [],
  watch: {
    $route(to, from) {}
  },
  methods: {},
  created: function() {},
};
</script>
