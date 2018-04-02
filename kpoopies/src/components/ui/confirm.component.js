import Operator from '../../utils/model/operator/index';

import CheckoutModel from '../../models/admin/checkout.model';
import CheckoutService from '../../services/admin/checkout.service';

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
			message: 'checkout',
			description: 'checkouts',
			checkoutConfig: {
				loading: true,
				error: false
			},
			checkout: CheckoutModel,
			checkouts: []
		}
	},
	mounted() {
		this.bindCheckouts();
	},
	methods: {
		bindCheckouts() {
			
			this.checkoutConfig.loading = true;
			this.checkoutConfig.error = false;

			CheckoutService.fetch(this)
			.then(
				 res => {
				 	this.checkouts = Operator.map(CheckoutModel, res.body.data);
				 	this.checkoutConfig.loading = false;
				},
				 err => {
					this.checkoutConfig.loading = false;
					this.checkoutConfig.error = true;
				}
			);
		},
		storeCheckout() {
			
			CheckoutService.store(this, this.checkout)
			.then(
				res => {
					this.checkouts.push(Operator.single(CheckoutModel, res.body.data));
					this.checkout = Operator.reset(CheckoutModel);
				},
				err => {
					this.$refs.toast.setMessage('Error store checkout,check your input again');
					this.$refs.toast.show();
				}
			)
		},
		deleteCheckout(checkout) {
			CheckoutService.delete(this, checkout.id) 
			.then(
				res => {
					this.checkouts.splice(this.checkouts.indexOf(checkout), 1);
				},
				err => {
					this.$refs.toast.setMessage('Error delete checkout');
					this.$refs.toast.show();
				}
			)
		},
		editCheckout(checkout) {
			this.checkouts[this.checkouts.indexOf(checkout)].onedit = true;
		},
		
		updateCheckout(checkout) {
			CheckoutService.update(this, checkout.id, checkout)
			.then(
				res => {
					this.checkouts[this.checkouts.indexOf(checkout)].onedit = false;
				},
				err => {
					this.$refs.toast.setMessage('Error update checkout');
					this.$refs.toast.show();
				}
			);
		}
	}
}