
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import VeeValidate from 'vee-validate';
Vue.use(VeeValidate, {
  locale: 'en',   
  inject: false
});

import router from './router';


Vue.component('header-section', require('./components/HeaderSection.vue'));
Vue.component('about-section', require('./components/AboutSection.vue'));
Vue.component('projects-section', require('./components/ProjectsSection.vue'));

Vue.component('info-section', require('./components/InfoSection.vue'));
Vue.component('skills-section', require('./components/SkillsSection.vue'));
Vue.component('partners-section', require('./components/PartnersSection.vue'));
Vue.component('hobbies-section', require('./components/HobbiesSection.vue'));

//Vue.component('studies-section', require('./components/StudiesSection.vue'));
//Vue.component('langs-section', require('./components/LangsSection.vue'));
//Vue.component('job-experience-section', require('./components/JobExperienceSection.vue'));

Vue.component('loading', require('./components/Loading.vue'));
Vue.component('section-icon', require('./components/SectionIcon.vue'));



const app = new Vue({
	router,
	el: '#app',
	data: {
		currentRoute: window.location.pathname,
	    attributes: { birthdate: null, developer: null },	    
	    fetching_attrs: false
	},
	mounted: function() {	    
	    this.fetchAttributes();	    
	},
	methods: {
	  	fetchAttributes: function(){
			var self = this;
			self.fetching_attrs = true;
			axios.get("/api/v1/attributes")
				.then(function (response) {			    	
			    	self.parseResponse( response );	
			    	self.fetching_attrs = false; 
			  	})
			  	.catch(function (error) {
			    	self.fetching_attrs = false;
			  	});
		},
		parseResponse: function( response ){			
			response.data.forEach( function( attr ){    				
				app.attributes[ attr.key ]  = attr.value;
			});			
		}
	}
});





