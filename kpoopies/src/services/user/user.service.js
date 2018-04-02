import Config from '../config';

export default {
	url: Config.api + '/user',

	fetch(v){
 		return v.$http.get(this.url);
 	},
 	find(v, id){
 		return v.$http.get(this.url + id);
	},
 	store(v, params){
  		return v.$http.post(this.url , params);
 	}
	// delete(y, id) {
	// 	return y.$http.delete(this.url + '/' + id);
	// },
	// update(y, id, params) {
	// 	return y$http.patch(this.url + '/' + id, params);
	// }
}