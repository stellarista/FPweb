// import scss from './assets/stylesheets/app.scss';

import Vue from 'vue';
import Router from 'vue-router';
import Resource from'vue-resource';

Vue.use(Router);
Vue.use(Resource);

import AppComponent from './components/app.component.vue';

import HomeComponent from './components/home/home.component.vue';
import UserComponent from './components/user/user.component.vue';
import Login from './components/user/login.component.vue';

// admin
// import UserComponent from './components/admin/user.component.vue';
import ProductComponent from './components/admin/product.component.vue';
import CheckoutComponent from './components/admin/checkout.component.vue';

//ui
import Home from './components/ui/home.component.vue';
import Confirm from './components/ui/confirm.component.vue';
import Account from './components/ui/account.component.vue';
import History from './components/ui/history.component.vue';


const routes = [
	// {
	// 	path: '/',
	// 	component: HomeComponent
	// },
	{
		path: '/user',
		component: UserComponent
	},
	{
		path: '/login', //path di postman apa?
		component: Login
	},
	{
		path: '/product',
		component: ProductComponent
	},
	{
		path: '/check_out',
		component: CheckoutComponent
	},
	// ui
	{
		path: '/',
		component: Home
	},

	{
		path: '/confirm',
		component: Confirm
	},
	{
		path: '/acc',
		component: Account
	},
	{
		path: '/his',
		component: History
	}
];

const router = new Router({
	routes: routes
});

new Vue ({
	router: router,
	render: h => h(AppComponent)
}).$mount('#app');

