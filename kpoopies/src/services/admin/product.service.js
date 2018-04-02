import Config from '../config';
export default{
 	url: Config.api + '/product',
 	fetch(v){
 		// return v.$http.get(this.url);
 		return v.$http.get(this.url);
 	},
 	find(v, id){
 		return v.$http.get(this.url + id);
	},
 	store(v, params){
  		return v.$http.post(this.url , params);
 	},
 	delete(v, id){
  		return v.$http.delete(this.url + '/' +id);
 	},

 	update(v, id, params){
  		return v.$http.patch(this.url +'/edit' + '/' + id, params);
 	}


 	// update(v, id, params){
  // 		return v.$http.put(this.url +'/'+ id, params);
 	// }
}