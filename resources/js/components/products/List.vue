
<template>
  <div>
    <v-container class="grey lighten-5">
      <v-row>
        <v-col v-for="product in products" v-bind:key="product.id" cols="3">
          <div class="text-center">
            <v-card>
              <v-img
                contain
                lazy-src="https://picsum.photos/id/11/10/6"
                max-height="400"
                max-width="450"
                src="https://picsum.photos/id/11/500/300"
              ></v-img>
              <v-card-title
                >{{ product.product_description }}
                <v-card-text>Price: Php {{ product.price }}</v-card-text>
              </v-card-title>

              <v-btn rounded color="primary" dark>ADD TO CART</v-btn>
            </v-card>
          </div>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
export default {
  data() {
    return {
      products: [],
    };
  },
  mounted() {
    this.loadProducts();
  },
  methods: {
    loadProducts: function () {
      axios
        .get("api/products")
        .then((response) => {
          this.products = response.data.data;
          for (const entry of Object.entries(response.data)) {
            //console.log(entry);
          }
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>
<style>
.v-card__title {
  display: block !important;
}
</style>
