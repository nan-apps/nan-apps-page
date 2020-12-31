<template>
    <aside class="skills aside section">

		<loading v-if="fetching_attrs || fetching_skills" ></loading>

        <div v-else class="section-inner">

        	<section-icon icon="wrench" ></section-icon>

            <h2 class="heading">Conocimientos</h2>
            <div class="content">
                <p class="intro">
                    {{description}}
                </p>

                <div class="skillset">

                    <skill v-for="skill in skills" :skill="skill" v-bind:key="skill.id">
					</skill>

				</div>              
			</div><!--//content-->  
		</div><!--//section-inner-->                 
	</aside><!--//section-->
</template>

<script>

import Vuex from 'vuex';

	import moment from 'moment';
    import Loading from './Loading.vue';
    import SectionIcon from './SectionIcon.vue';

	let Skill = {
    	props: ['skill'],
    	computed: {
            years(){                 
                return this.skill.start_date ? moment().diff( this.skill.start_date , 'years') : "";
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

    export default {
    	props:['skills', 'fetching_skills', 'fetching_attrs', 'description'],
        components: {
            Loading, 
            SectionIcon,
            Skill
        }
              
	}

</script>
