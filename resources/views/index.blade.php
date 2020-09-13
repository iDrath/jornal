@extends("layout")

@section('content')
			
		<!--START SLIDER -->

		<div id="slider" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#slider" data-slide-to="0" class="active"></li>
				<li data-target="#slider" data-slide-to="1"></li>
				<li data-target="#slider" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img src="/images/extra/b1.jpg" alt="SARS-CoV-2" width="1100" height="500">
				<div class="carousel-caption">
					<h3>SARS-CoV-2</h3>
					<p>Computer-designed proteins can protect lab-grown human cells from SARS-CoV-2</p>
					<a type="button" class="btn btn-info" 
						href="https://www.news-medical.net/news/20200910/Computer-designed-proteins-can-protect-lab-grown-human-cells-from-SARS-CoV-2.aspx"
						target="_blank">Leer Mas...</a>
				</div>   
				</div>
				<div class="carousel-item">
				<img src="/images/extra/b2.jpg" alt="Chicago" width="1100" height="500">
				<div class="carousel-caption">
					<h3>Chicago</h3>
					<p>Thank you, Chicago!</p>
				</div>   
				</div>
				<div class="carousel-item">
				<img src="/images/extra/b3.png" alt="New York" width="1100" height="500">
				<div class="carousel-caption">
					<h3>New York</h3>
					<p>We love the Big Apple!</p>
				</div>   
				</div>
			</div>
			<a class="carousel-control-prev" href="#slider" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#slider" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>


		<!--END SLIDER 

<div class="col-4">
							<img src="/images/extra/ny.jpg" alt="New York" class="float-left mr-2 img-fluid">
						</div>
		-->
</br></br>

		
			<div class="row">
				<div class="col-8 news">

					@foreach($articulos as $articulo)
					
			
					<div class="col-12">
					<!--IMAGEN AQUI-->
						<div class="col-4">
							<img src="{{ $articulo -> imagenportada }}" class="float-left imagenarticulo">
						</div>
						<div class="col-14">
						<h2>{{ $articulo -> titulo }}</h2>
								<div id="read">
									<?php
										$contenido = $articulo -> contenido ;
										echo substr("{$contenido}", 0,650);
										echo "..."
									?>
								</div>
								<p align="right"><a class="btn btn-primary" href="/articulos/{{ $articulo -> id }}" role="button">Continuar leyendo»</a></p>
						</div>
						<hr>
					
					</div>
					@endforeach
					<div class="row justify-content-md-center">
				
				{{ $articulos->links() }}
					</div>
						
				</div>
				

				<div class="col-4 ">
								<img src="/images/extra/vbanner.jpg" alt="vertical banner" class="float-left col-sm-11 img-fluid">
							
				</div>

			</div>



		</br></br>



@stop