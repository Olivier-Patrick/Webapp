window.Vue = require('vue');
Vue.component('ad', require('./components/PostComponent.vue').default);
const app = new Vue({
    el: '#app'
});