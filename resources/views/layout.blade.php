



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
				<img src="/images/extra/la.jpg" alt="Los Angeles" width="1100" height="500">
				<div class="carousel-caption">
					<h3>Los Angeles</h3>
					<p>We had such a great time in LA!</p>
				</div>   
				</div>
				<div class="carousel-item">
				<img src="/images/extra/chicago.jpg" alt="Chicago" width="1100" height="500">
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
								<p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
								<p align="right"><a class="btn btn-primary" href="#" role="button">View details »</a></p>
								</div>
								<hr>
					</div>
					<div class="col-12">
						
						<div class="col-4">
								<img src="/images/extra/la.jpg" alt="New York" class="float-left mr-2 img-fluid">
								</div>
						<div class="col-14">
								<h2>Heading</h2>
								<p class="text-justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
								<p align="right"><a class="btn btn-primary" href="#" role="button">View details »</a></p>
								</div>
								<hr>
					</div>
				</div>

				<div class="col-2 calendar">
					
					








				<?php
					class Twitter{

						function getTweets($user){
							ini_set('display_errors', 1);
							require_once('resources\views\layout.blade.php');

							$settings = array(
								'oauth_access_token' => "Eh17qltS0gxhtiUMyxa3f4Qiy",
								'oauth_access_token_secret' => "amXBClpm7eIUAJcAL3asI62evBqv3vqDuwE9QgUzA8PBmnO59o",
								'consumer_key' => "360094130-Ly49gpggNak3TP6TEF5nkket7njTHSRKNDVFqWfh",
								'consumer_secret' => "0zuncxvnHaIOOsmBhwJuQNYDPKG365bgF8XYcKCIiWzIS"
							);

							$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
							$getfield = '?screen_name='.$user.'&count=100';        
							$requestMethod = 'GET';
							$twitter = new TwitterAPIExchange($settings);
							$json =  $twitter->setGetfield($getfield)
										->buildOauth($url, $requestMethod)
										->performRequest();
							return $json;

						}

						function getArrayTweets($jsonraw){
							$rawdata = "";
							$json = json_decode($jsonraw);
							$num_items = count($json);
							for($i=0; $i<$num_items; $i++){

								$user = $json[$i];

								$fecha = $user->created_at;
								$url_imagen = $user->user->profile_image_url;
								$screen_name = $user->user->screen_name;
								$tweet = $user->text;

								$imagen = "<a href='https://twitter.com/".$screen_name."' target=_blank><img src=".$url_imagen."></img></a>";
								$name = "<a href='https://twitter.com/".$screen_name."' target=_blank>@".$screen_name."</a>";

								$rawdata[$i][0]=$fecha;
								$rawdata[$i]["FECHA"]=$fecha;
								$rawdata[$i][1]=$imagen;
								$rawdata[$i]["imagen"]=$imagen;
								$rawdata[$i][2]=$name;
								$rawdata[$i]["screen_name"]=$name;
								$rawdata[$i][3]=$tweet;
								$rawdata[$i]["tweet"]=$tweet;
							}
							return $rawdata;
						}

						function displayTable($rawdata){

							//DIBUJAMOS LA TABLA
							echo '<table border=1>';
							$columnas = count($rawdata[0])/2;
							//echo $columnas;
							$filas = count($rawdata);
							//echo "<br>".$filas."<br>";
							//Añadimos los titulos

							for($i=1;$i<count($rawdata[0]);$i=$i+2){
								next($rawdata[0]);
								echo "<th><b>".key($rawdata[0])."</b></th>";
								next($rawdata[0]);
							}
							for($i=0;$i<$filas;$i++){
								echo "<tr>";
								for($j=0;$j<$columnas;$j++){
									echo "<td>".$rawdata[$i][$j]."</td>";

								}
								echo "</tr>";
							}       
							echo '</table>';
						}
					}

					$twitterObject = new Twitter();
					$jsonraw =  $twitterObject->getTweets("alex_esquiva");
					$rawdata =  $twitterObject->getArrayTweets($jsonraw);
					$twitterObject->displayTable($rawdata);

				?>















				</div>
			</div>


		@show

		</br></br>


	</body>

