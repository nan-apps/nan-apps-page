<template>
	<div class="item row">

	        <div class="col-md-4 col-sm-4 col-xs-12" >
	            <img class="img-responsive project-image" :src="'/img/'+project.key+'_thumb.png'" :alt="project.name" />  
	        </div>
	        <div class="desc col-md-8 col-sm-8 col-xs-12">
	            <h3 class="title">
	                {{project.name}}
	                <tags :tags="project.tags" ></tags>
	            </h3>

	            <description :project="project" :partner="project.partner" ></description>
	            	            
		        <p v-if="project.link" >
		        	<a class="more-link" :href="project.link" target="_blank">
	                	<i class="fa fa-external-link"></i> Visitar el sitio
	            	</a>
	            </p>	            
	            <p v-if="project.github_link" >
	            	<a class="more-link" :href="project.github_link" target="_blank">
	            		<i class="fa fa-github-alt"></i> Ver en GitHub</a>
            	</p>
	        </div>

	    </div>
</template>

<script>	

	var description = {
    	props: ['project', 'partner'],    	
	    template: `
	    <div>
		  	<div v-html="project.long_desc" ></div>	  	
	    	<div v-if="partner">
	    		Trabajo realizado en equipo junto a 
	    		<a :title="partner.description" :href="partner.link" >
	    			{{partner.name}}
				</a>.
	    	</div>
        </div>
	  `
	};

	var tags = {
    	props: ['tags'],    	
	    template: `
		    <span>
		    	<span v-for="tag in tags" :title="tag.description" 		    							  
		    							  class="label label-theme" >
		    		{{tag.name}}
		    	</span>		  	
	        </span>
	  `
	};



	module.exports = {
		props: ['project'],
		components: {
        	"description": description,
        	"tags": tags
        },
	}
</script>