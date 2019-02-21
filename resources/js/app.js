
import Vue from 'vue'

import Axios from 'axios';

require('./bootstrap');
//import Vue from 'Vue'

window.Vue = require('vue');

window.VueAxios = require('axios').default;
//Vue.use(VueRouter, VueAxios, Axios)

Vue.component('example', require('./components/ListaAutoresComponent.vue').default);
Vue.component('editarautor', require('./components/EditarAutorComponent.vue').default);
Vue.component('criarautor', require('./components/CriarAutorComponent.vue').default);

const app = new Vue({
    el: '#app',

   

});



