<template>
	<section>
		<img class="earth" src="/img/earth.png" />   
		<header class="header">
		    <div class="container">
		    	
		    	<avatar-comp :developer="developer" ></avatar-comp>

		        <div class="profile-content pull-left">

		        	<title-comp :developer="developer" :title="title" ></title-comp>
		          	
		          	<social-comp></social-comp>
		            
		        </div><!--//profile-->

		        <a v-on:click="$emit('show_contact', $event)" class="btn btn-cta-primary pull-right" href="/contact"><i class="fa fa-paper-plane"></i> Contactame</a>              

		    </div><!--//container-->
		</header><!--//header-->
	</section>
</template>

<script>
	

    var avatar_comp = {
    	props: ['developer'],
	    template: `
	  	<a href="/" >
            <img class="profile-image img-responsive pull-left img-thumbnail img-circle" src="/img/profile.png" v-bind:alt="developer" />            
        </a>
	  `
	};

	var title_comp = {
		props: ['developer', 'title'],
	    template: `
	    <div>
	  	<h1 class="name">{{developer}}</h1>
        <h2 class="desc"><div v-html="title"></div></h2>   
        </div>
	  `
	};

	var social_comp = {    	
	    template: `
	  	<ul class="social list-inline">
            <li>
            	<a title="Github" target="_blank" href="https://github.com/nan-apps/"><i class="fa fa-github-alt"></i></a>
        	</li> 
            <li>
            	<a title="Linkedin" target="_blank" href="https://www.linkedin.com/in/nangastonr"><i class="fa fa-linkedin"></i></a>
        	</li>
            <!--<li><a target="_blank" href="https://www.facebook.com/nan.apps.web"><i class="fa fa-facebook"></i></a></li>-->
            <li>
            	<a title="Tumblr" target="_blank" href="http://gnan-blog.tumblr.com/"><i class="fa fa-tumblr"></i></a>
        	</li>
        </ul> 
	  `
	};
    
    module.exports = {
    	props: ['developer', 'title'],    	
    	components:{
    		"avatar-comp": avatar_comp,
    		"social-comp": social_comp,
    		"title-comp": title_comp
    	},
	}

</script>