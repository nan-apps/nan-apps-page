<template>
	<span class="fa-stack fa-lg">
	  <i class="fa fa-circle fa-stack-2x"></i>
	  <i :class="'fa fa-'+icon+' fa-stack-1x fa-inverse'"></i>
	</span>
</template>

<script>
	
    
    module.exports = {
    	props: ["icon"]
	}

</script>

<style scoped>
	span{
		position: absolute; 
		right:10px; 
		top:10px;
	}
</style>