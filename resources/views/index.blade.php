<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Weather Map</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" class="branding">
						<img  src="images/logo.png" alt="" class="logo">
						<div class="logo-type">
							<h1 class="site-title">Weather Map</h1>
							
						</div>
					</a>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<div style="height:200px;width:100%;"class="hero" data-bg-image="images/banner2.jpg">
				<div class="container">
					<form action="{{route ('index') }}" class="find-location">
						<input name="location" type="text" placeholder="Find your location...">
						<input type="submit" value="Find">
					</form>

				</div>
			</div>
			<div class="forecast-table">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
							<div class="forecast-header">
								<div class="day">{{\Carbon\Carbon::parse($result['list']['0']['dt_txt'])->format('l');}}</div>
								<div class="date">{{\Carbon\Carbon::parse($result['list']['0']['dt_txt'])->format('d/m/y');}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location"> {{ $result['city']['name'] }}</div>
								<div class="degree">
									<div class="num">  {{ floor($result['list'][0]['main']['temp']-273) }}  <sup>o</sup>C</div>
									<div class="forecast-icon">
										<img src="images/icons/icon-1.svg" alt="" width=90>
									</div>	
								</div>
								<span><img src="images/icon-umberella.png" alt="">
                                    {{ $result['list'][0]['weather']['0']['description'] }}
                                </span>
								<span><img src="images/icon-wind.png" alt="">{{ ($result['list'][0]['wind']['speed']) }}km/h</span>
								<span><img src="images/icon-compass.png" alt="">East</span>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">{{\Carbon\Carbon::parse($result['list']['7']['dt_txt'])->format('l');}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-3.svg" alt="" width=48>
								</div>
								<div class="degree">{{ floor($result['list'][7]['main']['temp']-273) }}<sup>o</sup>C</div>
								<small>{{ ($result['list'][7]['wind']['speed']) }}km/h</small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">{{\Carbon\Carbon::parse($result['list']['15']['dt_txt'])->format('l');}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-5.svg" alt="" width=48>
								</div>
								<div class="degree">{{ floor($result['list'][15]['main']['temp']-273) }}<sup>o</sup>C</div>
								<small>{{ ($result['list'][15]['wind']['speed']) }}km/h</small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">{{\Carbon\Carbon::parse($result['list']['23']['dt_txt'])->format('l');}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-7.svg" alt="" width=48>
								</div>
								<div class="degree">{{ floor($result['list'][23]['main']['temp']-273) }}<sup>o</sup>C</div>
								<small>{{ ($result['list'][23]['wind']['speed']) }}km/h</small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">{{\Carbon\Carbon::parse($result['list']['31']['dt_txt'])->format('l');}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-12.svg" alt="" width=48>
								</div>
								<div class="degree">{{ floor($result['list'][31]['main']['temp']-273) }}<sup>o</sup>C</div>
								<small>{{ ($result['list'][31]['wind']['speed']) }}km/h</small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">{{\Carbon\Carbon::parse($result['list']['39']['dt_txt'])->format('l');}}</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-13.svg" alt="" width=48>
								</div>
								<div class="degree">{{ floor($result['list'][39]['main']['temp']-273) }}<sup>o</sup>C</div>
								<small>{{ ($result['list'][39]['wind']['speed']) }}km/h</small>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Popular Cities</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<img style="height:185px;" class="live-camera-cover" src="images/dhaka.jpg" >
									<h3 class="location">Dhaka</h3>
									
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<img style="height:185px;" class="live-camera-cover" src="images/khulna.jpg" >
									<h3 class="location">Khulna</h3>
									
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<img style="height:185px; margin-left:20px;" class="live-camera-cover" src="images/sylhet.jpg" >
									<h3 style="margin-left:25px; class="location">Sylhet</h3>
									
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<img style="height:185px; margin-left:73px;" class="live-camera-cover" src="images/chittagong.jpg" >
									<h3 style="margin-left:75px;"class="location">Chittagong</h3>
									
								</div>
							</div>
						</div>
					</div>
				</div>

				

				
							
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						
						<div class="col-md-3 col-md-offset-1">
							<div class="social-links">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>

					
				</div>
			</footer> <!-- .site-footer -->
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>