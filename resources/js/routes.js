import Vue from "vue";
import VueAxios from "vue-axios";
import VueRouter from "vue-router";
import axios from "axios";

Vue.use(VueAxios, axios);
Vue.use(VueRouter);

//Admin
import Dashboard from "./components/admins/Dashboard.vue";
import Product from "./components/admins/Product.vue";

//Product
import List from "./components/products/List.vue";

//Layout
//import Home from "./components/layouts/Home.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/list",
            name: "list",
            component: List
        },
        {
            path: "/admin",
            name: "dashboard",
            component: Dashboard
        },
        {
            path: "/products",
            name: "products",
            component: Product
        }
    ]
});

export default router;
