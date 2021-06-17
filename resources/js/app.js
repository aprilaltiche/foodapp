require("./bootstrap");

window.Vue = require("vue").default;

Vue.component("app", require("./components/App.vue").default);
// Vue.component("home", require("./components/layouts/Home.vue").default);
// Vue.component("admin", require("./components/admins/Dashboard.vue").default);

import router from "./routes";
import vuetify from "./plugin/vuetify";

const app = new Vue({
    el: "#app", 
    router: router,
    vuetify
});


