
require('./bootstrap');
//import Vue from 'Vue'

window.Vue = require('vue');

Vue.component('example', require('./components/ListaAutoresComponent.vue'));
//Vue.component('atores', require('./components/lista-atores.vue'));

const app = new Vue({
    el: '#app',

}); 

/*Vue.component('VcAutores', require('./components/ListaAutoresComponent.vue'));
//import Vue from 'vue'
const app =new Vue({


    components: {
        VcAutores
    },
    el: '#app',
    

    data: {
        title: 'Qualquer coisa'
    }
});*/

