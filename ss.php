<?php

//session_start();
$con=mysqli_connect("localhost","root","demo","project");
$msg="";
	
//$query = "SELECT * FROM product";
if(!$con){
	$msg = "Error :" .mysqli_connect_error();
}
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM product WHERE id = '$id' ";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	
	$id = $row['ID'];
	$name = $row['Name'];
	$category = $row['Category'];
	$prices = $row['Prices'];
	$quantity = $row['Quantity'];
	$image = $row['Image'];
}

?>


<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<style>
	
	*{
		font-family: "Times New Roman", Times, serif;
	}
	
h2{
  color: red;
}
	
input[type=text]{
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 4px;	
}

input[type=submit]{
  background-color:#12B048;
  border: none;
  color: white;
  padding: 10px 26px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
	
</style>

</head>

<body>


<?php
	
	if(isset($_POST["btnAdd"])){
		if(isset($_SESSION["shopping_cart"])){
			$item_array_id = array_column($_SESSION["shopping_cart"], "id");
			if(!in_array($_POST["hidden_id"],$item_array_id)){
				$count = count($_SESSION["shopping_cart"]);
				$item_array = array('id' => $_POST["hidden_id"],
								    'name' => $_POST["hidden_name"],
									'category' => $_POST["hidden_category"],
								    'price' => $_POST["hidden_price"],
								    'qty' => $_POST["txtQty"]);
				$_SESSION["shopping_cart"][$count] = $item_array;
			}else{
				
			}
		}else{
			$item_array = array('id' => $_POST["hidden_id"],
								'name' => $_POST["hidden_name"],
								'category' => $_POST["hidden_category"],
								'price' => $_POST["hidden_price"],
								'qty' => $_POST["txtQty"]);
			$_SESSION["shopping_cart"][0] =$item_array;
		}
	}
	
?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10 mb-5">
			<h2><b>Item Details :</b></h2>
			<table class="table table-bordered" width="300px">
			    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			    <tr class="table-secondary">
			    	<th>ID</th>
			    	<td><input type="text" name="txtid" value="<?php echo $row[0]; ?>"></td>
			    	<td rowspan="4" class="text-center"><img src="<?php echo $row[5]; ?>" width="200" height="200px"></td>
			    </tr>
			    <tr class="table-light">
			    	<th>Product Name</th>
			    	<td><input type="text" name="txtname" value="<?php echo $row[1]; ?>"></td>
			    </tr>
			    <tr class="table-secondary">
			    	<th>Product Category</th>
			    	<td><input type="text" name="txtcategory" value="<?php echo $row[2]; ?>"></td>
			    </tr>
			    <tr class="class="table-light"">
			    	<th>Prices</th>
			    	<td><input type="text" name="txtprice" value="<?php echo $row[3]; ?>"></td>
			    </tr>
			    <tr class="table-secondary">
			    	<th>Quantity</th>
			    	<td><input type="text" name="txtquantity" value="<?php echo $row[4]; ?>"></td>
			    </tr>
			    <tr class="class="table-light"">
			    	<th >No of Items</th>
			    	<td><input type="number" name="txtQty" value="1" min="1" size="10" /></td>
			    </tr>
			    
			    <!--<tr>
					<th>ID</th>
					<td><?php //echo $row[0]; ?></td>
					<td rowspan="4" class="text-center"><img src="<?php //echo $row[4]; ?>" width="200" height="200px"></td>
				</tr>
				<tr>
					<th>Product Name</th>
					<td><?php //echo $row[1]; ?></td>
					
				</tr>
				<tr>
					<th>Prices</th>
					<td><?php //echo $row[2]; ?>/-</td>
				</tr>
				<tr>
					<th>Quantity</th>
					<td><?php //echo $row[3]; ?>g</td>
				</tr>
				<tr>
			    	<th>No of Items</th>
			    	<td><input type="number" name="txtQty" value="1" min="1" size="10" /></td>
			    </tr>
				
				<input type="hidden" name="hidden_id" value="<?php //echo $row[0]; ?>">
				<input type="hidden" name="hidden_name" value="<?php //echo $row[1]; ?>">
				<input type="hidden" name="hidden_price" value="<?php //echo $row[2]; ?>">
				</form>
				
			
			</table>-->
			<!--<input type="submit" name="btnAdd" class="btn btn-danger" value="Order Now">-->
			<input type="submit" name="btnAdd" value="Order Now"><br/>
			
			<!--<div class="form-group">
				<button type="submit" name="submit" class="btn btn-danger">Order Now<i class="fas fa fa-shopping-cart"></i></button>
				<input type="submit" name="submit" class="btn btn-danger btn-lg" value="Order Now">
			</div>-->
			
			
		</div>
	</div>
</div>


<table>
	<?php
	
	if(isset($_SESSION["shopping_cart"])){
		?>
		<tr>
			            <th width="10%">Name</th>
			            <th width="5%">Price</th>
			            <th width="5%">Quantity</th>
			            <th width="10%">Sub Total</th>
			            <th width="5%">Action</th>
		</tr>
		<?php
		$total = 0;
		foreach($_SESSION["shopping_cart"] as $key =>$values){
			$subTotal = 0;
			$subTotal = $values['price']*$values['qty'];
			?>
			<tr>
				<td><?php echo $values['name']; ?></td>
				<td><?php echo $values['price']; ?></td>
				<td><?php echo $values['qty']; ?></td>
				<td><?php echo $values['price']*$values['qty']; ?></td>
				<td><a href="file:///C|/Users/charu/Desktop/siripa and nuwara/Finals/Cart.php?action=remove&id=<?php echo $values['id']; ?>"><span class="text-danger">Remove</span></a></td>
			</tr>
			<?php
			$total = $total+$subTotal;
		}
	}
	
	?>
	
	<tr>
		<td colspan="2"><?php if(isset($total)) {echo $total; } ?></td>
	</tr>
	
</table>




</body>
</html>