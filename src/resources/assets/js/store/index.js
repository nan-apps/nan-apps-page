import Vue from 'vue';

import Vuex from 'vuex';
Vue.use( Vuex );

import * as mutations from './mutations';
import * as actions from './actions';
import * as getters from './getters';

const store = new Vuex.Store({
	strict: true,
	state: {		
		attributes: {},
		fetching_attrs: false,
		projects: {
			items: [],
			default_filter_tag: null,
			active_filter_tag: '',
			fetching_data: false,
			tags: {
				items: [],
				fetching_data: false,
			},
		},
		hobbies: {
			items: [],
			fetching_data: false
		},
		skills: {
			items: [],
			fetching_data: false
		},
		partners: {
			items: [],
			fetching_data: false
		}
	},
	getters,
	mutations,
	actions,
    modules: {
    	
    }
});

export default store;