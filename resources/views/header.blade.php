<!DOCTYPE html>
<html lang="en" dir="ltr" class="bg">
	<head>
		<meta charset="utf-8">
		<title>The Biochemistry Magazine</title>

		<!-- Styles -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >



	</head>


<header>
	@section('header')
		<div class="header">
			<nav class="navbar navbar-expand-sm navbar-light bg-light">
				<div class="menurrss collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="https://web.whatsapp.com/" target="_blank"><img src="/images/rrss/005-whatsapp.png" height="20px" width="20px" alt="" class="pull-left img-circle login"></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://twitter.com/" target="_blank"><img src="/images/rrss/008-twitter.png" height="20px" width="20px" alt="" class="pull-left img-circle login"></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://www.linkedin.com/" target="_blank"><img src="/images/rrss/027-linkedin.png" height="20px" width="20px" alt="" class="pull-left img-circle login"></span></a>
						</li>
					</ul>
						<form class="form-inline">
							<button class="btn btn-outline-info" type="button">Ingresar</button>
						</form>
				</div>
			</nav>
		</div>
		<div class="logo">
				<img src="/images/extra/logo.png" width="140%">			
		</div>


		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item">
				<a class="nav-link" href="#"><span class="glyphicon glyphicon-home"></span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link1</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link2</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link3</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link4</a>
				</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
	@show
</header>
