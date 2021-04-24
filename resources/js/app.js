/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

// Importación del Vuetify
import vuetify from './vuetify';

// Importación de VueRouter
import VueRouter from 'vue-router'

Vue.use(VueRouter)

// Importación de Componente Principal
import App from './components/App.vue'

import Alumnos from './components/Alumnos/Alumnos.vue'
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))



// Vue.component('alumnos', require('./components/Alumnos.vue').default);

const router = new VueRouter({
    mode: 'history',
    routes: [
      {
        path: '/Alumnos',
        component: Alumnos,
        name: 'alumnos'
      },

//      {
//        path: '/comments/create',
//        component: CommentsCreate,
//        name: 'comments.create',
//      },
    ]
  })
// Vue.component('pagination', require('laravel-vue-pagination'));
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: { App },
    router,
    vuetify

});
