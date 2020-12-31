<template>

	<aside class="list partners aside section">

		<loading v-if="fetching_partners" ></loading>


		<div v-else class="section-inner">

			<section-icon icon="heart" ></section-icon>

			<h2 class="heading">Equipo</h2>

			<div class="content">
				<ul class="list-unstyled">

					<partner v-for="partner in partners" :partner="partner" v-bind:key="partner.id">
					</partner>

				</ul>
			</div><!--//content-->
		</div><!--//section-inner-->
	</aside><!--//section-->   
</template>

<script>

	import Loading from './Loading.vue';
	import SectionIcon from './SectionIcon.vue';

	let Partner = {
		props: ['partner'],
		template: `
		<li>
		<i :class="'fa fa-' + partner.icon"></i> 
		<a data-toggle="tooltip" :title="partner.description" data-placement="top" data-animation="true" target="_blank" :href="partner.link">
		{{partner.name}}
		</a>
		</li>
		`
	};

	export default {
		props:['partners', 'fetching_partners'],
		components: {
			Loading, 
			SectionIcon,
			Partner
		}    	    
	}

</script>
