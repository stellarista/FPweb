<template>
	<!-- <div class="container">
		<div class="jumbotron">
			<h1>{{message}}</h1>
		</div>
	</div> -->
<div class="container-fluid" style="padding: 0px">

	<div class="fixed">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	      <div class="item active">
	      	<a href="#">
	        <img src="mx.jpg" alt="Los Angeles" style="width:100%;">
	        </a>
	      </div>

	      <div class="item">
	        <img src="mx.jpg" alt="Chicago" style="width:100%;">
	      </div>
	    
	      <div class="item">
	        <img src="mx.jpg" alt="New york" style="width:100%;">
	      </div>
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>

	  </div>
	</div>

	<div class="container-fluid">
			
			<div class="row">

				<div class="col-sm-4" style="padding: 10px; background-color: green; color: white">
					<p>Products</p>
				</div>

				<div class="col-sm-8">
					
				</div>
					
			</div>

			<div class="row rows" v-for="product in products">
				<div class="col-sm-4 full">
					<div class="produk">
					<p><!-- MONSTA X THE CLAN PART 1: LOST --> {{product.product_name}} </p>
					<div class="cont">
				  		<img :src="product.product_image" alt="album_image" class="image img-responsive" width="300" height="300">
				  			<div class="middle">
				    		<div class="text"><router-link to="/confirm">Order</router-link><br>
				    							<!-- <router-link to="/">Info</router-link> --></div>
				  			</div>
					</div>
					</div>
				</div>

				<div class="col-sm-8 full" style="">



					<div class="row" style="padding: 20px">
						<p>	Product ID: {{product.id}}</p>
						<p> {{product.product_name}}</p>
						<p> IDR {{product.price}}</p>
					</div>


					<div class="row" style="padding: 20px">
						<p>TRACKLIST<p>
							<p>
								{{product.tracklist}}
							</p>
					</div>


				</div>

				<!-- <div class="col-sm-4 full">

				</div> -->

			</div>

			


	</div>

</div>

</template>

<script src="./home.component.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">