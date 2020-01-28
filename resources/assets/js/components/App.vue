<template>
  <div>
    <navigation></navigation>

    <div class="wrapper">
      <main-content></main-content>
      <sidebar></sidebar>
    </div>

    <main-footer></main-footer>
  </div>
</template>

<script>
import navigation from "./blocks/navigation";
import mainFooter from "./blocks/main-footer";
import sidebar from "./blocks/sidebar";
import mainContent from "./blocks/main-content";

export default {
  data() {
    return {};
  },
  components: {
    navigation,
    "main-footer": mainFooter,
    sidebar,
    "main-content": mainContent
  },
  mounted() {}
};
</script>
