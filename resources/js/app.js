
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import router from './router';
import VueStores from './stores';
import VueConfetti from 'vue-confetti';
import VueProgressBar from 'vue-progressbar';
import VeeValidate from 'vee-validate';
import VueNoty from 'vuejs-noty';

Vue.use(require('vue-shortkey'));
Vue.use(VueConfetti)
Vue.use(VueProgressBar, {
    color: 'rgb(35, 80, 160)',
    failedColor: 'red',
    height: '2px'
});
Vue.use(VeeValidate);
Vue.use(VueNoty, {
    timeout: 4000,
    layout: 'topCenter',
    progressBar: true,
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    store: VueStores,

});
global.vm = app;
