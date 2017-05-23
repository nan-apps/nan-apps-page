module.exports = {

	methods: {
		fetchData: function( end_point, success_callback, error_callback ){
			axios.get("/api/v1/"+end_point)
				.then(function (response) {			    	
					success_callback( response );
			  	})
			  	.catch(function (error) {
			  		error_callback();			    	
			  	});
		}
	}

}