<template>
    <aside class="skills aside section">

		<loading v-if="fetching_attrs || fetching_data" ></loading>

        <div v-else class="section-inner">

        	<section-icon icon="thumbs-up" ></section-icon>

            <h2 class="heading">Skills</h2>
            <div class="content">
                <p class="intro">
                    {{description}}
                </p>

                <div class="skillset">

                    <skill v-for="skill in skills" :skill="skill" >
					</skill>

				</div>              
			</div><!--//content-->  
		</div><!--//section-inner-->                 
	</aside><!--//section-->
</template>

<script>

	var moment = require('moment');
	var mixins = require('./mixins');

	var skill_item = {
    	props: ['skill'],
    	computed: {
    		years: function(){                
	    		if( this.skill.start_date ){
	    			return moment().diff( this.skill.start_date , 'years');
	    		} else {
	    			return "";
	    		} 		
	    	}
    	},
	    template: `
	  	<div class="item">
            <h3 class="level-title"> {{skill.name}} 
            	<span class="small" v-html="skill.info" ></span>
            	<span class="level-label">{{ years }} años</span> 
        	</h3>
            <div class="level-bar">
                <div class="level-bar-inner" v-bind:data-level="skill.level+'%'">
                </div>                                      
            </div><!--//level-bar-->                                 
        </div><!--//item-->
	  `
	};

    module.exports = {
        mixins: [ mixins ],
    	data: function(){
    		return {    			
			    skills: [],	    
			    fetching_data: false
    		}
		},
        props: ['fetching_attrs', 'description' ],
        components: {
        	"skill": skill_item,
        },
        mounted: function() {	    
        	this.fetchSkills();		    
		},
        methods: {
        	fetchSkills: function(){
        		var self = this;
        		self.fetching_data = true;         		
        		self.fetchData( 'skills', function( response ){
			    	self.skills = response.data;	
			    	self.fetching_data = false; 
			    }, function(){
			    	self.fetching_data = false;
			    });	    	
        	}
	    }		    	    
	}

</script>