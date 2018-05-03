import Vue from "vue"
import VueRouter from "vue-router"

Vue.use(VueRouter);

import Index from '../components/Index';
import About from '../components/About';

export default new VueRouter({
  mode: 'history',
  routes: [
    {
      name: 'index',
      path: '/',
      component: Index
    }, {
      name: 'about',
      path: '/about',
      component: About
    }
  ]
})