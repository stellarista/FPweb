import Config from '../config';

export default {
	url: Config.api + '/login',

	fetch(v){
 		return v.$http.get(this.url);
 	},
 	find(v, id){
 		return v.$http.get(this.url + id);
	},
 	store(v, params){
  		return v.$http.post(this.url , params);
 	}
}