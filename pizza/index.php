<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="Pizza restaurant">
<meta name="keywords" content="restaurant New York City, NYC Pizza, New York City pizza, subs, Metro NYC, NJ">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>New York's Finest Pizza & Subs | NY NJ</title>

<!-- BOOTSTRAP -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<!-- AngularJS -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<header>
		<div class="main-image">
			 <img class="img-fluid" src="img/home_image.png"> 
		</div>
	</header>
	<div class="menuBar">
		<nav class="navbar navbar-expand-md navbar-light">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav mx-auto" id="menubar">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#menu">Menu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#gallery">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#reviews">Reviews</a>
						</li>
						<button type="button" class="btn btn-outline-primary" disabled>Order Online</button>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div class="container">
		<section id="#">
			<h1 class="text-center text-color">Welcome to New York's Finest Pizza & Subs</h1>
		</section>
		<hr class="bg-color">
		<section id="menu">
			<h3 class="text-center text-color">Menu</h3>
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">Pizza</h2>
					<div ng-app="myApp" ng-controller="menuCtrl" class="bg-color">
						<table class="table-center" style="width:50%;">
							<thead>
								<tr>
									<th></th>
									<th></th>
									<th>Small</th>
									<th>Medium</th>
									<th>Large</th>
								</tr>
							</thead>
							<tbody ng-repeat="pizza in pizzas">
								<tr>
									<td><strong>{{pizza.Name}}</strong></td>
									<td> </td>
									<td>{{pizza.Small}}</td>
									<td>{{pizza.Medium}}</td>
									<td>{{pizza.Large}}</td>
								</tr>
								<tr>
									<td>{{pizza.Description}}</td>
								</tr>
							</tbody>
							<tbody>
								<tr>
									<td><strong>Additional Toppings:</strong> $1.00 each</td>
								</tr>
							</tbody>
						</table>
						<h2 class="text-center">Pasta</h2>
						<table class="table-center" style="width:50%;">
							<tbody>
								<thead>
									<tr>
										<th></th>
										<th></th>
										<th>Small</th>
										<th>Large</th>
									</tr>
									<tbody ng-repeat="pasta in pastas">
										<tr>
											<td><strong>{{pasta.Name}}</strong></td>
											<td> </td>
											<td>{{pasta.Small}}</td>
											<td>{{pasta.Large}}</td>
										</tr>
										<tr>
											<td>{{pasta.Description}}</td>
										</tr>
									</tbody>
							</thead>
							</tbody>
						</table>
						<h2 class="text-center">Desserts</h2>
						<table class="table-center" style="width:50%;">
							<tbody>
								<thead>
									<tr>
										<th></th>
										<th></th>
										<th>Small</th>
										<th>Large</th>
									</tr>
									<tbody ng-repeat="dessert in desserts">
										<tr>
											<td><strong>{{dessert.Name}}</strong></td>
											<td> </td>
											<td>{{dessert.Small}}</td>
											<td>{{dessert.Large}}</td>
										</tr>
										<tr>
											<td>{{dessert.Description}}</td>
										</tr>
									</tbody>
							</thead>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		<hr class="bg-color">
		<section id="gallery">
			<h3 class="text-center text-color">Gallery</h3>
			<div class="row text-center">
				<div class="col-lg-3 col-md-6 image-cell">
					<img class="thumbnail" src="img/pizza.png">
				</div>
				<div class="col-lg-3 col-md-6 image-cell">
					<img class="thumbnail" src="img/pasta.png">
				</div>
				<div class="col-lg-3 col-md-6 image-cell">
					<img class="thumbnail" src="img/eggplant.png">
				</div>
				<div class="col-lg-3 col-md-6 image-cell">
					<img class="thumbnail" src="img/tiramisu.png">
				</div>
			</div>
		</section>
		<hr class="bg-color">
		<section id="contact">
			<h3 class="text-center text-color">Contact</h3>
			<div class="row">
				<div class="col-md-8">
					<span class="d-lg-none">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10164.7831469453!2d-73.9892061697668!3d40.76184772705242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1514884161585" width="340" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> 
					</span>
					<span class="d-none d-lg-block">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10164.7831469453!2d-73.9892061697668!3d40.76184772705242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1514884161585" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> 
					</span>
				</div>
				<div class="col-md-4">
					<h2>Contact Us here</h2>
					<p>New York's Finest Pizza and Subs</p>
					<p>123 Some Street</p>
					<p>New York, NY</p>
					<p>555-555-5555</p>
					<p>johnsmith@nyfps.com</p>
				</div>
			</div>
		</section>
		<hr class="bg-color">
		<section id="reviews">
			<h3 class="text-center text-color">Reviews</h3>
			<div class="row">
				<div class="col-md-6">
					<h3>No Reviews here yet! Be the first one to review our restaurant!</h3>
				</div>
				<div class="col-md-6">
					<form>
						<div class="form-group">
						   <label for="name">Name:</label>
						   <input type="name" class="form-control" id="name" placeholder="Your Name">
						 </div>
						<!-- <div class="form-group">
						   <label for="email">Email:</label>
						   <input type="email" class="form-control" id="email" placeholder="Your Email">
						</div> -->
						<div class="form-group">
						   <label for="feedback">Feedback:</label>
						   <textarea class="form-control" id="textarea" placeholder="Feedback"></textarea>
						</div>
						<button type="button" class="btn btn-primary text-center">Submit</button>
					</form>
				</div>
			</div>
		</section>
		<hr class="bg-color">
		<section id="comments">
			<h3 class="text-center text-color">Questions or Comments?</h3>
			<div class="row">
				<div class="col-md-12">
					<form>
						<div class="form-group">
						   <label for="name">Name:</label>
						   <input type="name" class="form-control" id="name" placeholder="Your Name">
						 </div>
						<div class="form-group">
						   <label for="email">Email:</label>
						   <input type="email" class="form-control" id="email" placeholder="Your Email">
						</div>
						<div class="form-group">
						   <label for="feedback">Feedback:</label>
						   <textarea class="form-control" id="textarea" placeholder="Feedback"></textarea>
						</div>
						<button type="button" class="btn btn-primary text-center">Submit</button>
					</form>
				</div>
			</div>
		</section>
	</div>
	
	
	<!-- AngularJS code-->
	<script>
		var app = angular.module('myApp', []);
		app.controller('menuCtrl', function($scope, $http){
			$http.get("menu.php").then(function(response){
				$scope.pizzas = response.data.pizza;
				$scope.pastas = response.data.pasta;
				$scope.desserts = response.data.dessert;
			});
		});
	</script>
	<hr class="bg-color">
	<footer>
		<div class="container text-center">
        	<p class="text-color">Copyright &copy; New York's Finest Pizza and Subs <?php echo date("Y");?></p>
      </div>
	</footer>
</body>
</html>