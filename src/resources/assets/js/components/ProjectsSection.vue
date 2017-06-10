<template>

    <section class="latest section">

    	<loading v-if="fetching_data" ></loading>

        <div v-else class="section-inner">

        <section-icon icon="briefcase" ></section-icon>

            <h2 class="heading">Proyectos</h2>
            <div class="content">    

            	<filter-tags :fetching_projects="fetching_data" 
            				 :default_filter_tag="default_filter_tag" 
            				  @filter_projects_by_tag="filterByTag" >            		
            	</filter-tags>

            	<hr/>

            	<project v-for="project in filteredProjects" :project="project" >            		
            	</project>

                </div><!--//content-->  
            </div><!--//section-inner-->                 
    </section><!--//section-->

</template>

<script>

	var moment = require('moment');
	var mixins = require('./mixins');
	var filter_tags = require('./FilterTags');
	var project = require('./ProjectItem');

    module.exports = {
        mixins: [ mixins ],
    	data: function(){
    		return {    			
			    projects: [],	    
			    default_filter_tag: 'highlighted',
			    active_filter: '',
			    fetching_data: false,
    		}
		},
        components: {
        	"project": project,
        	"filter-tags": filter_tags
        },
        mounted: function() {	    
        	this.fetchProjects();		    
		},
		computed: {
			filteredProjects: function(){				
				
				var self = this;
				console.log( this.active_filter );

				if( !this.active_filter || this.active_filter == 'all' ){
					return this.projects;
				} else {
					var filtered = this.projects.filter( function(obj) {
						var ctrl = false;	
						obj.tags.forEach(function( o ){
							if( !ctrl ){
								ctrl = o.key == self.active_filter;	
							} 
						});
					    return ctrl;
					});
					return filtered;
				}
			}
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
        	},
        	filterByTag( tag_key ){
        		this.active_filter = tag_key;		
        	}
	    }		    	    
	}

</script>