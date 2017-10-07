export const getAttributesFromApi = () => {
	
  	return axios.get('/api/v1/attributes').then( (response) => {	      	
  		let items = {};
        response.data.forEach( function( attr ){                    
            items[ attr.key ]  = attr.value;
        }); 
        return items;
  	});

}

export const getProjectsFromApi = () => {    
    return axios.get('/api/v1/projects').then( (response) => {
        return response.data;
    });
}

export const getProjectTagsFromApi = () => {    
    return axios.get('/api/v1/tags').then( (response) => {
        return response.data;
    });
}

export const getProjectHobbiesFromApi = () => {    
    return axios.get('/api/v1/hobbies').then( (response) => {
        return response.data;
    });
}

export const getHobbiesFromApi = () => {    
    return axios.get('/api/v1/hobbies').then( (response) => {
        return response.data;
    });
}

export const getSkillsFromApi = () => {    
    return axios.get('/api/v1/skills').then( (response) => {
        return response.data;
    });
}

export const getPartnersFromApi = () => {    
    return axios.get('/api/v1/partners').then( (response) => {
        return response.data;
    });
}