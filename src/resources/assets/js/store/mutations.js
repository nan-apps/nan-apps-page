export const SET_ATTRIBUTES = ( state, { items } ) => {
  	state.attributes = items;
}

export const SET_PROJECTS = ( state, { items } ) => {
  	state.projects.items = items;
}

export const SET_HOBBIES = ( state, { items } ) => {
  	state.hobbies.items = items;
}

export const SET_SKILLS = ( state, { items } ) => {
  	state.skills.items = items;
}

export const SET_PARTNERS = ( state, { items } ) => {
  	state.partners.items = items;
}

export const SET_PROJECTS_TAGS = ( state, { items } ) => {
  	state.projects.tags.items = items;
}

export const SET_ACTIVE_FILTER_TAG = ( state, { tag_key } ) => {	    	
	state.projects.active_filter_tag = tag_key;
}

export const FETCHING_ATTRS = ( state, is_fetching ) => {
	state.fetching_attrs = is_fetching;	
}

export const FETCHING_PROJECTS = ( state, is_fetching ) => {
	state.projects.fetching_data = is_fetching;	
}

export const FETCHING_HOBBIES = ( state, is_fetching ) => {
	state.hobbies.fetching_data = is_fetching;	
}

export const FETCHING_SKILLS = ( state, is_fetching ) => {
	state.skills.fetching_data = is_fetching;	
}

export const FETCHING_PARTNERS = ( state, is_fetching ) => {
	state.partners.fetching_data = is_fetching;	
}

export const FETCHING_PROJECTS_TAGS = ( state, is_fetching ) => {
	state.projects.tags.fetching_data = is_fetching;	
}

