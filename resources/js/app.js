
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

Vue.component('listaeditoras', require('./components/ListaEditorasComponent.vue').default);
Vue.component('criareditora', require('./components/CriarEditoraComponent.vue').default);
Vue.component('editareditora', require('./components/EditarEditoraComponent.vue').default);

Vue.component('listalivros', require('./components/ListaLivrosComponent.vue').default);
Vue.component('editarlivro', require('./components/EditarLivroComponent.vue').default);
Vue.component('criarlivro', require('./components/CriarLivroComponent.vue').default);


const app = new Vue({
    el: '#app',

});



