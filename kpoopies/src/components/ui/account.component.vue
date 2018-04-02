<template>
<div class="container-fluid" style="padding: 0px">

	<div class="img-responsive bg">
		<div class="prod">
		<p>Account Details</p>
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

				<div class="col-sm-9" style="background-color: #ffb7aa; padding: 20px" v-if="users.length">

					<div class="form-group row">
				  		<label for="name" class="col-sm-3 col-form-label">Account ID:</label>
				  		<div class="col-sm-9">
				    		<label for="name" class="col-form-label">{{ users[0].id }} </label>
				 		 </div>
					</div>
					
					<div class="form-group row">
				  		<label for="name" class="col-sm-3 col-form-label">Name:</label>
				  		<div class="col-sm-9">
				    		<label for="name" class="col-form-label">{{ users[0].account_name }} </label>
				 		 </div>
					</div>

					<div class="form-group row">
				  		<label for="tel" class="col-sm-3 col-form-label">Mobile Phone:</label>
				  		<div class="col-sm-9">
				    		<label for="tel" class="col-form-label">{{ users[0].phone }} </label>
				 		 </div>
					</div>

					<div class="form-group row">
			     		<label for="address" class="col-sm-3 col-form-label">Address:</label>
				  		<div class="col-sm-9">
				    		<label for="address" class="col-form-label">{{ users[0].address }}</label>
				 		 </div>
			    	</div>


 					<div class="form-group row">
					    <label for="province" class="col-sm-3 col-form-label">Province</label>
					    <div class="col-sm-9">
						    <label for="province" class="col-form-label">{{ users[0].province }}</label>						
						</div>
 					</div>

 					<div class="form-group row">
					    <label for="city" class="col-sm-3 col-form-label">City / Distriict</label>
					    <div class="col-sm-9">
						    <label for="city" class="col-form-label">{{ users[0].city}}</label>
						</div>
 					</div>

 					<div class="form-group row">
				  		<label for="zip" class="col-sm-3 col-form-label">Postal Code:</label>
				  		<div class="col-sm-9">
				    		<label for="zip" class="col-form-label">{{ users[0].postal_code }}</label>
				 		 </div>
					</div>

 					<div class="form-group row">
			     		<label for="email" class="col-sm-3 col-form-label">Email:</label>
				  		<div class="col-sm-9">
				    		<label for="email" class="col-form-label">{{ users[0].email }}</label>
				 		 </div>
			    	</div>

			    	<!-- <button>
			    		edit account info
			    	</button> -->

				</div>

			
			</div>

		</div>
	
</div>
</template>

<script src="./account.component.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="product.css">