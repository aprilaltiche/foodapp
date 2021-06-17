<template>
  <v-app id="inspire">
    <v-app-bar app color="white" flat>
      <v-container class="py-0 fill-height">
        <v-avatar class="mr-10" color="grey darken-1" size="32"></v-avatar>

        <v-btn v-for="dashboard in dashboards" :key="dashboard" text>
          {{ dashboard }}
        </v-btn>

        <v-spacer></v-spacer>

        <v-responsive max-width="260">
          <v-text-field
            dense
            flat
            hide-details
            rounded
            solo-inverted
          ></v-text-field>
        </v-responsive>
      </v-container>
    </v-app-bar>

    <v-main class="grey lighten-3">
      <v-container>
        <v-row>
          <v-col cols="2">
            <v-sheet rounded="lg">
              <v-list color="transparent">
                <v-list-item
                  v-for="item in items"
                  :key="item"
                  :to="item.link"
                  link
                >
                  <v-list-item-content>
                    <v-list-item-title>
                      <v-list-item-icon>
                        <v-icon>{{ item.icon }}</v-icon>
                      </v-list-item-icon>
                      {{ item.title }}
                    </v-list-item-title>
                  </v-list-item-content>
                </v-list-item>
              </v-list>
            </v-sheet>
          </v-col>

          <v-col>
            <v-sheet min-height="70vh" rounded="lg">
              <router-view></router-view>
            </v-sheet>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>
<script>
export default {
  components: {},
  data: () => ({
    dashboards: ["Dashboard"],
    items: [
      { title: "Home", icon: "mdi-account-circle", link: "/" },
      { title: "My Account", icon: "mdi-account", link: "/" },
      { title: "Users", icon: "mdi-account-group-outline", link: "/users" },
      {
        title: "Products",
        icon: "mdi-account-group-outline",
        link: "/products",
      },
    ],
  }),
};
</script>