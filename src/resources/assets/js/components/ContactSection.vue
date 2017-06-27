<template>

	<transition  name="fade">
		<section  class="contact section">

	        <div class="section-inner">
		            
	    	    <router-link to="/" >
		        	<section-icon title="Cerrar contacto" icon="close" ></section-icon>
	        	</router-link> 
	            
	            <h2 class="heading">
	                Contacto
	            </h2>
	            <div class="content column">  

	            	<form @submit.prevent="validateAndSubmit" 
	            		  class="form-horizontal" 
	            		  role="form" >  

	                    <div  class="form-group has-feedback" :class="validateData('contact_email').class">

	                        <label for="email" class="col-md-1 control-label"> <i class="fa fa-envelope-square" ></i></label>
	                        <div class="col-md-11">
	                            <input v-validate="{ rules: { required: true, email: true } }"
	                            	   type="email" 
	                            	   class="form-control" 
	                            	   placeholder="Email"
	                            	   name="contact_email"
	                            	   v-model="form_email"
	                            	   >
	                            <span class="form-control-feedback">
							        <i class="fa" :class="validateData('contact_email').icon"  ></i>
							    </span>	
							                        
	                        </div>
	                    </div>

	                    <div  class="form-group has-feedback" :class="validateData('contact_name').class">
	                        <label for="name" class="col-md-1 control-label"> <i class="fa fa-user" ></i></label>
	                        <div class="col-md-11">
	                            <input 
	                            	v-validate="{ rules: { required: true } }"
	                            	type="text" 
	                            	class="form-control" 
	                            	name="contact_name" 
	                            	v-model="form_name"
	                            	placeholder="Nombre">
	                            <span class="form-control-feedback">
							        <i class="fa" :class="validateData('contact_name').icon"  ></i>
							    </span>	  
							            	
	                        </div>
	                    </div>            
	                    <div class="form-group" v-show="false">
	                        <label for="name" class="col-md-1 control-label"> <i class="fa fa-user" ></i></label>
	                        <div class="col-md-11">
	                            <input type="text" class="form-control" name="url" placeholder="Url">
	                        </div>
	                    </div>       

	                    <div  class="form-group has-feedback" :class="validateData('contact_message').class">
	                        <label for="message" class="col-md-1 control-label"> <i class="fa fa-pencil" ></i></label>
	                        <div class="col-md-11">
	                            <textarea v-validate="{ rules: { required: true } }"
	                            		  v-model="form_message"	
	                            	      name="contact_message" 
	                            		  class="form-control" 
	                            		  rows="6" 
	                            		  placeholder="Consulta" ></textarea>
	                            <span v-show="errors.has('contact_message')" class="help-block">
	                             	<small>
	                             		<i class="fa fa-exclamation-triangle" ></i> Ingrese su consulta
	                             	</small>	
                             	</span>	        			  
	                        </div>
	                    </div>

	                    <div v-show="user_message" class="row">	                        
	                        <div class="col-md-12">
                                  <div class="form-group alert display-none" :class="user_message_class" >
			                    	<i class="fa" :class="user_message_icon" ></i> {{user_message}}
			                    </div>  	  			  
	                        </div>
	                    </div>

	                    <div class="row">
	                    	<div class="col-md-12">
	                    		<button type="submit"  class="btn btn-cta-primary pull-right" >
			                    	<i class="fa fa-paper-plane"></i> Enviar
			                	</button>			         
			                    
	                    	</div>
	                    	                 	
	                    </div>
	                    <div class="row" >
	                    	<div class="col-md-12">			                           	
			                    <p class="text-right"> 
			                    	Ó escribime a <a :href="'mailto:'+dev_attrs.email" >{{dev_attrs.email}}</a> 
		                    	</p>			                    			                                     		
	                    	</div>	   
	                    </div>
	                
	            </form>

	            </div><!--//content-->
	        </div><!--//section-inner-->                 

	    </section><!--//section-->
    </transition>
</template>

<script>

    module.exports = {
    	$validates: true,
    	data: function(){
    		return {
    			show_msg: false,
    			form_email: null,
    			form_name: null,
    			form_message: null,
    			user_message: "",
    			user_message_icon: "",
    			user_message_class: ""
    		}
    	},
        props: ['dev_attrs'],  
        mounted: function(){
        	this.scroll();		
        },    
        methods: {

        	validateData( field_name ){

        		return this.errors.has( field_name ) ? { 'class': 'has-error', 'icon': 'fa-times'} 
													     : { 'class': 'has-succcess', 'icon': 'fa-check'};
				
			},
        	scroll(){
        		this.$scrollTo('#router-view', 1000);		
        	},
			validateAndSubmit(){

				var err_msg = "Hubo algun error al enviar el contacto, si podés volvé a intentar o escribime a "+this.dev_attrs.email;	

				this.$validator.validateAll().then( (result) => {
					if( result ){						
				    	axios.post('/api/v1/contact_messages', {
						    email: this.form_email,
						    name: this.form_name,
						    message: this.form_message,
							}).then( (response) => {							
							    this.user_message = "Gracias por contactarte, ni bien pueda te respondo. Saludos!";
							    this.user_message_icon = "fa-check";
							    this.user_message_class = "alert-success";
							})
							.catch( (error) => {
							    this.user_message = err_msg;
							    this.user_message_icon = "fa-remove";
							    this.user_message_class = "alert-danger";
						    });	
					}

			    }).catch( () => {
			    	this.user_message = err_msg;
			    	this.user_message_icon = "fa-remove";
			    	this.user_message_class = "alert-danger";
			    });

			}

        }
	}

</script>

<style scoped >
	.section-icon{
		cursor: pointer;
	}
</style>