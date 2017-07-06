import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use( VueRouter );

import App from './components/App.vue';
import ContactSection from './components/ContactSection.vue';
import ScrollTo from './components/ScrollTo.vue';

const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    { path: '/',         component: ScrollTo,       props: { target: ".app-container" } },
    { path: '/projects', component: ScrollTo,  	    props: { target: "#projects-section" } },
    { path: '/contact',  component: ContactSection, props: {} }
  ]
});

export default router;
