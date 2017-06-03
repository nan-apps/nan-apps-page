<template>
	<div class="" >
		<loading v-if="fetching_data || fetching_projects" ></loading>

		<div v-else class="btn-group" role="group" aria-label="...">		
			 <filter-tag v-for="tag in orderedTags" 			 			 
			 			 :tag="tag"
			 			 :active_key="active_key" 
			 			 @activate="activate"			 			 
			 			 >
			 </filter-tag> 
			 <filter-tag :tag="{name: 'Todos', key: 'all'}"
			 			 :active_key="active_key" 
			 			 @activate="activate"
			 			 >
			 </filter-tag>			
		</div>

	</div>
</template>

<script>

	var mixins = require('./mixins');

	var filter_tag = {
    	props: ['tag', 'active_key'],
    	data: function(){    		
    		return {}
    	},
    	computed: {
    		active: function(){
    			return this.tag.key == this.active_key;
    		} 
    	},
    	methods: {
    		activateMe: function( event ){
    			this.$emit('activate', this.tag.key, event);
    		}
    	},
	    template: `
	  	<a :title="tag.description" 
	  	   :class="['btn', 'btn-cta-secondary', {'active':active}]" href="#"
	  	    @click="activateMe( $event )" >
	  	    {{tag.name}} <i v-show="active" class="fa fa-check" ></i>
		</a>
	  `
	};

	module.exports = {
        mixins: [ mixins ],
    	data: function(){
    		return {    			
			    tags: [],	    
			    fetching_data: false,
			    active_key: null    
    		}
		},
        props: ['fetching_projects', 'default_filter_tag'],
        components: {
        	"filter-tag": filter_tag,
        },
        computed: {
        	orderedTags : function(){
        		function compare(a,b) {
				  if (a.order > b.order)
				    return -1;
				  if (a.order < b.order)
				    return 1;
				  return 0;
				}
				return this.tags.sort(compare);
        	}
        },
        mounted: function() {	    
        	this.fetchTags();        	        		    
		},
        methods: {
        	fetchTags: function(){
        		var self = this;
        		self.fetching_data = true;         		
        		self.fetchData( 'tags', function( response ){
			    	self.tags = response.data;	
			    	self.fetching_data = false; 
			    	self.activate( self.default_filter_tag );

			    }, function(){
			    	self.fetching_data = false;
			    });	    	
        	},
        	activate: function( key, event ){
        		if (event) event.preventDefault();
        		this.active_key = key;
        		this.$emit('filter_projects_by_tag', key);
        	}
	    }		    	    
	}

</script>