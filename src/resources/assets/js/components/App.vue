<template>
	<div class="app-container" >
		<header-section 
			:developer="attributes.developer" 
			:title="attributes.title">
		</header-section>

		<div class="container sections-wrapper main-container">            

			<div class="row">
				<div class="primary col-md-8 col-sm-12 col-xs-12">

					<router-view id="router-view" :dev_attrs="attributes" >
					</router-view>
					
					<about-section :fetching_attrs="fetching_attrs"
								   :description="aboutMeDescription"
								   :developer="attributes.developer" >
					</about-section>

					<projects-section></projects-section>

				</div>
				<div class="secondary col-md-4 col-sm-12 col-xs-12">
					
					<info-section :fetching_attrs="fetching_attrs"
						:email="attributes.email"
						:developer="attributes.developer"
						:location="attributes.location" >
					</info-section>

					<skills-section :skills="skills.items" 
									:fetching_skills="skills.fetching_data" 
									:fetching_attrs="fetching_attrs"
									:description="skillsDescription">
					</skills-section>

					<partners-section :partners="partners.items" 
									  :fetching_partners="partners.fetching_data" 
									  :fetching_attrs="fetching_attrs" >
					</partners-section>

					<hobbies-section :hobbies="hobbies.items" 
									 :fetching_hobbies="hobbies.fetching_data" 
									 :fetching_attrs="fetching_attrs">						
					</hobbies-section>

				</div>
			</div>
		</div>
	</div>	
	 
</template>

<script>

	import Vuex from 'vuex';

	import HeaderSection from './HeaderSection.vue';
	import AboutSection from './AboutSection.vue';
	import ProjectsSection from './ProjectsSection.vue';

	import InfoSection from './InfoSection.vue';
	import SkillsSection from './SkillsSection.vue';
	import PartnersSection from './PartnersSection.vue';
	import HobbiesSection from './HobbiesSection.vue';

	//import StudiesSection from './StudiesSection.vue';
	//import LangsSection from './LangsSection.vue';
	//import Job-experienceSection from './JobExperienceSection.vue';

	export default {
		name: 'App',    	
		data: () => {
			return {
				current_route: window.location.pathname,	    
			}
		},
		components: {
			HeaderSection, 
			AboutSection, 
			ProjectsSection, 
			InfoSection, 
			SkillsSection, 
			PartnersSection, 
			HobbiesSection		
		},
		computed: Object.assign(

			Vuex.mapState({
				attributes: state => state.attributes,
				fetching_attrs: state => state.fetching_attrs,    
				skills: state => state.skills,
				partners: state => state.partners,
				hobbies: state => state.hobbies              
			}),
			Vuex.mapGetters([
				'skillsDescription',
				'aboutMeDescription'
				])

			),
		mounted: function() {	    
			this.$store.dispatch('LOAD_ATTRIBUTES');
			this.$store.dispatch('LOAD_SKILLS');
			this.$store.dispatch('LOAD_PARTNERS');
			this.$store.dispatch('LOAD_HOBBIES');
		},    	    
	}

</script>
