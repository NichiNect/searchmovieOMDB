<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Movies</title>

	<!-- Bootstrap v4.4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- clear logo -->
	<style>
		img[alt*="www.000webhost.com"]{
			display: none;
		}
		body {
			background-color: #fff;
		}
	</style>
</head>
<body>
	
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="">Nect</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="index.php">Movie List</a>
					<a class="nav-item nav-link" href="">About Me</a>
				</div>
			</div>
		</div>
	</nav>

	<!-- Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h1 class="display-4">Hello, world!</h1>
			<p class="lead">Hi, this is a simple website using public API from omdbapi.com. Let's start own website with API</p>
			<hr class="my-4">
			<p>
				My name is Yoni Widhi C. I'm on grade 11 at Vocational School. I create this example website cause i feel boring here:) <br>
				If you can make like this in more great or beautiful UI. please share to me cause this <b>just an example.</b><br><br><br>
			</p>
		</div>
	</div>


	<!-- Content -->
	<div class="container">

		<div class="row mt-3 justify-content-center">
			<div class="col-md-8">
				
			</div>
		</div>

	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!-- Bootstrap -->
	<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="js/myscript.js"></script>
	<!-- Sweet Alert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>
</html>