import Vue from 'vue'
import VueRouter from 'vue-router'

import JinIndex from '@/views/Jin/Index'
import JinCreate from '@/views/Jin/Create'

Vue.use(VueRouter)

const routes = [
  { path: '/jin', component: JinIndex },
  { path: '/jin/create', component: JinCreate }
]

const router = new VueRouter({
  routes
})

export default router
