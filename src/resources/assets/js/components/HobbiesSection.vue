<template>

	<aside class="list hobbies aside section">

		<loading v-if="fetching_hobbies" ></loading>


	    <div v-else class="section-inner">

        	<section-icon icon="bicycle" ></section-icon>

	        <h2 class="heading">Intereses</h2>

	        <div class="content">
	            <ul class="list-unstyled">

	            	<hobby v-for="hobby in hobbies" :hobby="hobby" >
					</hobby>

	            </ul>
	        </div><!--//content-->
	    </div><!--//section-inner-->
	</aside><!--//section-->   
</template>

<script>

	import Loading from './Loading.vue';
    import SectionIcon from './SectionIcon.vue';

	let Hobby = {
    	props: ['hobby'],
	    template: `
	  	<li>
	  		<i :class="'fa fa-' + hobby.icon"></i> 
	  		<a v-if="hobby.link" disabled data-toggle="tooltip" data-placement="top" data-animation="true" target="_blank" :href="hobby.link">
	  			{{hobby.name}}
  			</a>
  			<span v-else >
  				{{hobby.name}}
  			</span>
  		</li>
	  `
	};

    export default {    	
        props:['hobbies', 'fetching_hobbies'],
        components: {
            Loading, 
            SectionIcon,
            Hobby
        }    	    
	}

</script>