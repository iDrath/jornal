



	<body class="container">


		@section('body')
			
		<!--START SLIDER -->

		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
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
				<img src="/images/extra/ny.jpg" alt="New York" width="1100" height="500">
				<div class="carousel-caption">
					<h3>New York</h3>
					<p>We love the Big Apple!</p>
				</div>   
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>


		<!--END SLIDER -->


		
</br></br>

		
			<div class="row">
				<div class="col-8 news">
					<p class="publi"> Publicaciones</p>
					<hr>
					<div class="col-12">
						
						<div class="col-4">
							<img src="/images/extra/ny.jpg" alt="New York" class="float-left mr-2 img-fluid">
						</div>
						<div class="col-14">
							<h2>Heading</h2>
								<div id="read">
									<p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
								</div>
								<p align="right"><a class="btn btn-primary" href="#" role="button">View details »</a></p>
						</div>
								<hr>
					</div>
					<div class="col-12">
						
						<div class="col-4">
							<img src="/images/extra/la.jpg" alt="New York" class="float-left mr-2 img-fluid">
						</div>
						<div class="col-14" id="read">
							<h2>Heading</h2>
							<p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, 
								tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
							<p align="right"><a class="btn btn-primary" href="#" role="button">View details »</a></p>
						</div>
								<hr>
					</div>
				</div>
				
					

					<div class="col-4 ">
								<img src="/images/extra/vbanner.jpg" alt="vertical banner" class="float-left col-sm-11 img-fluid">
							
					</div>






				













			</div>


		@show

		</br></br>


	</body>

	<script>
	var myDiv = $('#read');
myDiv.text(myDiv.text().substring(0,244))
</script>
