<!DOCTYPE html>
<html lang="en" dir="ltr" class="bg">
	<head>
		<meta charset="utf-8">
		<title>The Biochemistry Magazine</title>

		<!-- Styles -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
		<link href="{{ asset('css/editedbootstrap.css') }}" rel="stylesheet" type="text/css" >
		<link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css" >


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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


		<nav class="navbar navbar-expand-lg navbar-light menunav justify-content-center">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
				<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#"><span class="glyphicon glyphicon-home"></span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pricing</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Dropdown link
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				</ul>
			</div>
		</nav>
	@show
</header>
