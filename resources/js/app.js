
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('node_modules/bulma-calendar/dist/js/bulma-calendar.js');

window.Vue = require('vue');
window.VueJson = require('vue-json-excel')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('staff-list', require('./components/StaffListComponent.vue'));
Vue.component('staff-member', require('./components/StaffMemberComponent.vue'));

Vue.component('user', require('./components/practice/User.vue'));
Vue.component('user-detail', require('./components/practice/UserDetail.vue'));
Vue.component('user-edit', require('./components/practice/UserEdit.vue'));
Vue.component('downloadCsv', VueJson);

const app = new Vue({
    el: '#app'
});