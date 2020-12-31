<template>
	<div class="" >
		<loading v-if="fetching_data" ></loading>

		<div v-else class="btn-group" role="group" aria-label="...">
			<tag v-for="tag in tags"
				v-bind:key="tag.id"
				:tag="tag"
				:active_tag="active_filter_tag"
				:filterActivator="filterActivator"
			 >
			 </tag> 
			 <tag :tag="{name: 'Todos', key: 'all'}"
			 	  :active_tag="active_filter_tag"
			 	  :filterActivator="filterActivator"
			 			 >
			 </tag>			
		</div>

	</div>
</template>

<script>

	import Loading from './Loading.vue';

	let Tag = {
    	props: ['tag', 'active_tag', 'filterActivator'],    	
    	computed: {
    		active(){
    		 	return this.tag.key == this.active_tag;
			}
    	},
    	methods: {
    		activateMe(){    			
    			 this.filterActivator(this.tag.key);
    		}
    	},
	    template: `
	  	<a :title="tag.description" 
	  	   :class="['btn', 'btn-cta-secondary', {'active':active}, tag.css_class]" href="#"
	  	    @click.prevent.stop="activateMe" >
	  	    {{tag.name}} <i v-show="active" class="fa fa-check" ></i>
		</a>
	  `
	};

	export default {
    	props: ['fetching_data',
    			'tags', 
    			'active_filter_tag',
    			'filterActivator'],
        components: {
        	Tag, 
        	Loading
        }  	    
	}

</script>
