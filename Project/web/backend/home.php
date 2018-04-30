<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Control</title>
	<style>
		table th,td
		{
			border: 1px #000 solid; 
			padding: 10px; 
			border-collapse: collapse; 
			width: 400px; 
			font-size:18px;
		}
		table th
		{
			background-color: #70ad47; 
			color: #fff
		}
		table td
		{
			background-color: #c6e0b4;
			text-align:center;
		}
		input[type="submit"] 
		{
			padding:7px; 
			text-align:center; 
			border-radius: 5px;
			width:150px;
			border: 1px solid #bbc1b7;
			background:#d7dad7;
		}
	</style>
</head>
<body>
	<form action="controllers/C_actions.php" method="post" enctype="multipart/form-data">
		<input type="submit" class="btn btn-success btn-lg" name="submit" value="Show Actions State">
		<input type="submit" name="submit" value="Update State">		
	<br><br>
		<table>
			<?php 
				if (isset($_SESSION['actionsState'])) 
				{
					echo 	"<thead>
								<tr>
									<th>Action</th>
									<th>State</th>
								</tr>
							</thead>";
	 				foreach ($_SESSION['actionsState'] as $action => $state) 
					{	
						echo 	"<tr>
										<td>$action</td>
										<td><input type='radio' name='$action' value='1'";
										if ($state == 1)
											echo " checked = 'checked'";
							echo 	"	>On
										<input type='radio' name='$action' value='0'";
										if ($state == 0)
											echo " checked = 'checked'";
							echo	"	>Off</td>
									</tr> ";
					}
 					unset($_SESSION['actionsState']);
 				}
			?>
		</table>	
	</form>
</body>
</html>

