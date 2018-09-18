
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('categories-menu', require('./components/CategoriesMenu.vue'));
Vue.component('categories', require('./components/Categories.vue'));
Vue.component('my-page', require('./components/MyPage.vue'));
Vue.component('categories-page', require('./components/CategoriesPage.vue'));
Vue.component('contact-page', require('./components/ContactPage.vue'));

window.Events = new Vue();

const app = new Vue({
    el: '#app'
});
