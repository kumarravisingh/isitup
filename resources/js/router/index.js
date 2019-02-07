import Vue from 'vue';
import Router from 'vue-router';
import Example from '../components/HomeComponent';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Example
        },

    ],
    scrollBehavior (to, from, savedPosition) {

            return { x: 0, y: 0 }

    },
    mode: 'history'
});