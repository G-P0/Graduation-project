<?php
session_start();
include_once 'includes/paths.php';
if (!isset($_SESSION['username'])) {
    header("Location:$rootpath/");
    die();
}
if (!isset($_SESSION['membersInfo']))
    header("Location:$rootpath/controllers/C_action.php?getPage=dashboard");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include_once "includes/html_header.php"; ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:400,500" rel="stylesheet">
</head>
<body>

<?php include_once "includes/dashnav.php" ?>

<!-- Start Dashboard -->
<div class="dashboard">
    <div class="container">
        <div class="row mt-5">
            <div class="col-3">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" href="#list-info" data-toggle="list"
                       id="list-info-list ">
                        Home Info
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-members" data-toggle="list"
                       id="list-members-list">
                        Members
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-privileges" data-toggle="list"
                       id="list-privileges-list">
                        Privileges
                    </a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-info" role="tabpanel">
                        <!-- Home -->

                        <!-- Home's Info -->
                        <div class="card-deck mb-5 text-center">
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <i class="fa fa-shopping-cart fa-3x"></i>
                                    <h4 class="card-title "> SHS Package</h4>
                                    <p class="card-text"> Full-package</p>
                                </div>
                            </div>
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <i class="fa fa-users fa-3x"></i>
                                    <h4 class="card-title">Home Members </h4>
                                    <p class="card-text"><?php echo count($_SESSION['membersInfo'])?></p>
                                </div>
                            </div>
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <i class="fa fa-gamepad  fa-3x"></i>
                                    <h4 class="card-title">Taken Actions</h4>
                                    <p class="card-text">160</p>
                                </div>
                            </div>
                            <div class="card bg-danger text-white">
                                <div class="card-body">
                                    <i class="fa fa-street-view  fa-3x"></i>
                                    <h4 class="card-title">panned members</h4>
                                    <p class="card-text">2</p>
                                </div>
                            </div>
                        </div>
                        <!-- Admin's Info -->
                        <div class="card">
                            <div class="card-header bg-secondary text-white">
                                <h6>Admin's Info</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th>
                                            <li class="fa fa-unlock fa-fw"></li>
                                            Username
                                        </th>
                                        <td>: <?php  echo $_SESSION['homeInfo']['username']?></td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <li class="fa fa-envelope fa-fw"></li>
                                            Email
                                        </th>
                                        <td>: <?php  echo $_SESSION['homeInfo']['email']?></td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <li class="fa fa-user fa-fw"></li>
                                            Full Name
                                        </th>
                                        <td>: <?php  echo $_SESSION['homeInfo']['name']?></td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <li class="fa fa-book fa-fw"></li>
                                            Registered Date
                                        </th>
                                        <td>: <?php  echo $_SESSION['homeInfo']['register_date']?></td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <li class="fa fa-map-marker fa-fw"></li>
                                            Home Address
                                        </th>
                                        <td>: <?php  echo $_SESSION['homeInfo']['address']?></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Security Section -->
                        <div class="card mt-5 mb-5">
                            <div class="card-header bg-secondary text-white">
                                <h6>Home Security Info</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th> Home Name</th>
                                        <td> <?php  echo $_SESSION['homeInfo']['home_name']?></td>
                                    </tr>
                                    <tr>
                                        <th> Super Key</th>
                                        <td><?php  echo $_SESSION['homeInfo']['super_key']?></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary"> Edit</a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th> Public Key</th>
                                        <td><?php  echo $_SESSION['homeInfo']['public_key']?></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary"> Edit</a>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-members" role="tabpanel">
                        <!-- Members -->
                        <div class="card">
                            <div class="card-header card-dark">
                                <h5><i class="fa fa-table "></i> Family Members Table</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-dark table-hover">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>MemberName</th>
                                        <th>RegDate</th>
                                        <th>Privilege</th>
                                        <th>Edit</th>
                                        <th>State</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   <?php foreach ($_SESSION['membersInfo'] as $no => $val):?>

                                       <tr>
                                           <th scope="row"><?php echo $no+1 ?></th>
                                           <td><?php echo $val['name']?></td>
                                           <td><?php echo $val['register_date']?></td>
                                           <td><?php
                                                switch ($val['privillage'])
                                                {
                                                    case 0:
                                                    echo "not active";
                                                    break;
                                                    case 1:
                                                    echo "normal user";
                                                    break;
                                                    case 2:
                                                    echo "super user";
                                                    break;
                                                    case 3:
                                                    echo "admin";
                                                    break;

                                                }
                                               ?></td>
                                           <td>
                                               <form action="<?php echo $rootpath;?>/controllers/C_actions.php" method="post">
                                                    <input type="submit" value="Edit" class="btn btn-primary btn-sm" name="toggle-privillage">
                                                    <input type="text" hidden name="username" value="<?php echo $val['username']?>">
                                                    <input type="text" hidden name="privillage" value="<?php echo $val['privillage']?>">
                                                </form>
                                               </a>
                                           </td>
                                           <td><?php
                                                switch ($val['user_state'])
                                                {
                                                    case 0:
                                                    echo "not active";
                                                    break;
                                                    case 1:
                                                    echo "active";
                                                    break;
                                                }
                                               ?></td>
                                           <td>
                                                <form action="<?php echo $rootpath;?>/controllers/C_actions.php" method="post">
                                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm" name="delete-member">
                                                    <input type="text" hidden name="username" value="<?php echo $val['username']?>">
                                                </form>
                                           </td>
                                       </tr>

                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                                <div>
                                    <!-- Modal Launcher -->
                                    <a href="#" class="btn btn-success btn-lg btn-block " data-toggle="modal"
                                       data-target="#addmembermodal">
                                        <i class="fa fa-user-plus"></i> Add new member
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer">
                                Last Update - 2 days ago
                            </div>
                        </div>


                    </div>
                    <!-- Add new member Modal -->
                    <div class="modal" tabindex="-1" role="dialog" id="addmembermodal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <!-- Modal header -->
                                <div class="modal-header">
                                    <h5 class="modal-title">Add new Member</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                <form action="<?php echo $rootpath;?>/controllers/C_actions.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" name="memberName" class="form-control" placeholder="Type The Member's UserName">
                                    </div>
                                    <div class="form-group">
                                            <input type="text" name="superKey" class="form-control" placeholder="Type The Super Key">
                                    </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button class="btn btn-success" name="submit" value="addMember">Add</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-privileges" role="tabpanel">

                        <!-- Privileges -->
                        <form action="<?php echo $rootpath;?>/controllers/C_actions.php" method="post" enctype="multipart/form-data">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5><i class="fa fa-user-secret"></i> Set User Privileges</h5>
                                </div>

                                <div class="card-body">
                                    <table class="table table-ligth">
                                        <thead class="table-dark">
                                        <tr>
                                            <th>Action</th>
                                            <th>SuperUser</th>
                                            <th>User</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if (isset($_SESSION['actionsPriv'])) {
                                            foreach ($_SESSION['actionsPriv'] as $action => $privillage) {
                                                echo "<tr>
														    <td>$action</td>
															<td><input type='radio' name='$action' value='2'";
                                                if ($privillage == 2)
                                                    //this action related to superuser
                                                    echo "checked = 'checked'";
                                                echo "	onchange='this.form.submit();'></td>
															<td><input type='radio' name='$action' value='1'";
                                                if ($privillage == 1)
                                                    //this action related to normal user
                                                    echo "checked = 'checked'";
                                                echo "	onchange='this.form.submit();'></td>
																	 ";
                                            }

                                        }
                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    Last Update - 5 Days ago
                                </div>
                            </div>
                            <button class="btn btn-success" name="submit" value="Update Privllage">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dashboard -->


<!--Required Scripting Libraries -->
<!-- <script src="script/smooth-scroll.min.js"></script> -->
<?php include_once "includes/html_footer.php" ?>


</body>
</html>
