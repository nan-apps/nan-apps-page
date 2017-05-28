<template>
	<span @click="hideSection" class="section-icon fa-stack fa-lg">
	  <i class="fa fa-circle fa-stack-2x"></i>
	  <i :class="'fa fa-'+icon+' fa-stack-1x fa-inverse'"></i>
	</span>
</template>

<script>
	
    
    module.exports = {
    	props: ["icon", "hide_section"],    	
    	methods: {
    		hideSection(){
    			if( this.hide_section ){
    				this.$emit('hide_section');				
    			}
    		}
    	}
	}

</script>

<style scoped>
	span{
		position: absolute; 
		right:10px; 
		top:10px;
	}
</style>