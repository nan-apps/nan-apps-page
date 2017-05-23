<template>

	<transition name="fade">
		<section class="contact section" id="contact-section" >

	        <div class="section-inner">
		            
	    	    <section-icon v-on:click="$emit('hide_contact')" icon="close" ></section-icon>
	            
	            <h2 class="heading">
	                Contacto
	            </h2>
	            <div class="content column">  

	            	<form class="form-horizontal" role="form">  
	                    <div class="form-group">
	                        <label for="email" class="col-md-1 control-label"> <i class="fa fa-envelope-square" ></i></label>
	                        <div class="col-md-11">
	                            <input type="email" class="form-control" name="email" placeholder="Email">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="name" class="col-md-1 control-label"> <i class="fa fa-user" ></i></label>
	                        <div class="col-md-11">
	                            <input type="text" class="form-control" name="name" placeholder="Nombre">
	                        </div>
	                    </div>            
	                    <div class="form-group" v-show="false">
	                        <label for="name" class="col-md-1 control-label"> <i class="fa fa-user" ></i></label>
	                        <div class="col-md-11">
	                            <input type="text" class="form-control" name="url" placeholder="Url">
	                        </div>
	                    </div>            
	                    <div class="form-group">
	                        <label for="message" class="col-md-1 control-label"> <i class="fa fa-pencil" ></i></label>
	                        <div class="col-md-11">
	                            <textarea name="message" class="form-control" rows="6" placeholder="Consulta" ></textarea>
	                        </div>
	                    </div>

	                    <div v-show="show_msg" class="form-group alert alert-info display-none"></div>  

	                    <button type="submit"  class="btn btn-cta-primary pull-right" >
	                    	<i class="fa fa-paper-plane"></i> Enviar
	                	</button>
	                    <div class="clearfix" ></div>
	                    <p class="pull-right" > Ó escribime a <a :href="'mailto:'+email" >{{email}}</a> </p>
	                
	            </form>

	            </div><!--//content-->
	        </div><!--//section-inner-->                 

	    </section><!--//section-->
    </transition>
</template>

<script>
	
    module.exports = {
    	data: function(){
    		return {
    			show_msg: false
    		}
    	},
        props: ['email']
	}

</script>
