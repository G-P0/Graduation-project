<?php 
session_start();
if (isset($_SESSION['msg'])) {
 	echo $_SESSION['msg'];
 	unset($_SESSION['msg']);
 } 
?>
<!DOCTYPE html>
<html>
<head>
	<title>user privillage</title>
</head>
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
		width:100px;
		border: 1px solid #bbc1b7;
		background:#d7dad7;
	}
</style>
<body>
	<form action="controllers/C_actions.php" method="post" enctype="multipart/form-data">
		<input type="submit" class="btn btn-success btn-lg" name="submit" value="actionData">	
	</form>	
	<br><br>
	<table>
		<thead>
			<tr>
				<th>action</th>
				<th>super user</th>
				<th>user</th>
			</tr>
		</thead>
			<?php 
			?>
	</table>
</body>
</html>
