<?php 
  session_start();
?>
<!-- Start Modal -->
  <!-- Modal -->
  <div class="x" id="top">ax</div>
<div class="arrow">
    <a href="#top"> <i class="fa fa-lock"  aria-hidden="true"></i></a>
</div>

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
      <form method="POST" action="controllers/C_loginAndRegister.php">
            <!--Email -->
            <div class="form-group">
                <div class="row">
                  <div class="col-1 text-center" style="padding: 3px 0 0 0 ; ">
                    <i class="fa fa-user fa-lg"></i>
                  </div>
                  <div class="col-10" style="padding: 0;"">
                    <input class="form-control" type="text" name="username" placeholder="Username or Email Address ">
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
            <!-- modal footer -->
            <div class="modal-footer">
          
              <div class="col">
                <a href="#">Forgot your password?</a>
                <a href="signup.php">Register!</a>
          </div>
          <div class="col text-center">
            <button class="btn btn-success" style="padding: 8px 30px" name="submit" value="login">
            <i class="fa fa-sign-in"></i>
            Login</button>
          </div>
        </div>
      </form>
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
            <?php 
              if (isset($_SESSION['username'])) 
              {
                echo"<strong>Welcome ".@$_SESSION['username']."</strong>";
            ?>
              <a href="logout.php" class="btn btn-primary btn-lg">Logout</a>
            <?php 
              }
              else
              {
            ?>
            <!-- Button trigger modal - Login   -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Login</button>
            <a href="signup.php" class="btn btn-secondary btn-lg">Signup</a>
            <?php 
              }
            ?>
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
  		        <a class="nav-link" href="process.php">Process</a>
  		      </li>

  		      <!--Dropdown list -->
  		      <li class="nav-item ">
  			        <a class="nav-link" href="services.php">Services</a>
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
  		        <a class="nav-link" href="support.php">Support</a>
  		      </li>

  		      <li class="nav-item">
  		        <a class="nav-link" href="aboutus.php">About Us</a>
  		      </li>

  		      <li class="nav-item">
  		        <a class="nav-link" href="contactus.php">Contact Us</a>
  		      </li>
  		    </ul>
    	  </div>
    	  </div>
	</nav>
    <!-- End Navigation Bar -->
