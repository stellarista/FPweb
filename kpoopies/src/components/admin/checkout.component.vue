<template>
	<div class="container">
		<toast ref="toast"></toast>
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron">
					<div class="row">
					<div class="col-sm-6">
						<h1>{{ message }}</h1>
						<p>{{ description }}</p> 
					</div>
					<div class="col-md-4 col-md-push-2">
						<p class="text-center">
							<strong>Add New Checkout</strong>
						</p>
						<form role="form" @submit.prevent="storeCheckout()">
							<div class="form-group">
								<input type="date" class="form-control" placeholder="trans_date" required v-model="checkout.transaction_date">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" placeholder="account_id" required v-model="checkout.account_id">
							</div>

							<div class="form-group">
								<input type="text" class="form-control" placeholder="product_id" required v-model="checkout.product_id">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" placeholder="bank_id" required v-model="checkout.bank_id">
							</div>

							<div class="form-group">
								<input type="text" class="form-control" placeholder="amount transfered" required v-model="checkout.amount">
							</div>

							<div class="form-group">
								<input type="text" class="form-control" placeholder="receipt img link" required v-model="checkout.receipt_img">
							</div>

							<div class="form-group">
								<input type="text" class="form-control" placeholder="done" required v-model="checkout.payment_status">
							</div>

							
							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>

		<loading-panel message="fetch checkouts from server"
		v-if="checkoutConfig.loading && !checkoutConfig.error">
		</loading-panel>
		<error-panel message="failed to fetch checkouts from server"
					v-if="checkoutConfig.loading && !checkoutConfig.error"
					@onErrorHandled="bindCheckouts()">
		</error-panel>
		<div class="row" v-if="!checkoutConfig.loading && !checkoutConfig.error">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
						<tr>
							<th class="text-center" style="width: 5%;">ID</th>
							<th class="text-center" style="width: 20%;">Transaction Date</th>
							<th class="text-center" style="width: 5%;">Account ID</th>
							<th class="text-center" style="width: 5%;">product id</th>
							<th class="text-center" style="width: 5%;">Bank Id</th>
							<th class="text-center" style="width: 20%;">amount</th>
							<th class="text-center" style="width: 20%;">receipt</th>
							<th class="text-center" style="width: 20%;">payment status</th>
							
							<th class="text-center">...</th>
						</tr>
						</thead>
						<tbody>
						<tr v-for="checkout in checkouts">
							<td class="text-center">{{ checkout.id }}</td>
							<td class="text-center">{{ checkout.transaction_date}}</td>
							<td class="text-center">{{ checkout.account_id }}</td>
							<td class="text-center">{{ checkout.product_id }}</td>
							<td class="text-center">{{ checkout.bank_id }}</td>
							<td class="text-center">{{ checkout.amount}}</td>

							<td class="text-center"><img :src="checkout.receipt_img" width="200">
							</td>
							<td class="text-center">
								<span v-if="!checkout.onedit">{{checkout.payment_status}}</span>
								<input type="text" class="form-control" v-model="checkout.payment_status" v-if="checkout.onedit" placeholder="payment status">
							</td>

							<td class="text-center">
								<button type="button" class="btn btn-sm btn-success" v-if="!checkout.onedit" @click="editCheckout(checkout)">Edit</button>

								<button type="button" class="btn btn-sm btn-success" v-if="checkout.onedit"
								:disabled="checkout.payment_status == '' " 
								@click="updateCheckout(checkout)">Save</button>

								<button type="button" class="btn btn-sm btn-danger" @click="deleteCheckout(checkout)">Del</button>

							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>		
		
	</div>
</template>

<script src="./checkout.component.js"></script> -->