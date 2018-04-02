<template>

	<div class="container-fluid ful">

		<div class="row bgx ful">

			<div class="col-sm-4"> 
			</div>

			<div class="col-sm-4">

				<div class="yo">


					<form role="form" @submit.prevent="storeUser()">
						<div class="signin" style="font-size: 20px; text-align: center; padding-bottom: 25px; font-weight: bold">Sign In</div>
					<div class="form-group">
							<label for="email">Email:</label>
								<input type="email" class="form-control" placeholder="Enter email" required v-model="user.email">
							</div>

					<div class="form-group">
							<label for="pwd">Password:</label>
								<input type="password" class="form-control" placeholder="Enter password" required v-model="user.password">
							</div>

			    	
			    	<div class="checkbox">
			      		<label><input type="checkbox" name="remember"> Remember me</label>
			    	</div>
			    <button type="submit" class="btn btn-default">Sign In</button> or
			    <router-link to="/User" class="btn btn-default" role="button">Register</router-link>

			  </form>

				</div>
				
			</div>

			<div class="col-sm-4"> 
			</div>


		</div>

			

	</div>
	
</template>

<script src="./login.component.js"></script>

<link rel="stylesheet" type="text/css" href="login.css">