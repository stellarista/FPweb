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
							<strong>Add New Product</strong>
						</p>
						<form role="form" @submit.prevent="storeProduct()">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="artist_id" required v-model="product.artist_id">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" placeholder="name" required v-model="product.product_name">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" placeholder="price" required v-model="product.price">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="stock" required v-model="product.description">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="tracklist" required v-model="product.tracklist">
							</div>
							<div class="form-group">
								<input type="date" class="form-control" placeholder="release date" required v-model="product.release_date">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="img link" required v-model="product.product_image">
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-primary">Add Product</button>
							</div>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>

		<loading-panel message="fetch products from server"
		v-if="productConfig.loading && !productConfig.error">
		</loading-panel>
		<error-panel message="failed to fetch products from server"
					v-if="productConfig.loading && !productConfig.error"
					@onErrorHandled="bindProducts()">
		</error-panel>
		<div class="row" v-if="!productConfig.loading && !productConfig.error">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
						<tr>
							<th class="text-center" style="width: 5%;">ID</th>
							<th class="text-center" style="width: 5%;">ARTIST ID</th>
							<th class="text-center" style="width: 20%;">Name</th>
							<th class="text-center" style="width: 20%;">Price</th>
							<th class="text-center" style="width: 20%;">Stock</th>
							<th class="text-center" style="width: 20%;">Tracklist</th>
							<th class="text-center" style="width: 20%;">Release Date</th>
							<th class="text-center" style="width: 20%;">Image</th>
							<!-- <th class="text-center">...</th> -->
						</tr>
						</thead>
						<tbody>
						<tr v-for="product in products">
							<td class="text-center">{{ product.id }}</td>
							<td class="text-center">{{ product.artist_id }}</td>
							<td class="text-center">
								<span v-if="!product.onedit">{{product.product_name}}</span>
								<input type="text" class="form-control" v-model="product.product_name" v-if="product.onedit" placeholder="product name">
							</td>
							<td class="text-center">
								<span v-if="!product.onedit">{{product.price}}</span>
								<input type="text" class="form-control" v-model="product.price" v-if="product.onedit" placeholder="product price">
							</td>
							<td class="text-center">
								<span v-if="!product.onedit">{{product.description}}</span>
								<input type="text" class="form-control" v-model="product.description" v-if="product.onedit" placeholder="product stock">
							</td>
							<td class="text-center">
								<span v-if="!product.onedit">{{product.tracklist}}</span>
								<input type="text" class="form-control" v-model="product.tracklist" v-if="product.onedit" placeholder="product tracklist">
							</td>
							<td class="text-center">
								<span v-if="!product.onedit">{{product.release_date}}</span>
								<input type="date" class="form-control" v-model="product.release_date" v-if="product.onedit" placeholder="product release date">
							</td>
							<td align="center">
								<img :src="product.product_image" width="300" height="300">
								<input type="text" class="form-control" v-model="product.product_image" v-if="product.onedit" placeholder="product img link">
								<!-- <span v-if="!product.onedit">{{product.product_image}}</span> -->
							</td>
							<!-- <td class="text-center">{{ product.created_at }}</td>
							<td class="text-center">{{ product.updated_at }}</td> -->
							<td class="text-center">
								<button type="button" class="btn btn-sm btn-success" v-if="!product.onedit" @click="editProduct(product)">Edit</button>
								<!-- <button type="button" class="btn btn-sm btn-success" v-if="!product.onedit"
								:disabled="product.name == '' || product.price == '' || product.description == '' || product.description == '' || product.tracklist =='' || product.release_date == '' "
								@click="updateProduct(product)">Save</button> -->
								<button type="button" class="btn btn-sm btn-success" v-if="product.onedit"
								:disabled="product.product_name == '' || product.price == '' || product.description == '' || product.tracklist =='' || product.release_date == '' || product.product_image == '' " 
								@click="updateProduct(product)">Save</button>

								<button type="button" class="btn btn-sm btn-danger" @click="deleteProduct(product)">Del</button>
	

							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>		
		
	</div>
</template>

<script src="./product.component.js"></script>