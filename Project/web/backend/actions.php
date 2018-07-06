<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>user privillage</title>
</head>
<style>
    table th, td {
        border: 1px #000 solid;
        padding: 10px;
        border-collapse: collapse;
        width: 400px;
        font-size: 18px;
    }

    table th {
        background-color: #70ad47;
        color: #fff
    }

    table td {
        background-color: #c6e0b4;
        text-align: center;
    }

    input[type="submit"] {
        padding: 7px;
        text-align: center;
        border-radius: 5px;
        width: 150px;
        border: 1px solid #bbc1b7;
        background: #d7dad7;
    }
</style>
<body>
<form action="controllers/C_actions.php" method="post" enctype="multipart/form-data">
    <input type="submit" class="btn btn-success btn-lg" name="submit" value="Show Actions Privilege">
    <input type="submit" name="submit" value="Update Privllage">
    <br><br>
    <table>
        <?php
        if (isset($_SESSION['actionsPriv'])) {
            echo "<thead>
								<tr>
									<th>Action</th>
									<th>Super user</th>
									<th>Normal user</th>
								</tr>
							</thead>";
            foreach ($_SESSION['actionsPriv'] as $action => $privillage) {

                echo "<tr>
									<td>$action</td>
									<td><input type='radio' name='$action' value='2'";
                if ($privillage == 2)
                    //this action related to superuser
                    echo "checked = 'checked'";
                echo "	></td>
									<td><input type='radio' name='$action' value='1'";
                if ($privillage == 1)
                    //this action related to normal user
                    echo "checked = 'checked'";
                echo "	></td>
								</tr> ";
            }

            unset($_SESSION['actionsPriv']);
        }
        ?>
    </table>
    -->
</form>
</body>
</html>
