<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Control</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include_once "includes/html_header.php"; ?>

    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:400,500" rel="stylesheet">
    <style type="text/css">

        body {
            background-image: url("images/bg4.jpg");

        }
    </style>

</head>
<body>
<?php include_once "includes/dashnav.php" ?>

<!-- Start Home Control -->
<div class="homecontrol ">
    <div class="container ">
        <!--Refresh  -->
        <form action="<?php echo $rootpath; ?>/controllers/C_actions.php" method="post" enctype="multipart/form-data">
            <div class="card mt-4 bg-light">
                <div class="card-body">
                    <p class="card-text text-center">Make sure to refresh to get the new updates of the services status
                        from
                        other users </p>
                    <div class="text-center">
                        <a href="" class="btn btn-warning text-center text-light" role="button"> Refresh</a>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    The latest update was 1 min age.
                </div>
            </div>

            <!--First Card - Normal User -->
            <div class="card mt-4 border-success  bg-light">
                <div class="card-header bg-success  text-white">
                    <h5><i class="fa fa-user"></i> Normal User </h5>
                </div>
                <div class="card-body ">
                    <!-- Outdoors -->
                    <div class="card">
                        <div class="card-header bg-dark text-white ">
                            <h6><i class="fa fa-map-marker"></i> Outdoors </h6>
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
                                        <!-- Button Group of radio buttons -->
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-danger active">
                                                <input type="radio" name="Pooloption" value="OFF" id="option1"
                                                       autocomplete="off" checked="true" mr-5>OFF
                                            </label>
                                            <label class="btn btn-success ">
                                                <input type="radio" name="Pooloption" value="ON" id="option2"
                                                       autocomplete="off">ON
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Indoors -->
                    <div class="card mt-3">
                        <div class="card-header bg-dark text-white">
                            <h6><i class="fa fa-home"></i> Indoors </h6>
                        </div>
                        <div class=" row card-body ">
                            <div class="col-5">
                                <span class="font-weight-bold font-italic text-secondary">Lights state Indicators</span>
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
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-danger active">
                                                    <input type="radio" name="room1ligth" value="OFF" id=""
                                                           autocomplete="off" checked="true">OFF
                                                </label>
                                                <label class="btn btn-success ">
                                                    <input type="radio" name="room1ligth" value="ON" id=""
                                                           autocomplete="off">ON
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Room2</td>
                                        <td>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-danger active">
                                                    <input type="radio" name="room2ligth" value="OFF" id=""
                                                           autocomplete="off" checked="true">OFF
                                                </label>
                                                <label class="btn btn-success ">
                                                    <input type="radio" name="room2ligth" value="ON" id=""
                                                           autocomplete="off">ON
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Room3</td>
                                        <td>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-danger active">
                                                    <input type="radio" name="room3ligth" value="OFF" id=""
                                                           autocomplete="off" checked="true">OFF
                                                </label>
                                                <label class="btn btn-success ">
                                                    <input type="radio" name="room3ligth" value="ON" id=""
                                                           autocomplete="off">ON
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Living Room</td>
                                        <td>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-danger active">
                                                    <input type="radio" name="livingroomlight" value="OFF" id=""
                                                           autocomplete="off" checked="true">OFF
                                                </label>
                                                <label class="btn btn-success ">
                                                    <input type="radio" name="livingroomlight" value="ON" id=""
                                                           autocomplete="off">ON
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kitchen</td>
                                        <td>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-danger active">
                                                    <input type="radio" name="kitchenlight" value="OFF" id=""
                                                           autocomplete="off" checked="true">OFF
                                                </label>
                                                <label class="btn btn-success ">
                                                    <input type="radio" name="kitchenlight" value="ON" id=""
                                                           autocomplete="off">ON
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-5">
                                <span class="font-weight-bold font-italic text-secondary">Devices</span>
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
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-danger active">
                                                    <input type="radio" name="refrigerator" value="OFF" id=""
                                                           autocomplete="off" checked="true">OFF
                                                </label>
                                                <label class="btn btn-success ">
                                                    <input type="radio" name="refrigerator" value="ON" id=""
                                                           autocomplete="off">ON
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kitchen : Microwave</td>
                                        <td>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-danger active">
                                                    <input type="radio" name="microwave" value="OFF" id=""
                                                           autocomplete="off" checked="true">OFF
                                                </label>
                                                <label class="btn btn-success ">
                                                    <input type="radio" name="microwave" value="ON" id=""
                                                           autocomplete="off">ON
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kitchen : Water valve</td>
                                        <td>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-danger active">
                                                    <input type="radio" name="wvalve" value="OFF" id=""
                                                           autocomplete="off"
                                                           checked="true">OFF
                                                </label>
                                                <label class="btn btn-success ">
                                                    <input type="radio" name="wvalve" value="ON" id=""
                                                           autocomplete="off">ON
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Living Room : LED Screen</td>
                                        <td>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-danger active">
                                                    <input type="radio" name="screen" value="OFF" id=""
                                                           autocomplete="off"
                                                           checked="true">OFF
                                                </label>
                                                <label class="btn btn-success ">
                                                    <input type="radio" name="screen" value="ON" id=""
                                                           autocomplete="off">ON
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Living Room : Air Conditioner</td>
                                        <td>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-danger active">
                                                    <input type="radio" name="ac" value="OFF" id="" autocomplete="off"
                                                           checked="true">OFF
                                                </label>
                                                <label class="btn btn-success ">
                                                    <input type="radio" name="ac" value="ON" id="" autocomplete="off">ON
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Living Room : Heater</td>
                                        <td>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-danger active">
                                                    <input type="radio" name="heater" value="OFF" id=""
                                                           autocomplete="off"
                                                           checked="true">OFF
                                                </label>
                                                <label class="btn btn-success ">
                                                    <input type="radio" name="heater" value="ON" id=""
                                                           autocomplete="off">ON
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--<div class="col-4">
                                <span>Status</span>

                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <!--Second Card - Super User -->
            <div class="card mt-5 border-danger mb-5  bg-light">
                <div class="card-header bg-danger text-white">
                    <h5><i class="fa fa-user-secret"></i> Super User </h5>
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
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-danger active">
                                        <input type="radio" name="alarmsystem" value="OFF" id="" autocomplete="off"
                                               checked="true">OFF
                                    </label>
                                    <label class="btn btn-success ">
                                        <input type="radio" name="alarmsystem" value="ON" id="" autocomplete="off">ON
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Main Stream Power (Gas)</td>
                            <td>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-danger active">
                                        <input type="radio" name="mainstreamgas" value="OFF" id="" autocomplete="off"
                                               checked="true">OFF
                                    </label>
                                    <label class="btn btn-success ">
                                        <input type="radio" name="mainstreamgas" value="ON" id="" autocomplete="off">ON
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Main Stream Power (Light)</td>
                            <td>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-danger active">
                                        <input type="radio" name="mainstreamlight" value="OFF" id="" autocomplete="off"
                                               checked="true">OFF
                                    </label>
                                    <label class="btn btn-success ">
                                        <input type="radio" name="mainstreamlight" value="ON" id="" autocomplete="off">ON
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Main Stream Power (Current)</td>
                            <td>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-danger active">
                                        <input type="radio" name="mainstreamcurrent" value="OFF" id=""
                                               autocomplete="off"
                                               checked="true">OFF
                                    </label>
                                    <label class="btn btn-success ">
                                        <input type="radio" name="mainstreamcurrent" value="ON" id=""
                                               autocomplete="off">ON
                                    </label>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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