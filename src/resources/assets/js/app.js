
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

Vue.component('header-section', require('./components/HeaderSection.vue'));
Vue.component('about-section', require('./components/AboutSection.vue'));
Vue.component('info-section', require('./components/InfoSection.vue'));
Vue.component('skills-section', require('./components/SkillsSection.vue'));
Vue.component('contact-section', require('./components/ContactSection.vue'));
Vue.component('projects-section', require('./components/ProjectsSection.vue'));

Vue.component('loading', require('./components/Loading.vue'));
Vue.component('section-icon', require('./components/SectionIcon.vue'));

const app = new Vue({

	el: '#app',
	data: {
	    attributes: { birthdate: null, developer: null },	    
	    fetching_attrs: false,
	    show_contact_section: false,
	},
	mounted: function() {	    
	    this.fetchAttributes();	    
	},
	methods: {
		toggleSection: function( target, toggle, event ){
			if (event) event.preventDefault()
			this.show_contact_section = toggle;				
			if( toggle ) 
				this.$scrollTo( target, 1000/*, duration, options*/);		
			else
				this.$scrollTo('body', 1000/*, duration, options*/);		
		},
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
			$( response.data ).each(function( i, attr ){    
				app.attributes[ attr.key ]  = attr.value;
			});			
		}
	}
});





