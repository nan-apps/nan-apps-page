<template>
    <section id="projects-section" class="projects section">

    	<loading v-if="fetching_projects" ></loading>

        <div v-else class="section-inner">

        <section-icon icon="briefcase" ></section-icon>

            <h2 class="heading">Proyectos</h2>
            <div class="content">    

            	<filter-tags :fetching_data="fetching_projects || fetching_projects_tags"
                             :tags="orderedTags"
                             :active_filter_tag="active_filter_tag" 
                             :filterActivator="activateFilterTag"
                             >            		
            	</filter-tags>

            	<hr/>

            	<project v-for="project in filteredProjects" :project="project" >            		
            	</project>

                </div><!--//content-->  
            </div><!--//section-inner-->                 
    </section><!--//section-->

</template>

<script>

	import Vuex from 'vuex';

	import FilterTags from './FilterTags';
	import Project from './ProjectItem';
    import Loading from './Loading.vue';
    import SectionIcon from './SectionIcon.vue';

    export default  {
    	data: function(){
    		return {}
		},
        components: {
        	Project,
        	FilterTags,
            Loading,
            SectionIcon
        },
        mounted: function() {	    
        	this.$store.dispatch('LOAD_PROJECTS');
            this.$store.dispatch('LOAD_PROJECTS_TAGS');
        	this.$store.dispatch('CHOOSE_DEFAULT_ACTIVE_FILTER_TAG', { tag_key: 'highlighted'} );
		},
		computed: Object.assign(
			
			Vuex.mapState({
				projects: (state) => { return state.projects.items },
				default_filter_tag: state => state.projects.default_filter_tag,
				active_filter_tag: state => state.projects.active_filter_tag,
				fetching_projects: state => state.projects.fetching_data,				
                fetching_projects_tags: state => state.projects.tags.fetching_data,               
			}),
			Vuex.mapGetters([
				'filteredProjects',
                'orderedTags'
			])

		),		
        methods: {
            activateFilterTag( tag_key ){
                this.$store.dispatch('CHANGE_ACTIVE_FILTER_TAG', {tag_key});
            }
	    }

	}

</script>