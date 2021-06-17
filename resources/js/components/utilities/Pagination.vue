<template>
  <v-pagination 
  v-model="currentPage" 
  :length="lastPage" 
  circle>
  </v-pagination>
</template>

<script>
export default {
  computed: {
    currentPage: {
      get() {
        return 2;
      },
    },
    lastPage: {
      get() {
        return 2;
      },
    },
  },
  watch: {
    get(newValue) {
      alert(`yes, computed property changed: ${newValue}`);
    },
  },
};
</script>

<style>
</style>