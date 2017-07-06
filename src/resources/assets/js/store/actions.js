export const LOAD_ATTRIBUTES = ({ commit }) => {
	commit( 'FETCHING_ATTRS', true  );
  	axios.get('/api/v1/attributes').then( (response) => {	      	
  		let items = {};
	  	response.data.forEach( function( attr ){    				
			items[ attr.key ]  = attr.value;
		});	
    	commit( 'SET_ATTRIBUTES', { items: items });
    	commit( 'FETCHING_ATTRS', false  );
  	}, (err) => {
    	console.log(err);
    	commit( 'FETCHING_ATTRS', false  );
  	});
}

export const LOAD_PROJECTS = ({ commit }) => {
	commit( 'FETCHING_PROJECTS', true  );
	axios.get('/api/v1/projects').then( (response) => {
		commit( 'SET_PROJECTS', { items: response.data });
		commit( 'FETCHING_PROJECTS', false  );
	}, (err) => {
		console.log(err);
		commit( 'FETCHING_PROJECTS', false  );
	})
}

export const LOAD_PROJECTS_TAGS = ({ commit }) => {
	commit( 'FETCHING_PROJECTS_TAGS', true  );
	axios.get('/api/v1/tags').then( (response) => {
		commit( 'SET_PROJECTS_TAGS', { items: response.data });
		commit( 'FETCHING_PROJECTS_TAGS', false  );
	}, (err) => {
		console.log(err);
		commit( 'FETCHING_PROJECTS_TAGS', false  );
	})
}

export const LOAD_HOBBIES = ({ commit }) => {
	commit( 'FETCHING_HOBBIES', true  );
	axios.get('/api/v1/hobbies').then( (response) => {
		commit( 'SET_HOBBIES', { items: response.data });
		commit( 'FETCHING_HOBBIES', false  );
	}, (err) => {
		console.log(err);
		commit( 'FETCHING_HOBBIES', false  );
	})
}

export const LOAD_SKILLS = ({ commit }) => {
	commit( 'FETCHING_SKILLS', true  );
	axios.get('/api/v1/skills').then( (response) => {
		commit( 'SET_SKILLS', { items: response.data });
		commit( 'FETCHING_SKILLS', false  );
	}, (err) => {
		console.log(err);
		commit( 'FETCHING_SKILLS', false  );
	})
}

export const LOAD_PARTNERS = ({ commit }) => {
	commit( 'FETCHING_PARTNERS', true  );
	axios.get('/api/v1/partners').then( (response) => {
		commit( 'SET_PARTNERS', { items: response.data });
		commit( 'FETCHING_PARTNERS', false  );
	}, (err) => {
		console.log(err);
		commit( 'FETCHING_PARTNERS', false  );
	})
}

export const CHOOSE_DEFAULT_ACTIVE_FILTER_TAG = ( {commit}, {tag_key} ) => {	    	
	commit("SET_ACTIVE_FILTER_TAG", { tag_key: tag_key });
}

export const CHANGE_ACTIVE_FILTER_TAG = ( {commit}, {tag_key} ) => {
	commit("SET_ACTIVE_FILTER_TAG", { tag_key: tag_key });
}

export const SEND_CONTACT_MESSAGE = ( {commit}, {data} ) => {
	commit("SET_ACTIVE_FILTER_TAG", { tag_key: tag_key });
}

