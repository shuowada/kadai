import Vue from 'vue'
import Router from "vue-router";
import Link1 from "./components/Link1.vue"
import Top from "./components/Top.vue"

Vue.use(Router);

export default new Router({
  mode: "history",
  routes: [
    {
      path: "/",
      component: Top
    },
    {
      path: "/link1",
      component: Link1
    }
    {
      path: "/result",
      component: result
    }

  ]
});