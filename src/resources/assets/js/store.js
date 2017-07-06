import Vue from 'vue';

import Vuex from 'vuex';
Vue.use( Vuex );

const store = new Vuex.Store({
	strict: true,
	state: {		
		attributes: { birthdate: null, developer: null },
		fetching_attrs: false,
		projects: {
			items: [],
			default_filter_tag: null,
			active_filter_tag: '',
			fetching_data: false,
			filtered_items: []
		},
		tags: {
			items: [],
			fetching_data: false,
		},
	},
	getters: {
		filteredProjects: state => {
			
			if( !state.projects.active_filter_tag || state.projects.active_filter_tag == 'all' ){
				return state.projects.items;
			} else {

				//filtro con lodash
				var filtered = _.filter( state.projects.items,  (project) => {
				  return _.includes( _.map( project.tags, 'key'), state.projects.active_filter_tag );
				});

				return filtered;
			}
		}
		
	},
	mutations: {
		SET_ATTRIBUTES: ( state, { items } ) => {
	      	state.attributes = items;
	    },
		SET_PROJECTS: ( state, { items } ) => {
	      	state.projects.items = items;
	    },
	    SET_PROJECTS: ( state, { items } ) => {
	      	state.tags.items = items;
	    },
	    SET_ACTIVE_FILTER_TAG: ( state, { tag_key } ) => {	    	
	    	state.projects.active_filter_tag = tag_key;
	    }
	},
	actions: {
	    LOAD_ATTRIBUTES: function ({ commit }) {
	      axios.get('/api/v1/attributes').then( (response) => {	      	
	      	let items = {};
	      	response.data.forEach( function( attr ){    				
				items[ attr.key ]  = attr.value;
			});	
	        commit( 'SET_ATTRIBUTES', { items: items })
	      }, (err) => {
	        console.log(err)
	      })
	    },
	    LOAD_PROJECTS: function ({ commit }) {
	      axios.get('/api/v1/projects').then( (response) => {
	        commit( 'SET_PROJECTS', { items: response.data })
	      }, (err) => {
	        console.log(err)
	      })
	    },
	    LOAD_TAGS: function ({ commit }) {
	      axios.get('/api/v1/tags').then( (response) => {
	        commit( 'SET_TAGS', { items: response.data })
	      }, (err) => {
	        console.log(err)
	      })
	    },
	    CHOOSE_DEFAULT_FILTER_TAG: ( {commit}, {tag_key} ) => {	    	
	    	commit("SET_ACTIVE_FILTER_TAG", { tag_key: tag_key });
	    },
	    CHANGE_FILTER_TAG: ( {commit}, {tag_key} ) => {
	    	commit("SET_ACTIVE_FILTER_TAG", { tag_key: tag_key });
	    }
    },
    modules: {
    	
    }
});

export default store;