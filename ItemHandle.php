<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Ceciliyan Tea</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<style>
	
*{
  font-family: "Times New Roman", Times, serif;
}
	
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: center;
	padding-left: 1500px;
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

h2{
	text-transform: uppercase;
}

	
</style>

</head>

<body>

<?php
	
	require('sideNav.php');
	
?>
<br/>
<?php
	
	$con=mysqli_connect("localhost","root","","project");
	$msg="";
	
	if(!$con){
		echo "Error :".mysqli_connect_error();
	}
	
	/*$id="";
	$name="";
	$catagory="";
	$description="";
	$price="";
	$msg="";*/
	
?>
<br/><br/><br/>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-11 bg-light mt-7 rounded">
			<h2>&nbsp;&nbsp;<b>Products</b></h2>
			<a href="AddItem.php" style="color: black; font-size: 18px;">&nbsp;&nbsp;Add Product</a>
		</div>
	</div>
	<br/>
	<div class="row justify-content-center"  align="center" class="mt-5">
	
	<?php
	
	$con = mysqli_connect("localhost", "root", "", "project");
	if(isset($_GET['update'])){
		$update_id = ($_GET['update']);
		
		$sql = "SELECT * FROM product WHERE id='$update_id' ";
			
		$run = mysqli_query($con,$sql);
		$row_item = mysqli_fetch_array($run);
		    $id = $row_item['ID'];
			$name = $row_item['Name'];
			$catagory = $row_item['Category'];
			$price = $row_item['Prices'];
		
	}
	
?>
<br/>
<div  class="row justify-content-center" style="width: 1000px;">

<?php
	
	$con = mysqli_connect("localhost", "root", "", "project");
	if(isset($_GET['del'])){
		$del_id = ($_GET['del']);
		$sql = "DELETE FROM product WHERE id='$del_id' ";
		$run_del = mysqli_query($con,$sql);
		if($run_del === true){
			echo "Record Delete";
		}else{
			echo "Delete Fail, Try again";
		}
	}
	
?>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Catagory</th>
				<th>Price</th>
				<th>Image</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			
			$con = mysqli_connect("localhost", "root", "", "project");
			$sql = "SELECT * FROM product";
			
			$run = mysqli_query($con,$sql);
			while($row_item = mysqli_fetch_array($run)){
			  $id = $row_item['ID'];
			  $name = $row_item['Name'];
			  $catagory = $row_item['Category'];
			  $price = $row_item['Prices'];
			  $imageName = $row_item['Image'];
			  //$status= $row_item['Status'];
			
			?>
			
			<tr>
				<td><?php echo $id ; ?></td>
				<td><?php echo $name ; ?></td>
				<td><?php echo $catagory ; ?></td>
				<td><?php echo $price ; ?></td>
				<td><img src="<?php echo $imageName ;?>" height="70px"></td>
				<td><a class="btn btn-success" href="UpdateItems.php?update=<?php echo $id ; ?>"><i class="far fa-edit"></i>&nbsp;Update</a>
				<a class="btn btn-danger" href="ItemHandle.php?del=<?php echo $id ; ?>"><i class="fa fa-trash"></i>&nbsp;Delete</a></td>
			</tr>
			<?php } ?>
			
		</tbody>
	</table>
	</div>
	
	</div>
</div>


</body>
</html>