<template>
	<div class="wrapper">
		<nav class = "navbar navbar-fixed-top navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>                        
      				</button>
					<router-link to="/" style="font-size: 40px" class="navbar-brand">KPOOPIES</router-link>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<router-link to="/User">Register</router-link>
					</li>
					<li>
						<router-link to="/login">Sign In</router-link>
					</li>
					<li>
						<router-link to="/acc">Account</router-link>
					</li>
					
				</ul>
				</div>
			</div>
		</nav>
		<main>
			<router-view></router-view>
		</main>
		<footer>
			<p class="text-center">Copyright.lol</p>
		</footer>
	</div>
</template>

<script src="./app.component.js"></script>

<style type="text/css">

form {
	margin-top: 100px;
}

.navbar {
  padding: 0px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2)
}

.nav-item a:hover {
  color: orange;
  border-bottom: 3px solid orange;
}

ul {
  list-style-type: none;
}

li {
  padding: 5px;
}
</style>