
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

Vue.component('navbar', require('./components/Navbar.vue'));
// Vue.component('modal', require('./components/Modal.vue'));
Vue.component('bottomnav', require('./components/Footer.vue'));
Vue.component('modal', {
	template: `
	<div>
		<button class="button is-primary" v-on:click="toggleModal" id="add-comment">Add comment</button>
		<div class="modal" id="modal" v-bind:class="{ 'is-active': isActive}">
 	  		<div class="modal-background"></div>
 		 	<div class="modal-card">
 		   		<header class="modal-card-head">
    		  		<p class="modal-card-title">Choose a comic</p>
     		  		<button class="delete" aria-label="close" v-on:click="toggleModal"></button>
    	   		</header>
    			<section class="modal-card-body">
     	 			<slot name="comics"></slot>
    			</section>
    			<footer class="modal-card-foot">
      				<button class="button is-danger" v-on:click="toggleModal">Cancel</button>
    			</footer>
  			</div>
		</div>
  	</div>
  `,
   data() {
   	return { isActive: false };
   },
   methods: {
  	toggleModal: function() {
                this.isActive = !this.isActive;
            }
  }
});

const app = new Vue({
    el: '#root'
});
