import Operator from '../../utils/model/operator/index';

import UserModel from '../../models/user/user.model';
import UserService from '../../services/user/user.service';

import LoadingPanel from '../commons/loading-panel/loading-panel.common.vue';
import ErrorPanel  from '../commons/error-panel/error-panel.common.vue';
import Toast from '../commons/toast/toast.common.vue';

export default {
	components: {
		'loading-panel': LoadingPanel,
		'error-panel': ErrorPanel,
		'toast': Toast
	},
	data() {
		return {
			// message: 'Add product (albums)',
			// description: 'Create new products at this page',
			userConfig: {
				loading: true,
				error: false
			},
			user: UserModel,
			users: []

		}
	},
	mounted() {
		this.bindUsers();
	},
	methods: {
		bindUsers() {
			
			this.userConfig.loading = true;
			this.userConfig.error = false;

			UserService.fetch(this)
			.then(
				 res => {
				 	this.users = Operator.map(UserModel, res.body.data);
				 	this.userConfig.loading = false;
				},
				 err => {
					this.userConfig.loading = false;
					this.userConfig.error = true;
				}

			);
		},
		storeUser() {
			
			UserService.store(this, this.user)
			.then(
				res => {
					this.users.push(Operator.single(UserModel, res.body.data));
					this.user = Operator.reset(UserModel);
				},
				err => {
					this.$refs.toast.setMessage('Error store user,check your input again');
					this.$refs.toast.show();
				}
			)
		},
		deleteUser(user) {
			UserService.delete(this, user.id)
			.then(
				res => {
					this.users.splice(this.users.indexOf(user), 1);
				},
				err => {
					this.$refs.toast.setMessage('Error delete user');
					this.$refs.toast.show();
				}
			)
		},
		editUser(user) {
			this.products[this.products.indexOf(user)].onedit = true;
		},
		
		updateProduct(user) {
			UserService.update(this, user.id, user)
			.then(
				res => {
					this.users[this.users.indexOf(user)].onedit = false;
				},
				err => {
					this.$refs.toast.setMessage('Error update user');
					this.$refs.toast.show();
				}
			);
		}
	}
}

