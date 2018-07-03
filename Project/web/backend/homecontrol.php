<?php
session_start();
include_once 'includes/paths.php';
if (!isset($_SESSION['username'])) {
    header("Location:$rootpath/");
    die();
}


if (!isset($_SESSION['actionsState']['super_user'])&&!isset($_SESSION['actionsState']['normal_user']))
{
      header("Location:$rootpath/controllers/C_actions.php?getPage=homecontrol");
}
    ?>
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
                                <?php
                                if (isset($_SESSION['actionsState']['normal_user']['main_gate']) || isset($_SESSION['actionsState']['super_user']['main_gate'])):
                                    ?>
                                    <tr>
                                        <td>main_gate</td>
                                        <td>
                                            <!-- Button Group of radio buttons -->
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-danger active">
                                                    <input type="radio" name="main_gate" value="0" id="option1"
                                                           autocomplete="off" mr-5
                                                        <?php
                                                        if (isset($_SESSION['actionsState']['super_user']['main_gate'])) {
                                                            if (!$_SESSION['actionsState']['super_user']['main_gate'])
                                                                echo "checked='true'";
                                                        } else if (isset($_SESSION['actionsState']['normal_user']['main_gate'])) {
                                                            if (!$_SESSION['actionsState']['normal_user']['main_gate'])
                                                                echo "checked='true'";
                                                        }

                                                        ?>
                                                    >OFF
                                                </label>

                                                <label class="btn btn-success ">
                                                    <input type="radio" name="main_gate" value="1" id="option2"
                                                           autocomplete="off"
                                                        <?php
                                                        if (isset($_SESSION['actionsState']['super_user']['main_gate'])) {
                                                            if ($_SESSION['actionsState']['super_user']['main_gate'])
                                                                echo "checked='true'";
                                                        } else if (isset($_SESSION['actionsState']['normal_user']['main_gate'])) {
                                                            if ($_SESSION['actionsState']['normal_user']['main_gate'])
                                                                echo "checked='true'";
                                                        }

                                                        ?>
                                                    >ON
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php
                                if (isset($_SESSION['actionsState']['normal_user']['pool_cover'])):?>


                                    <tr>
                                        <td>Pool Cover</td>
                                        <td>
                                            <!-- Button Group of radio buttons -->
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-danger active">
                                                    <input type="radio" name="pool_cover" value="0" id="option1"
                                                           autocomplete="off" mr-5
                                                        <?php if (!$_SESSION['actionsState']['normal_user']['pool_cover'])
                                                            echo "checked='true'";
                                                        ?>
                                                    >OFF
                                                </label>

                                                <label class="btn btn-success ">
                                                    <input type="radio" name="pool_cover" value="1" id="option2"
                                                           autocomplete="off"
                                                        <?php if ($_SESSION['actionsState']['normal_user']['pool_cover'])
                                                            echo "checked='true'";
                                                        ?>
                                                    >ON
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Indoors -->
                    <?php
                    if (isset($_SESSION['actionsState']['normal_user'])):
                        ?>
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
                                        <?php
                                        foreach ($_SESSION['actionsState']['normal_user'] as $action => $value):
                                            if ($action == "main_gate")
                                                continue;
                                            ?>
                                            <tr>
                                                <td><?php echo $action ?></td>
                                                <td>
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-danger active">
                                                            <input type="radio" name="<?php echo $action ?>" value="0"
                                                                   id=""
                                                                   autocomplete="off"
                                                                <?php if (!$_SESSION['actionsState']['normal_user'][$action])
                                                                    echo "checked='true'"
                                                                ?>
                                                            >OFF
                                                        </label>
                                                        <label class="btn btn-success ">
                                                            <input type="radio" name="<?php echo $action ?>" value="1"
                                                                   id=""
                                                                   autocomplete="off"
                                                                <?php if ($_SESSION['actionsState']['normal_user'][$action])
                                                                    echo "checked='true'"
                                                                ?>
                                                            >ON
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                        endforeach;
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!--Second Card - Super User -->
            <?php if (isset($_SESSION['actionsState']['super_user'])): ?>
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

                            <?php
                            foreach ($_SESSION['actionsState']['super_user'] as $action => $value):
                                if ($action == "main_gate")
                                    continue;
                                ?>
                                <tr>
                                    <td><?php echo $action ?></td>
                                    <td>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-danger active">
                                                <input type="radio" name="<?php echo $action ?>" value="0" id=""
                                                       autocomplete="off"
                                                    <?php if (!$_SESSION['actionsState']['super_user'][$action])
                                                        echo "checked='true'"
                                                    ?>
                                                >OFF
                                            </label>
                                            <label class="btn btn-success ">
                                                <input type="radio" name="<?php echo $action ?>" value="1" id=""
                                                       autocomplete="off"
                                                    <?php if ($_SESSION['actionsState']['super_user'][$action])
                                                        echo "checked='true'"
                                                    ?>
                                                >ON
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endif;
            unset($_SESSION['actionsState']);
            ?>
            <div class="card mt-4 bg-light">
                <div class="card-body">
                    <div class="text-center">
                        <input class="btn btn-warning text-center text-light" type="submit" name="submit" value="Update State">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Home Control -->


<?php include_once 'includes/html_footer.php';?>
</body>
</html>