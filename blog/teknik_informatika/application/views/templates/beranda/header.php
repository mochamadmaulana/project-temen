<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title><?= $title; ?></title>
</head>

<body>

	<nav class="navbar navbar-expand-lg p-3 navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url('beranda') ?>">Blog Teknik Informatika</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Software Engineering</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Sistem Komputer</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Bisnis Intelegent</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Mavib</a>
					</li>
				</ul>
				<a class="btn btn-outline-success mr-2" href="<?= base_url('auth') ?>">Sign in</a>
				<a class="btn btn-outline-danger" href="<?= base_url('auth/registration') ?>">Sign up</a>
			</div>
		</div>
	</nav>

	<!-- carousel -->
	<div id="carouselExampleCaptions" class="carousel slide mt-3" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?= base_url('assets/img'); ?>/header-bg.jpg" height="760px" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>First slide label</h5>
					<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= base_url('assets/img'); ?>/header-bg.jpg" height="760px" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Second slide label</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= base_url('assets/img'); ?>/header-bg.jpg" height="760px" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Third slide label</h5>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
