<template>
  <div>
  <Home/>
  </div>
</template>
<script>
import Home from "./layouts/Home.vue";
export default {
  components:{
    Home
  },
  data() {
    return {
      message: "Hello World",
    };
  },
};
</script>