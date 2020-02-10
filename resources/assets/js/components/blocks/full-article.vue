<template>
  <article>
    full
  </article>
</template>

<script>
export default {
  props: [
  ],

  components: {},
  mounted() {},
  methods: {
    getData: function() {
      let path = `/${this.$route.params.category}/${this.$route.params.id}`;
      axios.post(path).then(res => {


        console.log(res);
      });
    }
    
  },
  watch: {
    $route(to, from) {
      this.getData();
      console.log("sdfsdf");
    }
  },
  created: function(){
    this.getData();
  }
};
</script>
