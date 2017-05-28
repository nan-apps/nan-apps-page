<template>
    <section class="latest section">

    	<loading v-if="fetching_data" ></loading>

        <div v-else class="section-inner">
            <h2 class="heading">Proyectos</h2>
            <div class="content">    

            	<filter-tags></filter-tags>

            	<hr/>

            	<project v-for="project in projects" :project="project" ></project>

                </div><!--//content-->  
            </div><!--//section-inner-->                 
    </section><!--//section-->

</template>

<script>

	var moment = require('moment');
	var mixins = require('./mixins');
	var filter_tags = require('./FilterTags');

	var project_item = {
    	props: ['project'],
    	computed: {
    		
    	},
	    template: `
	  	<div class="item row">

	        <div class="col-md-4 col-sm-4 col-xs-12" >
	            <img class="img-responsive project-image" :src="'/img/'+project.key+'_thumb.png'" :alt="project.name" />  
	        </div>
	        <div class="desc col-md-8 col-sm-8 col-xs-12">
	            <h3 class="title">
	                {{project.name}}
	            </h3>
	            <p v-html="project.long_desc" ></p>
		        <p v-if="project.link" >
		        	<a class="more-link" :href="project.link" target="_blank">
	                	<i class="fa fa-external-link"></i> Visitar el sitio
	            	</a>
	            </p>
	        </div>

	    </div>
	  `
	};

    module.exports = {
        mixins: [ mixins ],
    	data: function(){
    		return {    			
			    projects: [],	    
			    fetching_data: false
    		}
		},
        props: [],
        components: {
        	"project": project_item,
        	"filter-tags": filter_tags
        },
        mounted: function() {	    
        	this.fetchProjects();		    
		},
        methods: {
        	fetchProjects(){
        		var self = this;
        		self.fetching_data = true;         		
        		self.fetchData( 'projects', function( response ){
			    	self.projects = response.data;	
			    	self.fetching_data = false; 
			    }, function(){
			    	self.fetching_data = false;
			    });	    	
        	}
	    }		    	    
	}

</script>