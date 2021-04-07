import Vue from 'vue'
import router from './router.js'

require('./bootstrap')

const app = new Vue({
  router
}).$mount('#app')

export default app