<!DOCTYPE html>
<html>
    <head lang="en">
        <title>Support</title>
      include_once "includes/html_header.php";
    </head>
    <body>
        <!-- start navbar -->
  <?php
  include_once "includes/navbar.php";
  ?>
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

    <!-- Start Support Page -->
    <section class="support">
        <div class="container">
            <h1>Support</h1>
            <hr>
            <div class="contact">
                <h3>SMART HOME SYSTEMS contact phone numbers : </h3>
                <p>
                    For SmartCare Service and Support requests call 888-634-0413 or SmartCare@shs-mt.com.
                    Gauranteed response in 30 minutes or less 24/7/365.
                </p>
                <p>
                   For Security Dispatch and Monitoring Services call 800-843-5154 and have your account number ready.

                   For all Billing questions please call the main office at 406-388-0676 Option 0
                </p>
            </div>
            <hr>
            <div class="payment">
                <h3>ONLINE SECURE PAYMENT OPTION: </h3>
                <p>
                    To pay your invoice online, simply click the PayPal link below and have you invoice number ready.  You can pay with your PayPal account or by credit card:
                </p>
                <h5>Please follow the instructions:</h5>
                <ol>
                   <li>
                        Click the "Pay Now" button below.
                   </li>
                   <li>
                        Enter your invoice number in the description field.
                   </li>
                   <li>
                        Enter the amount of your invoice and click "update"
                   </li>
                   <li>
                        Pay the invoice by logging in to your PayPal account or click the "Don't Have A PayPal Account" option and enter your credit card information.
                   </li>
                </ol>

                <div class="paybutton">
                    <a href="#" class="btn-primary btn-lg">Pay now</a>
                </div>
                <div class="paycom">
                    <img src="resources/images/payment/logo.png" alt="payemnt companies">
                </div>

            </div>
            <hr>
            <h3>USER MANUALS</h3>
            <div class="usermanual">
                    <div class="row">
                        <div class="col-3">
                            <span>General</span>
                        </div>
                        <div class="col-6">
                            <p>
                                General user manual for all SHS security systems.
                            </p>
                        </div>
                        <div class="col-3">
                            <a href="#" class="btn-primary btn-lg">Download</a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-3">
                            <span>Indoors</span>
                        </div>
                        <div class="col-6">
                            <p>
                                Indoors user manual for all SHS security systems.
                            </p>
                        </div>
                        <div class="col-3">
                            <a href="#" class="btn-primary btn-lg">Download</a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-3">
                            <span>Outdoors</span>
                        </div>
                        <div class="col-6">
                            <p>
                                Outdoors user manual for all SHS security systems.
                            </p>
                        </div>
                        <div class="col-3">
                            <a href="#" class="btn-primary btn-lg">Download</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
include_once "includes/html_footer.php";
    </body>
</html>
