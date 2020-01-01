window.Vue = require('vue');

Vue.config.productionTip = false;

Vue.component('v-icon', require('./components/Icon.vue').default);
Vue.component('v-menu', require('./components/Menu.vue').default);

const app = new Vue({
    el: '#app',
});

require('./bootstrap');