<template>

	<aside class="list partners aside section">

		<loading v-if="fetching_data" ></loading>


	    <div v-else class="section-inner">

        	<section-icon icon="heart" ></section-icon>

	        <h2 class="heading">Equipo y amigos</h2>

	        <div class="content">
	            <ul class="list-unstyled">

	            	<partner v-for="partner in partners" :partner="partner" >
					</partner>

	            </ul>
	        </div><!--//content-->
	    </div><!--//section-inner-->
	</aside><!--//section-->   
</template>

<script>

	var mixins = require('./mixins');

	var partner = {
    	props: ['partner'],
	    template: `
	  	<li>
	  		<i :class="'fa fa-' + partner.icon"></i> 
	  		<a data-toggle="tooltip" :title="partner.description" data-placement="top" data-animation="true" target="_blank" :href="partner.link">
	  			{{partner.name}}
  			</a>
  		</li>
	  `
	};

    module.exports = {
        mixins: [ mixins ],
    	data: function(){
    		return {    			
			    partners: [],	    
			    fetching_data: false
    		}
		},
        components: {
        	"partner": partner,
        },
        mounted: function() {	    
        	this.fetchPartners();		    
		},
        methods: {
        	fetchPartners: function(){
        		var self = this;
        		self.fetching_data = true;         		
        		self.fetchData( 'partners', function( response ){
			    	self.partners = response.data;	
			    	self.fetching_data = false; 
			    }, function(){
			    	self.fetching_data = false;
			    });	    	
        	}
	    }		    	    
	}

</script>