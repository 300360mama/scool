<template>
  <div>
    <Header></Header>

    <div class="wrapper">
      <Content></Content>
      <Sidebar></Sidebar>
    </div>

    <Footer></Footer>
  </div>
</template>

<script>
import Header from "./blocks/Header";
import Footer from "./blocks/Footer";
import Sidebar from "./blocks/Sidebar";
import Content from "./blocks/Content";
export default {
  data() {
    return {};
  },
  components: {
    Header,
    Footer,
    Sidebar,
    Content
  },
  mounted() {}
};
</script>
