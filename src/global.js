import Vue from 'vue'

import AppCard from '@/components/UI/AppCard'
import AppInput from '@/components/UI/AppInput'
import AppButton from '@/components/UI/AppButton'
import VueGoodTablePlugin from 'vue-good-table'
import 'vue-good-table/dist/vue-good-table.css'

Vue.component('AppCard', AppCard)
Vue.component('AppInput', AppInput)
Vue.component('AppButton', AppButton)

Vue.use(VueGoodTablePlugin)
