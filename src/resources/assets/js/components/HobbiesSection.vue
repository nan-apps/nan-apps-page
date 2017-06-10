<template>

	<aside class="list hobbies aside section">

		<loading v-if="fetching_data" ></loading>


	    <div v-else class="section-inner">

        	<section-icon icon="bicycle" ></section-icon>

	        <h2 class="heading">Intereses</h2>

	        <div class="content">
	            <ul class="list-unstyled">

	            	<hobby v-for="hobby in hobbies" :hobby="hobby" >
					</hobby>

	            </ul>
	        </div><!--//content-->
	    </div><!--//section-inner-->
	</aside><!--//section-->   
</template>

<script>

	var mixins = require('./mixins');

	var hobby = {
    	props: ['hobby'],
	    template: `
	  	<li>
	  		<i :class="'fa fa-' + hobby.icon"></i> 
	  		<a v-if="hobby.link" disabled data-toggle="tooltip" data-placement="top" data-animation="true" target="_blank" :href="hobby.link">
	  			{{hobby.name}}
  			</a>
  			<span v-else >
  				{{hobby.name}}
  			</span>
  		</li>
	  `
	};

    module.exports = {
        mixins: [ mixins ],
    	data: function(){
    		return {    			
			    hobbies: [],	    
			    fetching_data: false
    		}
		},
        components: {
        	"hobby": hobby,
        },
        mounted: function() {	    
        	this.fetchHobbies();		    
		},
        methods: {
        	fetchHobbies: function(){
        		var self = this;
        		self.fetching_data = true;         		
        		self.fetchData( 'hobbies', function( response ){
			    	self.hobbies = response.data;	
			    	self.fetching_data = false; 
			    }, function(){
			    	self.fetching_data = false;
			    });	    	
        	}
	    }		    	    
	}

</script>