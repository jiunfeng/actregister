import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import axios from 'axios'
import jquery from 'jquery'



// 有一個router.beforeEach((to, from, next) => { 不確定用了什麼

const app = createApp(App)
app.config.globalProperties.$axios = axios
app.config.globalProperties.$jquery = jquery
// createApp(App).use(store).use(router).mount('#app')
// 需要先將app實例後引用全域屬性
app.use(store).use(router).mount('#app')