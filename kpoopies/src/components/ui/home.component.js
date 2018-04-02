import Operator from '../../utils/model/operator/index';

import ProductModel from '../../models/admin/product.model';
import ProductService from '../../services/admin/product.service';

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
			message: 'Add product (albums)',
			description: 'Create new products at this page',
			productConfig: {
				loading: true,
				error: false
			},
			product: ProductModel,
			products: []
		}
	},
	mounted() {
		this.bindProducts();
	},
	methods: {
		bindProducts() {
			
			this.productConfig.loading = true;
			this.productConfig.error = false;

			ProductService.fetch(this)
			.then(
				 res => {
				 	this.products = Operator.map(ProductModel, res.body.data);
				 	this.productConfig.loading = false;
				},
				 err => {
					this.productConfig.loading = false;
					this.productConfig.error = true;
				}
			);
		},
		storeProduct() {
			
			ProductService.store(this, this.product)
			.then(
				res => {
					this.products.push(Operator.single(ProductModel, res.body.data));
					this.product = Operator.reset(ProductModel);
				},
				err => {
					this.$refs.toast.setMessage('Error store product,check your input again');
					this.$refs.toast.show();
				}
			)
		},
		deleteProduct(product) {
			ProductService.delete(this, product.id)
			.then(
				res => {
					this.products.splice(this.products.indexOf(product), 1);
				},
				err => {
					this.$refs.toast.setMessage('Error delete product');
					this.$refs.toast.show();
				}
			)
		},
		editProduct(product) {
			this.products[this.products.indexOf(product)].onedit = true;
		},
		
		updateProduct(product) {
			ProductService.update(this, product.id, product)
			.then(
				res => {
					this.products[this.products.indexOf(product)].onedit = false;
				},
				err => {
					this.$refs.toast.setMessage('Error update product');
					this.$refs.toast.show();
				}
			);
		}
	}
}