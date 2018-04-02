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
							<strong>Create New User</strong>
						</p>
						<form role="form" @submit.prevent="storeUser()">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="yourname" required v-model="user.account_name">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="youremail" required v-model="user.email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="address" required v-model="user.address">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="yourpass" required v-model="user.password">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="phone" required v-model="user.phone">
							</div>
							<div class="form-group">
								<input type="date" class="form-control" placeholder="birth date" required v-model="user.birth_date">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="province" required v-model="user.province">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="city" required v-model="user.city">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="pos code" required v-model="user.postal_code">
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-primary">Create User</button>
							</div>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</template>

<script src="./user.component.js"></script>