import Vue from 'vue'
import Router from 'vue-router'
import Home from './components/Home.vue'
import Comment from './components/Comment/index.vue'

Vue.use(Router)
Vue.component('vue-router', Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
    },
    {
      path: '/comment',
      name: 'comment',
      component: Comment,
    },
  ]
})
