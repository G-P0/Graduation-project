<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Home Control</title>
		<meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

				<?php include_once "includes/html_header.php";?>

		    <!-- Google Fonts -->
		    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:400,500" rel="stylesheet">

		    <style type="text/css">
		    		.switch {
					  position: relative;
					  display: inline-block;
					  width: 60px;
					  height: 34px;
					}

					/* Hide default HTML checkbox */
					.switch input {display:none;}

					/* The slider */
					.slider {
					  position: absolute;
					  cursor: pointer;
					  top: 0;
					  left: 0;
					  right: 0;
					  bottom: 0;
					  background-color: #ccc;
					  -webkit-transition: .4s;
					  transition: .4s;
					}

					.slider:before {
					  position: absolute;
					  content: "";
					  height: 26px;
					  width: 26px;
					  left: 4px;
					  bottom: 4px;
					  background-color: white;
					  -webkit-transition: .4s;
					  transition: .4s;
					}

					input:checked + .slider {
					  background-color: #2196F3;
					}

					input:focus + .slider {
					  box-shadow: 0 0 1px #2196F3;
					}

					input:checked + .slider:before {
					  -webkit-transform: translateX(26px);
					  -ms-transform: translateX(26px);
					  transform: translateX(26px);
					}
		    </style>
	</head>
	<body>
	<?php include_once "includes/dashnav.php" ?>

    <!-- Start Home Control -->
			    <div class="homecontrol">
			    	<div class="container">
                        <form action="<?php echo $rootpath;?>/controllers/C_actions.php" method="post" enctype="multipart/form-data">
                            <!--Refresh  -->
                            <div class="card mt-4">
                                <div class="card-body">
                                    <p class="card-text text-center">Make sure to refresh to get the new updates of the services status from other users </p>
                                    <div class="text-center">
                                        <a href="" class="btn btn-warning text-center" role="button"> Refresh</a>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    The latest update was 1 min age.
                                </div>
                            </div>

                            <!--First Card - Normal User -->
                            <div class="card mt-4 border-success">
                                <div class="card-header bg-success  text-white">
                                    <h5> <i class="fa fa-user"></i> Normal User </h5>
                                </div>
                                <div class="card-body">
                                    <!-- Outdoors -->
                                    <div class="card">
                                        <div class="card-header bg-dark text-white ">
                                            <h6> <i class="fa fa-map-marker"></i> Outdoors </h6>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-light">
                                                <thead>
                                                <tr>
                                                    <th>Service</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Main Gate</td>
                                                    <td><a href="#" class="btn btn-primary" data-toggle="button">Gate</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Pool Cover</td>
                                                    <td>
                                                        <!-- Rectangular switch -->
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Indoors -->
                                    <div class="card mt-3">
                                        <div class="card-header bg-dark text-white">
                                            <h6> <i class="fa fa-home"></i> Indoors </h6>
                                        </div>
                                        <div class=" row card-body ">
                                            <div class="col-4">
                                                <span >Lights state Indicators</span>
                                                <table class="table mt-3 ">
                                                    <thead>
                                                    <tr>
                                                        <th>Service</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Room1</td>
                                                        <td>
                                                            <label class="switch">
                                                         <input type="checkbox">
                                                         <span class="slider"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Room2</td>
                                                        <td>
                                                            <label class="switch">
                                                         <input type="checkbox">
                                                                <span class="slider"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Room3</td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Living Room</td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kitchen</td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-4">
                                                <span>Devices</span>
                                                <table class="table mt-3">
                                                    <thead>
                                                    <tr>
                                                        <th>Service</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Kitchen : Refrigerator</td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kitchen : Microwave</td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kitchen : Water valve</td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Living Room : LED Screen</td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Living Room  : Air Conditioner</td>
                                                        <td>
                                                            <label class="switch">
                                                    <input type="checkbox">
                                                                <span class="slider"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Living Room  : Heater</td>
                                                        <td>
                                                            <label class="switch">
                                                     <input type="checkbox">
                                                                <span class="slider"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-4">
                                                <span>Status</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Second Card - Super User -->
                            <div class="card mt-5 border-danger mb-5">
                                <div class="card-header bg-danger text-white">
                                    <h5> <i class="fa fa-user-secret"></i> Super User </h5>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Service</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Alarm System</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Main Stream Power (Gas)</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Main Stream Power (Light)</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Main Stream Power (Current)</td>
                                            <td>
                                                <label class="switch">
                                                    <input type="checkbox" name="main-power" value="checked" onchange="this.form.submit();">
                                                    <span class="slider"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <button class="btn btn-success" name="submit" value="Update State">Update</button>
                        </form>
			    	</div>
			    </div>
			    <!-- End Home Control -->


				<!--Required Scripting Libraries -->
					<!-- <script src="script/smooth-scroll.min.js"></script> -->
					<script src="js/jquery-3.3.1.min.js"></script>
					<script src="js/bootstrap.min.js"></script>
					<script src="js/script.js"></script>
	</body>
</html>
