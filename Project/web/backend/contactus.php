<!DOCTYPE html>
<html>
<head lang="en">
    <title>Contact Us</title>
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
                    <img class="d-block w-100 " src="resources/images/slider/c1.jpg" alt="First slide"
                         style="width: 1300px ; height: 500px;">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 " src="resources/images/slider/c4.jpg" alt="Second slide"
                         style="width: 1300px ; height: 500px;">
                    <div class="carousel-caption d-none d-md-block ">
                        <div class="row ">
                            <div class="col-xl-9 mx-auto slide2">
                                <h1>MAKE YOUR HOME THE SMARTEST ON THE BLOCK</h1>
                                <p>PERSONALIZE YOUR HOME TO BE MORE COMFORTABLE, CONVENIENT, AND SECURE.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 " src="resources/images/slider/c3.jpg" alt="Third slide"
                         style="width: 1300px ; height: 500px;">
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


<!--Start Contact Us Page -->

<section class="contactus">
    <div class="container">
        <div class="row">
            <!-- Contacts Info -->
            <div class="col-6" style="border: 1px solid 0;">
                <h1>OUR CONTACTS</h1>
                <p>
                    Please feel free to call or email our office to setup your free no obligation in-home consultation
                </p>
                <h3>MENOUF OFFICE</h3>
                <hr>
                <div class="address">
                    <ul>
                        <li>
                            <i class="fa fa-search fa-lg"></i>
                            <span>Address:</span>
                            <span>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus</span>
                        </li>
                        <li>
                            <i class="fa fa-phone fa-lg"></i>
                            <span>Phone:</span>
                            <span>0109-388-0992</span>
                        </li>
                        <li>
                            <i class="fa fa-map-marker fa-lg"></i>
                            <span>Location:</span>
                        </li>
                    </ul>
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13755.78703227719!2d30.921825322866027!3d30.465946102817075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14587e662f9e048d%3A0x75267884cf57bb9b!2sMinuf%2C+Madinet+Menuf%2C+Menuf%2C+Menofia+Governorate!5e0!3m2!1sen!2seg!4v1523127882154"
                                width="500" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>


                </div>
            </div>
            <!-- Lets Get in touch -->

            <div class="col-6 touch">
                <h1>LETS GET IN TOUCH</h1>
                <form>
                    <div class="form-row">
                        <div class="col">
                            <input class="form-control" type="text" name="username" placeholder="Name">
                        </div>
                        <div class="col">
                            <input class="form-control" type="email" name="email" placeholder="E-mail">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <input class="form-control" type="text" name="phone" placeholder="phone">
                        </div>
                        <div class="col">
                            <input class="form-control" type="text" name="subject" placeholder="subject">
                        </div>
                    </div>
                    <div class="form-row">
                        <textarea class="form-control" placeholder="Enter You Message here !"></textarea>
                    </div>
                    <div class="form-row">
                        Google reCAPTCHA
                    </div>
                    <div class="form-row send">
                        <a href="#" class="btn-primary btn-lg">send</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Us Page -->
include_once "includes/html_footer.php";

</body>
</html>
