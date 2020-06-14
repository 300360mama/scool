<template>
  <article>sdfsdf</article>
</template>

<script>
import { mapState } from "vuex";
export default {
  data: function() {
    return {};
  },
  props: [],
  watch: {
    $route(to, from) {
      let path = `/crud/all`;
      this.$store.dispatch("getTables", path);
    }
  },
  methods: {},
  created: function() {
    let path = `/crud/all`;
    this.$store.dispatch("getTables", path);
  },
  computed: mapState("tables")
};
</script>
