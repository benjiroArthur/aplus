/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./jquery-1.12.4.min');

require('./bootstrap');


window.Vue = require('vue');
require('@fortawesome/fontawesome-free/js/all.js');

window.Fire = new Vue();

import VueRouter from 'vue-router';
import axios from "axios";
import { VuejsDatatableFactory } from 'vuejs-datatable';

Vue.use(VueRouter, axios, VuejsDatatableFactory);

import {Form, HasError, AlertError} from 'vform';


window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

import VueProgressBar from 'vue-progressbar'

Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '2px'
});


// Import this component
import datePicker from 'vue-bootstrap-datetimepicker';
window.datePicker = datePicker;

jQuery.extend(true, jQuery.fn.datetimepicker.defaults,{
    icons:{
        time: 'far fa-clock',
        date: 'far fa-calendar',
        up: 'fas fa-arrow-up',
        down: 'fas fa-arrow-down',
        previous: 'fas fa-chevron-left',
        next: 'fas fa-chevron-right',
        today: 'fas fa-calendar',
        clear: 'far fa-trash-alt',
        close: 'far fa-times-circle',

    }
});

import Swal from 'sweetalert2';
window.Swal = Swal;

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
// Install BootstrapVue
Vue.use(BootstrapVue);
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin);


const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
    }
});
window.toast = Toast;

import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueSweetalert2);


Vue.filter('uptext', function(text){
    return text.charAt(0).toUpperCase() + text.slice(1);
});
Vue.filter('myDate', function(text){
    return moment(text).format('MMMM Do YYYY');
});

Vue.filter('fromdate', function(text){
    return moment(text).fromNow();
});



import VueLazyload from 'vue-lazyload';

Vue.use(VueLazyload);

import VueCropper from 'vue-cropperjs';
import 'cropperjs/dist/cropper.css';
Vue.component(VueCropper);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('customer-register', require('./components/Users/CustomerRegister.vue').default);
Vue.component('small-reg', require('./components/Users/SmallReg.vue').default);
Vue.component('customer-form', require('./components/Users/CustomerForm.vue').default);
Vue.component('slider', require('./components/Slider.vue').default);
let routes = [
    {path:'/', component: require('./components/Welcome.vue').default},
    {path:'/about', component: require('./components/Users/About.vue').default},
    {path:'/news', component: require('./components/Users/News.vue').default},
    {path:'/contact-us', component: require('./components/Users/Contact.vue').default},
    {path:'/market-place', component: require('./components/Users/Market.vue').default},
];

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const router = new VueRouter({
    mode:'history',
    routes,

});

const app = new Vue({
    el: '#app',
    router,
    data: () => ({
        pageLoader: true,
    }),
    mounted() {
        setTimeout(val => {
            this.pageLoader = false;
        }, 4000);

    },
    created(){
       // const $userId = $('meta[name = "user-id"]').attr('content')
        //Vue.prototype.$userId = document.querySelector("meta[name='user-id']").getAttribute('content');
    },
});

router.beforeResolve((to, from, next)=>{
    if(to.path){

    }
    next();
});

router.afterEach(()=>{

});
