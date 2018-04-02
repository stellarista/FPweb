import Operator from '../../utils/model/operator/index';

import UserModel from '../../models/user/login.model';
import UserService from '../../services/user/login.service';

// import LoadingPanel from '../commons/loading-panel/loading-panel.common.vue';
// import ErrorPanel  from '../commons/error-panel/error-panel.common.vue';
// import Toast from '../commons/toast/toast.common.vue';

export default {
	// components: {
	// 	'loading-panel': LoadingPanel,
	// 	'error-panel': ErrorPanel,
	// 	'toast': Toast
	// },
	data() {
		return {
			message: 'User Page',
			description: 'Manage list of users at this page',
			userConfig: {
				loading: true,
				error: false
			},
			user: UserModel,
			users: []
		}
	},
	
	methods: {
		
		storeUser() {
			UserService.store(this, this.user)
			.then(
				res => {
					this.users.push(Operator.single(UserModel, res.body.data));
					localStorage.setItem('access_token','bearer '+ res.body.data.token);
					this.user = Operator.reset(UserModel);
					// this.$router.push({ path:'/' });
				},
				err => {
					this.$refs.toast.setMessage('Error store user,check your user input again');
					this.$refs.toast.show();
				}
			)
		}
	}
}