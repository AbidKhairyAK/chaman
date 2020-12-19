import Vue from 'vue'
import VueRouter from 'vue-router'

import JinIndex from '@/views/Jin/Index'
import JinCreate from '@/views/Jin/Create'
import JinUpdate from '@/views/Jin/Update'

Vue.use(VueRouter)

const routes = [
  { path: '/jin', component: JinIndex },
  { path: '/jin/create', component: JinCreate },
  { path: '/jin/update/:id', component: JinUpdate },
]

const router = new VueRouter({
  routes
})

export default router
