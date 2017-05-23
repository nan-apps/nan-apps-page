<template>
	<section class="about section">
        
        <loading v-if="fetching_attrs" ></loading>

        <div v-else class="section-inner">
            <img class="img-responsive profile-photo pull-right img-circle" src="/img/profile_photo.png" :alt="developer" />
            <h2 class="heading">
                Sobre mi
            </h2>
            <div class="content column" v-html="content">                
            </div><!--//content-->
        </div><!--//section-inner-->                 

    </section><!--//section-->
</template>

<script>
	
    var moment = require('moment');
    
    module.exports = {
        props: ['fetching_attrs','content', 'developer'],                   
	    computed: {
	    	age: function(){                
	    		if( this.birthdate ){
	    			return moment().diff( this.birthdate , 'years');
	    		} else {
	    			return "";
	    		} 		
	    	}
	    }	  

	}

</script>

<style scoped >
    
    /* About Section */
    .section.about  .profile-photo{
      max-width: 40px;
      position: absolute;
      right:10px; 
      top:10px;
    }


</style>