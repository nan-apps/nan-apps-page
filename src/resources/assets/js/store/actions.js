import * as services from '../services';

export const LOAD_ATTRIBUTES = ({ commit }) => {	
	commit( 'FETCHING_ATTRS', true  );
  	services.getAttributesFromApi().then( (response) => {	      	  		
    	commit( 'SET_ATTRIBUTES', { items: response });
    	commit( 'FETCHING_ATTRS', false  );
  	}, (err) => {
    	console.log(err);
    	commit( 'FETCHING_ATTRS', false  );
  	});

}

export const LOAD_PROJECTS = ({ commit }) => {
	commit( 'FETCHING_PROJECTS', true  );
	services.getProjectsFromApi().then( (response) => {
		commit( 'SET_PROJECTS', { items: response });
		commit( 'FETCHING_PROJECTS', false  );
	}, (err) => {
		console.log(err);
		commit( 'FETCHING_PROJECTS', false  );
	})
}

export const LOAD_PROJECTS_TAGS = ({ commit }) => {
	commit( 'FETCHING_PROJECTS_TAGS', true  );
	services.getProjectTagsFromApi().then( (response) => {
		commit( 'SET_PROJECTS_TAGS', { items: response });
		commit( 'FETCHING_PROJECTS_TAGS', false  );
	}, (err) => {
		console.log(err);
		commit( 'FETCHING_PROJECTS_TAGS', false  );
	})
}

export const LOAD_HOBBIES = ({ commit }) => {
	commit( 'FETCHING_HOBBIES', true  );
	services.getHobbiesFromApi().then( (response) => {
		commit( 'SET_HOBBIES', { items: response });
		commit( 'FETCHING_HOBBIES', false  );
	}, (err) => {
		console.log(err);
		commit( 'FETCHING_HOBBIES', false  );
	})
}

export const LOAD_SKILLS = ({ commit }) => {
	commit( 'FETCHING_SKILLS', true  );
	services.getSkillsFromApi().then( (response) => {
		commit( 'SET_SKILLS', { items: response });
		commit( 'FETCHING_SKILLS', false  );
	}, (err) => {
		console.log(err);
		commit( 'FETCHING_SKILLS', false  );
	})
}

export const LOAD_PARTNERS = ({ commit }) => {
	commit( 'FETCHING_PARTNERS', true  );
	services.getPartnersFromApi().then( (response) => {
		commit( 'SET_PARTNERS', { items: response });
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

