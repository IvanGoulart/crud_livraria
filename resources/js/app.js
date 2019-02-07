
import Vue from 'vue'
import VueRouter from 'vue-router'
import Axios from 'axios';
import AutoresEditComponent from './components/AutoresEditComponent.vue';
require('./bootstrap');
//import Vue from 'Vue'

window.Vue = require('vue');
window.VueRouter = require('vue-router').default;
window.VueAxios = require('axios').default;
//Vue.use(VueRouter, VueAxios, Axios)

Vue.component('example', require('./components/ListaAutoresComponent.vue'));
Vue.component('AutoresEditComponent', require('./components/AutoresEditComponent.vue'));
//Vue.component('atores', require('./components/lista-atores.vue'));

const app = new Vue({
    el: '#app',

    router,

});


const routes = [
   
    {
        path: '/edit/:id', component: AutoresEditComponent, name: 'AutoresEditComponent'
    },
]

const router = new VueRouter({ routes })


export default{
    components: {
        'example' : example,
        'Autores-EditComponent' : AutoresEditComponent
      },
}

//const app = new Vue({ router }).$mount('#app')
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

