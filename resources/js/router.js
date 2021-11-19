import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

import myFirstVuePage from './components/pages/myFirstVuePage'

const routes = [
    {
        path: '/my-new-vue-route',
        component: myFirstVuePage
    }
];

export default new Router({
    mode: 'history',
    routes
})

