import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store/store"
import "./styleguide.css"
import "./globals.css"
import vuetify from './vuetify';
import Vuelidate from 'vuelidate';
import VueSweetalert2 from 'vue-sweetalert2';
import i18n from './i18n';
import VueDragscroll from 'vue-dragscroll';


Vue.component('app', require('./App.vue').default);

Vue.use(Vuelidate);
Vue.use(VueSweetalert2);
Vue.use(VueDragscroll);


new Vue({
    render: h => h(App),
    i18n,
    router,
    store,
    vuetify,
}).$mount("#app");
