<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Ceciliyan Tea</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<style>
	
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 19px;
}
	
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #84CDD9;
}

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 3px solid #8DE3CC; 
    border-radius: 5px;
}
	
</style>

</head>

<body>

<?php
	
	$con=mysqli_connect("localhost","root","demo","project");
	$msg="";
	
	if(!$con){
		echo "Error :".mysqli_connect_error();
	}
	
	$id="";
	$name="";
	$category="";
	$price="";
	$msg="";
	
	if(isset($_POST['btnSubmit'])){
		$id = $_POST['txtID'];
		$name = $_POST['txtName'];
		$category = $_POST['txtCatagory'];
		$price = $_POST['txtPrice'];
		$sql = "UPDATE product SET Name='".$name."' ,Category='".$category."' , Prices=".$price." WHERE id=".$id." ";
		if(mysqli_query($con,$sql)){
			echo "Item Record Updated";
			//$msg = "Item Record Updated";
		}else{
			$msg = "Error :". mysqli_error($con);
		}
		
	}
	
	if(isset($_POST['btnSearch'])){
		$id = $_POST['txtID'];
		$name = $_POST['txtName'];
		$category = $_POST['txtCatagory'];
		$price = $_POST['txtPrice'];
		$sql = "SELECT * FROM product WHERE id=".$id ;
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_row($result);
			$name = $row[1];
			$category = $row[2];
			$price = $row[3];
		}else{
			$msg = "Record Not Founded";
		}
	}
	
?>



<div align="center" class="mt-5">
<h1>Update Items</h1>


<?php
	
	$con = mysqli_connect("localhost", "root", "demo", "project");
	if(isset($_GET['update'])){
		$update_id = ($_GET['update']);
		
		$sql = "SELECT * FROM product WHERE id='$update_id' ";
			
		$run = mysqli_query($con,$sql);
		$row_item = mysqli_fetch_array($run);
		    $id = $row_item['ID'];
			$name = $row_item['Name'];
			$category = $row_item['Category'];
			$price = $row_item['Prices'];
		
		
	}
	
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
	<table>
	    <tr>
			<td>Item ID</td>
			<td><input type="text" name="txtID" value="<?php echo $id; ?>" size="25"/></td>
		</tr>
		<tr>
			<td>Item Name</td>
			<td><input type="text" name="txtName" value="<?php echo $name; ?>" size="25"/></td>
		</tr>
		<tr>
			<td>Item Catagory</td>
			<td><input type="text" name="txtCatagory" value="<?php echo $category; ?>" size="25"/></td>
		</tr>
		<tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="txtPrice" value="<?php echo $price; ?>" size="25"/></td>
		</tr>
		
	</table>
	
	    <tr>
			<td><input type="submit" name="btnSubmit" value="Submit" class="btn btn-primary"/>
			    <input type="submit" name="btnSearch" value="Search" class="btn btn-primary"/></td></td>
		</tr>
		
		<tr>
			<td colspan="2">
				<p style="color: red;"><?php echo $msg; ?></p>
			</td>
		</tr>
</form>



<a class="btn btn-primary" href="ItemHandle.php">View Items</a>
	
</div>


</body>
</html>