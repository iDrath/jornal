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
	@show
</header>
