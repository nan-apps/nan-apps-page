import moment from 'moment';

export const filteredProjects = state => {	

	let items = {};

	if( !state.projects.active_filter_tag || state.projects.active_filter_tag == 'all' ){
		items = state.projects.items;
	} else {

		//filtro con lodash
		items = _.filter( state.projects.items,  (project) => {
		  return _.includes( _.map( project.tags, 'key'), state.projects.active_filter_tag );
		});
	}

	return _.orderBy( items, 'created_at', 'desc' );
}

export const orderedTags = (state) => {
	let items = state.projects.tags.items;
	return _.orderBy( items, 'order', 'desc' );
}

export const aboutMeDescription = (state) => {
	let age = moment().diff( state.attributes.birthdate , 'years');
	let content = state.attributes.about_me;
	return content ? content.replace( "%age%", age ) : "";
}

export const skillsDescription = (state) => {
	let years = moment().diff( state.attributes.programming_startdate , 'years');
	let content = state.attributes.skills;
	return content ? content.replace( "%programming_startdate%", years ) : "";
}