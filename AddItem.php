<?php

$conn=mysqli_connect("localhost","root","","project");
	$msg="";
	
	$query = "SELECT * FROM product";
    //session_unset();
	//session_destroy();
	if(!$conn){
		$msg = "Error :" .mysqli_connect_error();
	}

if(isset($_POST['submit'])){
	$name = $_POST['pName'];
	$category = $_POST['pCategory'];
	$prices = $_POST['pPrice'];
	$quantity = $_POST['pQuantity'];
	
	$target_dir = "image/";
	$target_file = $target_dir.basename($_FILES['pImage']["name"]);
	move_uploaded_file($_FILES['pImage']["tmp_name"], $target_file);
	
	$sql = "INSERT INTO product (Name,Category,Prices,Quantity,Image) VALUES ('$name' , '$category' , '$prices' , '$quantity' , '$target_file')";
	
	if(mysqli_query($conn,$sql)){
		$msg = "Add Successfully";
	}else{
		$msg = "Failed";
	}
}

?>


<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
<title>Ceciliyan Tea</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

<?php
	
	require 'SideNav.php';
	
?>
<br/><br/><br/>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-11 bg-light mt-7 rounded">
			<h2 style="text-transform: uppercase;"><b>Add Product Information</b></h2><br/>
			<form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
				<div class="form-group">
					<input type="text" name="pName" class="form-control" placeholder="Product Name" required>
				</div>
				<div class="form-group">
					<input type="text" name="pCategory" class="form-control" placeholder="Product Category" required>
				</div>
				<div class="form-group">
					<input type="text" name="pPrice" class="form-control" placeholder="Price" required>
				</div>
				<div class="form-group">
					<input type="text" name="pQuantity" class="form-control" placeholder="P Quantity" required>
				</div>
				<div class="form-group">
					<div class="custom-file">
						<input type="file" name="pImage" class="custom-file-input" id="customFile" required>
						<label for="customFile" class="custom-file-label">Choose</label>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-danger btn-block" value="Add" style="font-size: 19px;">
				</div>
				<div class="form-group">
					<h4 class="text-center"><?= $msg; ?></h4>
				</div>
			</form>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-11 mt-3 p-4 bg-light rounded">
			<a href="ItemHandle.php" class="btn btn-warning btn-block btn-lg">View Product</a>
		</div>
	</div>
</div>

</body>
</html>