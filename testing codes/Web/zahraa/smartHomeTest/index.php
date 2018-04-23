<!DOCTYPE html>
<html>
<head>
    <title>Explore Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Custom fonts - Font Awesome -->
    <link rel="stylesheet" type="text/css" href="resources/css/font-awesome.min.css">
    <!-- Bootstrap core CSS --> 
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <!-- Custom fonts for this template -->
    <link href="resources/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:400,500" rel="stylesheet">
    

</head>
<body>
  <!-- Start Modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- modal header -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign in To Your Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--modal body -->
        <div class="modal-body">
          <form>
            <!--Email -->
            <div class="form-group">
                <div class="row">
                  <div class="col-1 text-center" style="padding: 3px 0 0 0 ; ">
                    <i class="fa fa-user fa-lg"></i>
                  </div>
                  <div class="col-10" style="padding: 0;"">
                    <input class="form-control" type="email" name="email" placeholder="Username or Email Address ">
                  </div>
                </div>
            </div>
            <!-- Password -->
            <div class="form-group">
                <div class="row">
                  <div class="col-1 text-center" style="padding:  3px 0 0 0; ">
                    <i class="fa fa-lock fa-lg"></i>
                  </div>
                  <div class="col-10" style="padding: 0;"">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                  </div>
                </div>
            </div>
            <!-- Checkbox -->
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
          </form>
        </div>

        <!-- modal footer -->
        <div class="modal-footer">
          
          <div class="col">
            <a href="#">Forgot your password?</a>
            <a href="views/signup.php">Register!</a>
          </div>
          <div class="col text-center">
            <button type="button" class="btn btn-success" style="padding: 8px 30px" name="submit" value="login">
            <i class="fa fa-sign-in"></i>
            Login</button>
          </div>
        </div>
      </div>
    </div>
  </div>

   <!-- Start header -->
   <div class="header">
     <div class="container">
       <div class="row ">
        <!--Band -->
         <div class=" brand col-4">
          <a class="navbar-brand" href="index.php">
            <img src="resources/images/logo1.png" alt="Logo" style="width:40px;">
            <span>.</span>
            <!--<i class="fas fa-home fa-lg"></i>-->
            <i class="fa fa-home fa-lg" style="font-size: 45px; color: #343A40; "></i>
            <span>.</span>    
            <img src="resources/images/logo1.png" alt="Logo" style="width:40px;">
          </a>
         </div>
         <div class=" info col-4 text-center " >
             <span class="align-bottom font-italic">MENOUF &#124; 042&#45;666&#45;312</span>
             <span class="align-bottom font-italic">CAIRO &#124; 042&#45;688&#45;489</span>
             <div>
               <i class="fa fa-phone fa-md font-weight-bold py-2">&#58; HOTLINE &#124; 333&#45;666&#45;312</i>
             </div>
         </div>
         <!-- SignIn and SignUP -->
         <div class=" logsys col-4 text-right">
           <!-- Button trigger modal - Login   -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
              Login
            </button>
            <a href="views/signup.php" class="btn btn-secondary btn-lg">Signup</a>
         </div>
       </div>
     </div>
   </div>
   <!-- End header -->
	
	 <!-- Start Navigation Bar -->
   <nav class="navbar navbar-expand-lg navbar-ligth  bg-dark sticky-top">
    	<div class="container-fluid">
    	<!-- Brand and toggle get grouped for better mobile display -->
  	  	<!--toggler -->
  	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  	    <span class="navbar-toggler-icon"></span>
  	  </button>

  	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  		    <ul class="navbar-nav mx-auto ">
  		      <li class="nav-item active">
  		        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
  		      </li>
  		      <li class="nav-item">
  		        <a class="nav-link" href="views/process.php">Process</a>
  		      </li>

  		      <!--Dropdown list -->
  		      <li class="nav-item ">
  			        <a class="nav-link" href="views/services.php">Services</a>
                <!--
                <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  			          Services
  			        </a>
  			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  			          <a class="dropdown-item" href="#indoors">Indoor Services</a>
  			         
  			          <div class="dropdown-divider"></div>
  			          <a class="dropdown-item" href="#outdoors">Outdoor Services</a>
  			          
  			        </div>

                !-->
  		      </li>

  		      <li class="nav-item">
  		        <a class="nav-link" href="views/support.php">Support</a>
  		      </li>

  		      <li class="nav-item">
  		        <a class="nav-link" href="views/aboutus.php">About Us</a>
  		      </li>

  		      <li class="nav-item">
  		        <a class="nav-link" href="views/contactus.php">Contact Us</a>
  		      </li>
  		    </ul>
    	  </div>
    	  </div>
	</nav>
    <!-- End Navigation Bar -->

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
          <div class="clearfix"></div>
	    </div>
		</div>
	</section>
	<!-- End Carousel Section -->
	 
	<!-- Start Intro Section -->
	<section class="intro">
		<div class="container">
			
			<div class="row justify-content-between">
				<div class="col-md-5 ">
					<h2>About Us</h2>
					<p class="lead">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat 
					<p class="lead">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat
              
					</p>
					<div class="learnmore"><a href="views/aboutus.php" class="btn btn-outline-info ">Learn more!</a></div>
				</div>
        <div class="col-1">
          
        </div>
				<div class="col-md-5">
					<h2>Our Services</h2>
					<p class="lead">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat
					<p class="lead">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat
            
					<div class="learnmore"><a href="views/services.php" class= "btn btn-outline-info ">Learn more!</a></div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Intro Section -->

	<!-- Start Parterns & Sponsors Section -->
	<section class="sponsors">
		<div class="container">
      <h1>Our Partners &amp; Sponsors</h1>
	    <div  class="row">
	        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	            <div class="image">
	                <img  style="width: 250px;height: 200px;" src="resources/images/sponsors/control.jpg" alt="">
	            </div>
	            <div class="desc">
	                
	            </div>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	            <div class="image">
	                <img  style="width: 250px;height: 200px;" src="resources/images/sponsors/comm.jpg" alt="">
	            </div>
	            <div class="desc">
	                
	            </div>
	        </div>
	       
	        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	            <div class="image">
	                <img style="width: 250px;height: 200px; " src="resources/images/sponsors/ieee.png" alt="">
	            </div>
	            <div class="desc">
	                
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        
	        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	            <div class="image">
	                <img  style="width: 250px;height: 200px; margin-top: 20px;" src="resources/images/sponsors/robo.jpg" alt="">
	            </div>
	            <div class="desc">
	               
	            </div>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	            <div class="image">
	                <img style="width: 250px;height: 200px; margin-top: 20px;" src="resources/images/sponsors/fee.jpg" alt="">
	            </div>
	            <div class="desc">
	              
	            </div>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	            <div class="image">
	                <img style="width: 250px;height: 200px; margin-top: 20px;" src="resources/images/sponsors/men.jpg" alt="">
	            </div>
	            <div class="desc">
	                
	            </div>
	        </div>
        </div>

	 </div>
	</section>
	<!-- End  Partners & Sponsors Section -->

	<!-- Start Testimonials Section -->
	<section class="testimonials">
		<div class="container">
            	<div class="testimonial-icon faicon-counter-small color-black margin-bottom-35">
            		<i class="fa fa-quote-left" aria-hidden="true"></i>
            	</div>
                <blockquote>
                    <q>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat.
                            Purto brute disputando cu est, Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat.
                            Purto brute disputando cu est, Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat.
                            Purto brute disputando cu est, Lorem ipsum dolor sit amet.
                    </q>
                </blockquote>
                <h4>Khalid Ahmed</h4>
                
                <ul>
                    <li class="active"></li>
                    <li ></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
	</section>
	<!-- End Testimonials Section -->

	<!-- Start Why Choose Us Section -->
	<section class="chooseus">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6">
					<img src="resources/images/whychooseus (1).jpg" style=" height: 500px">
				</div>
				<div class="col-6">
					
					<h2>Why Choose Us</h2>
					<p >
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<p >
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
					<div class="viewmore" class="text-center">
					<a  class="btn btn-primary" href="#">View More</a>
					</div>
				</div>
				
			</div>
			</div>
			
	</section>
	<!-- End Why Choose Us Section -->

	<!-- Start Explore Our Apps -->
	<section class="explore">
		<div class="container">
			<div class="row">
				<div class="col-5">
					<img src="resources/images/phone2.png">
				</div>
				<div class="col-7">
					<h1>Explore Our Apps</h1>
					<p class="lead">
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat"
					</p>
					<p class="lead">
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat"
					</p>
					<div class="row apps" >
						<div class="col-6">
							<a href="#">
								<img src="resources/images/google.png" style="width: 200px ; height:100px">
							</a>
						</div>
						<div class="col-6" style="padding-top: 19px">
							<a href="#">
								<img src="resources/images/appstore.png" style="width:175px ; height:68px; ">
							</a>
						</div>
					</div>
				</div >
			</div>
		</div>
	</section>
	<!-- End Explore Our Apps -->

	<!-- Start Newsteller -->
	<section class="newsteller">
		<div class="container-fluid">
			<h1>Sign up Our Newsteller </h1>
			<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
	              <form>
		                <div class="form-row">
		                  <div class="col-12 col-md-9 mb-2 mb-md-0">
		                       <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
		                  </div>
		                  <div class="col-12 col-md-3">
			                    <a class="btn btn-block btn-lg btn-primary" href="#">Subscribe</a>
		                  </div>
		                </div>
	              </form>
            </div>
		</div>
	</section>
	<!-- End Newsteller -->


	<!-- Start Footer -->
	<div class="content">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo">
                    	<a href="#"> 
                		  <img src="resources/images/logo1.png" alt="Logo" style="width:55px;">
				          <span>.</span>
				          <i class="fa fa-home fa-lg" style="color: #E3E3E3"></i>
				          <span>.</span>    
				          <img src="resources/images/logo1.png" alt="Logo" style="width:55px;">
                     	</a>
                    </h2>
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="views/process.php">Process</a></li>
                        <li><a href="views/services.php">Services</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="views/aboutus.php">Company Information</a></li>
                        <li><a href="views/contactus.php">Contact us</a></li>
                        <li><a href="#newsteller">Newsteller</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">Hotline</a></li>
                        <li><a href="#">Online Payment</a></li>
                        <li><a href="#">User Manual</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <a href="views/contact.php">
                      <button type="button" class="btn btn-default">Contact us</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright - CSE Web Team </p>
        </div>
    </footer>
	<!-- End Footer -->





    <!--Required Scripting Libraries -->
<!-- <script src="script/smooth-scroll.min.js"></script> -->
<script src="resources/js/jquery-3.3.1.min.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
<script src="resources/js/script.js"></script>

</body>

</html>