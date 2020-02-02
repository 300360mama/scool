<template>
  <div>
    <navigation></navigation>

    <main-content></main-content>

    <main-footer></main-footer>
  </div>
</template>

<script>
import navigation from "./blocks/navigation";
import mainFooter from "./blocks/main-footer";
import mainContent from "./blocks/main-content";

export default {
  data() {
    return {};
  },
  components: {
    navigation,
    "main-footer": mainFooter,
    "main-content": mainContent
  },
  mounted() {}
};
</script>
