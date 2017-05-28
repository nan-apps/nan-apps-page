<template>
	<div>
		<loading v-if="fetching_data" ></loading>

		<div v-else class="btn-group" role="group" aria-label="...">		
			 <filter-tag v-for="tag in orderedTags" :tag="tag" >
			 </filter-tag>			
		</div>

	</div>
</template>

<script>

	var mixins = require('./mixins');

	var filter_tag = {
    	props: ['tag'],
    	computed: {
    	},
    	methods:{
    	},
	    template: `
	  	<a :title="tag.description" @click="" class="btn btn-cta-secondary" href="#">
			<i v-show="active" class="fa fa-check" ></i> {{tag.name}}
		</a>
	  `
	};

	module.exports = {
        mixins: [ mixins ],
    	data: function(){
    		return {    			
			    tags: [],	    
			    fetching_data: false
    		}
		},
        props: [],
        components: {
        	"filter-tag": filter_tag,
        },
        computed: {
        	orderedTags : function(){
        		//sort tags
        	}
        }
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
			    }, function(){
			    	self.fetching_data = false;
			    });	    	
        	}
	    }		    	    
	}

</script>