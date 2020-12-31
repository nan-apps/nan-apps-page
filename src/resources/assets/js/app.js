
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import VeeValidate from 'vee-validate';
Vue.use(VeeValidate, {
  locale: 'en',
  //inject: false
});

import router from './router';
import store from './store/index';
import App from './components/App.vue'

new Vue({
 
  el: '#app',
  router,
  store,  
  render: h => h(App)

});






