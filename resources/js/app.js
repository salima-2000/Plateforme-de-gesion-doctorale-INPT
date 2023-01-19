/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue').default;
 
 import VueRouter from 'vue-router';
 
 
 
 Vue.use(VueRouter);
 // Components
 import Titre from './components/admin/professeur/Titre.vue';
 import Dashboard from './components/admin/professeur/Dashboard.vue';
 import Compte from './components/admin/professeur/Compte.vue';
 //import Formations from './components/admin/professeur/Formations.vue';
 import Sujets from './components/admin/professeur/Sujets.vue';
 import Participants from './components/admin/professeur/Participants.vue';
 import Candidatures from './components/admin/professeur/Candidatures.vue';
 import Propositions from './components/admin/professeur/Propositions.vue';
 import VuePagination from './components/admin/VuePagination.vue';
 import ProposerSujet from './components/admin/professeur/ProposerSujet.vue';
 //Vue.component('dashboard', require('./components/Dashboard.vue'));
 
 
 /* const routes = [
     {
         path: '/',
         name: 'dashboard',
         children: [
             {
                 path: '',
                 name:  'compte',
             }
         ]
         
     }
     
 ];
 const router = new VueRouter({routes});
  */
 const app = new Vue({
     el: '#app',
     //router: router,
     components: {Titre, Dashboard , Compte, Formations, Sujets, Participants, Candidatures, Propositions, VuePagination, ProposerSujet},
     
 });
