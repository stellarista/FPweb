<template>
<div class="container-fluid" style="padding: 0px">

	<div class="img-responsive bg">
		<div class="prod">
		<p>Order History</p>
		</div>
	</div>


		<div class="container" style="">

			<div class="row" style="padding-top: 20px">

				<div class="col-sm-3" style="">
					
					<ul>
						<li><router-link to="/acc">ACCOUNT DETAILS</router-link></li>
						
						<li><router-link to="/his">ORDER HISTORY</router-link></li>
					</ul>

				</div>

				<div class="col-sm-9" style="background-color: #ffb7aa; padding: 20px">

					<!-- <div class="form-group row">
				  		<label for="name" class="col-sm-3 col-form-label">checkout id:</label>
				  		<div class="col-sm-9">
				    		<label for="name" class="col-form-label">{{ checkouts[0].id }} </label>
				 		 </div>
					</div> -->
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

						</tr>
						</tbody>
					</table>
				</div>

			    	<!-- <button>
			    		edit account info
			    	</button> -->

				</div>

			
			</div>

		</div>
	
</div>
</template>

<script src="./history.component.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="product.css">