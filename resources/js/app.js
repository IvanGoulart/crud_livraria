
import Vue from 'vue'

import Axios from 'axios';

require('./bootstrap');
//import Vue from 'Vue'

window.Vue = require('vue');

window.VueAxios = require('axios').default;
//Vue.use(VueRouter, VueAxios, Axios)

Vue.component('example', require('./components/ListaAutoresComponent.vue').default);
Vue.component('AutoresEditComponent', require('./components/AutoresEditComponent.vue').default);
//Vue.component('atores', require('./components/lista-atores.vue'));

const app = new Vue({
    el: '#app',

   

});



