import Vue from "vue"
import VueRouter from "vue-router"

// const Index = () => import("../components/Index");

const Index = {
  template: '<div>Index da</div>'
}

Vue.use(VueRouter);

export default new VueRouter({
  mode: 'history',
  routes: [
    {
      name: 'index',
      path: '/',
      component: Index
    }
  ]
})