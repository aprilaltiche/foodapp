<template>
  <div>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <router-link to="/admin">Admin</router-link>
      <router-link to="/products">Admin Products</router-link>
      <router-link to="/list">List</router-link>

      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>

    <v-sheet elevation="6">
      <v-tabs
        background-color="cyan"
        dark
        next-icon="mdi-arrow-right-bold-box-outline"
        prev-icon="mdi-arrow-left-bold-box-outline"
        show-arrows
      >
        <v-tabs-slider color="yellow"></v-tabs-slider>
        <v-tab v-for="menu in menus" v-bind:key="menu.id">
          <router-link :to="menu.route">{{ menu.name }}</router-link>
        </v-tab>
      </v-tabs>
    </v-sheet>

    <router-view />
    
  </div>
</template>

<script>
export default {
  data() {
    return {
      menus: [
        {
          id: "1",
          route:"/products",
          name: "Products",
        },
      ],
    };
  // },
  // mounted() {
  //   this.loadMenus();
  // },
  // methods: {
  //   loadMenus: function () {
  //     axios
  //       .get("api/menus")
  //       .then((response) => {
  //         this.menus = response.data;
  //         for (const entry of Object.entries(response.data)) {
  //           console.log(entry);
  //         }
  //       })
  //       .catch(function (error) {
  //         console.log(error);
  //       });
  //   },
  },
};
</script>

<style>


</style>