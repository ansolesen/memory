/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

Vue.use(VueRouter);



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('game', require('./components/Game.vue').default);
Vue.component('home', require('./components/Home.vue').default);
Vue.component('card', require('./components/Card.vue').default);


import Game from './components/Game.vue';
import Home from './components/Home.vue';

const routes = [
    { path: '/', component: Home },
    { path: '/games/:id', component: Game },
];


const router = new VueRouter({
    routes
});


const app = new Vue({
    router,
    el: '#app',
});
