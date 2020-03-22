<template>
  <div class="crud-content">
    
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
  computed: mapState(["article", "categories"])
};
</script>
