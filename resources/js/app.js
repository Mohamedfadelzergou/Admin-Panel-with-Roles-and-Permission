require('./bootstrap');
window.Vue = require('vue');
window.Fire=new Vue();
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import Vue from 'vue';

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
Vue.component('role',require('./components/role.vue').default);
Vue.component('user',require('./components/user.vue').default);
//sweetalert start
import Swal from 'sweetalert2'
window.swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

window.toast = Toast;
//sweetalert end
//vform start
import { Form } from 'vform'
import { HasError,AlertError } from 'vform/src/components/bootstrap5'
window.Form = Form;

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
//vform end
const app = new Vue({
    el: '#app'
});
