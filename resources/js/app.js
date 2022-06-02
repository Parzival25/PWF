require('./bootstrap');

import vue, { render } from 'vue'
window.Vue = vue

import App from './components/App.vue';

//importamos Axios
import VueAxios from 'vue-axios';
import axios from 'axios';

//importamos y configuramos el vue-router
import VueRouter from 'vue-router';
import { routers } from './routers';
import Vue from 'vue';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const router = new VueRouter({
    mode:'history',
    routers: router
});

new Vue({
    router,
    render: h => h(App)
}).$mount('#app');