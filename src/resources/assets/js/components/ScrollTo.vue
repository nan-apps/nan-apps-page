<template>	
</template>

<script>
	
    
    module.exports = {

    	props: ['target'],

    	mounted: function(){
    		this.$scrollTo( this.target, 1000);
    	}

	}

</script>