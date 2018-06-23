<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<?php include_once "views/html_header.php";?>
</head>
<body>
	<!-- start navbar -->
	<?php include_once "includes/navbar.php";?>
	<!-- end navbar -->

	<!-- Start Carousel Section -->
	<section class="carousel" id="home">
		<div class="container-fluid">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<!-- Start Carousel Items -->
					<div class="carousel-item active">
						<img class="d-block w-100 " src="resources/images/slider/c1.jpg" alt="First slide" style="width: 1300px ; height: 500px;" >
						<div class="carousel-caption d-none d-md-block">

						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 " src="resources/images/slider/c4.jpg" alt="Second slide" style="width: 1300px ; height: 500px;">
						<div class="carousel-caption d-none d-md-block ">
							<div class="row ">
								<div class="col-xl-9 mx-auto slide2">
									<h1 >MAKE YOUR HOME THE SMARTEST ON THE BLOCK</h1>
									<p>PERSONALIZE YOUR HOME TO BE MORE COMFORTABLE, CONVENIENT, AND SECURE.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 " src="resources/images/slider/c3.jpg" alt="Third slide" style="width: 1300px ; height: 500px;">
						<div class="carousel-caption d-none d-md-block">

						</div>
					</div>
					<!-- End Carousel Items -->
				</div>
				<!-- Start Carousel Controllers -->
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>
	<!-- End Carousel Section -->

	<!-- Start About Us Page -->
	<section class="aboutus">
		<div class="container">
			<h1>About Us</h1>
			<hr>
			<div class="row">
				<div class="col-6 aboutcompany">
					<h2>About The Company</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat.
					</p>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat.
					</p>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat.
					</p>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat.
					</p>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat.
					</p>
				</div>
				<div class="col-6 missionvision">
					<div class="row">
						<div class="col mission">
							<h2>Mission</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col vision">
							<h2>Vision</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat
							</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Us Page -->
	include_once "includes/html_footer.php";
</body>
</html>
