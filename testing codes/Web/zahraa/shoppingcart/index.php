
<?php 
session_start();
$connect= mysqli_connect("localhost","root","","shoppingcartdb");
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping cart"], "item_id");
		if (!in_array($_GET["id"], $item_array_id)) 
		{
			$count = count($_SESSION["shopping cart"]);
			$item_array = array
			(
				'item_id' => $_GET["id"] ,
				'item_name' => $_POST["hidden_name"] ,
				'item_price' => $_POST["hidden_price"],
				'item_quantity' => $_POST["quantity"] , 
			);
			$_SESSION["shopping cart"][$count] = $item_array;

		}
		else
		{
			echo '<script>alert("Item already added")</script>';
			echo '<script>window.location ="index.php"</script>';
		}

	}
	else
	{
		$item_array  = array(
			'item_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'item_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"] 
		);
		$_SESSION["shopping cart"][0] = $item_array;
	}
}
if (isset($_GET["action"])) 
{
	if ($_GET["action"] == "delete") {
		foreach ($_SESSION["shopping cart"] as $key => $value) {
			if ($value["item_id"] == $_GET["id"]) {
			 	unset($_SESSION["shopping cart"][$key]);
			 	echo '<script>alert("Item removed")</script>';
			 	echo '<script>window.location="index.php"</script>';
			 }  
		}
	}
}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>shopping cart</title>
		<script type="text/javascript" src="layout/js/jquery-1.12.4.min.js"></script>
		<link rel="stylesheet" type="text/css" href="layout/css/bootstrap.min.css">
		<script type="text/javascript" src="layout/js/bootstrap.min.js"></script>

	</head>
	<body>
		<div class="container" style="width:700px">
			<h3 align="center">Simple Shopping Cart Project</h3><br>
			<?php 
				$query = "SELECT * FROM products ORDER BY id ASC" ;
				$result = mysqli_query($connect,$query);
				if((mysqli_num_rows($result)) > 0) 
				{
						while($rows = mysqli_fetch_array($result))
						{
			?>
			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $rows["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
					<img src="<?php echo $rows["image"];?>" class = "image-responsive"><br>
					<h4 class="text-info"><?php echo $rows["name"];?></h4>
					<h4 class="text-danger"> $ <?php echo $rows["price"];?></h4>
					<input type="text" name="quantity" class="form-control" value="1">
					<input type="hidden" name="hidden_name" value="<?php echo $rows["name"]; ?>">
					<input type="hidden" name="hidden_price" value="<?php echo $rows["price"];?>">
					<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
					</div>
				</form>
			</div>
			<?php  
                     	}  
                }  
            ?>
            <br>
            <div style="clear:both"></div>
            <br>
            <h3>Order Details</h3>
            <div class="table-responsive">
            	<table class="table table-bordered">
            		<tr>
            			<th width="40%">Item Name</th>
            			<th width="10%">Quantity</th>
            			<th width="20%">Price</th>
            			<th width="15%">Total</th>
            			<th width="5%">Action</th>
            		</tr>
            		<?php
            			if (!empty($_SESSION["shopping cart"])) 
            			{
            				$total = 0;
            				foreach ($_SESSION["shopping cart"] as $key => $value) 
            				{		
            		?>
            		<tr>
            			<td><?php echo $value["item_name"]; ?></td>
            			<td><?php echo $value["item_quantity"]; ?></td>
            			<td>$<?php echo $value["item_price"]; ?></td>
            			<td>$<?php echo number_format($value["item_quantity"] * $value["item_price"],2); ?></td>
            			<td><a href="index.php?action=delete&id=<?php echo $value["item_id"];?>" ><span class="text-danger">Remove</span></a></td>
            		</tr>
            		<?php 
            				$total = $total + ($value["item_quantity"] * $value["item_price"]); 
            				}

            		?>	
            		<tr>
            			<td colspan="3" align="right">Total Price</td>
            			<td align="right">$<?php echo number_format($total,2);?></td>
            			<td></td>
            		</tr>
            		<?php 
            			}
            		?>
            	</table>
            </div> 
		</div>

	</body>
</html>