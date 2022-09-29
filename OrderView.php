<!doctype html>
<html>
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
	
</style>


</head>

<body>

<?php
	
	$con=mysqli_connect("localhost","root","demo","project");
	$msg="";
	
	if(!$con){
		$msg = "Error :" .mysqli_connect_error();
	} 
	
	?>

<?php
	
	require('sideNav.php');
	
?>

<br/><br/><br/>

<div class="container">

<?php
	
	$con = mysqli_connect("localhost", "root", "demo", "project");
	if(isset($_GET['update'])){
		$update_id = ($_GET['update']);
		
		$sql = "UPDATE cash_order SET Approval='Yes' WHERE order_id='$update_id' ";
		$run = mysqli_query($con,$sql);
		if($run === true){
			echo "Approved Order";
		}else{
			echo "Update Fail, Try again";
		}
	}
	
?>

	<div class="row justify-content-center"  align="center" class="mt-5">
	

<div  class="row justify-content-center" style="width: 1500px; padding-left: 150px;">

<?php
	
	$con = mysqli_connect("localhost", "root", "demo", "project");
	
	if(isset($_GET['delete'])){
		$id = ($_GET['delete']);
		$sql = "DELETE FROM cash_order WHERE order_id='$id' ";
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
				<th>Email</th>
				<th>ContactNo</th>
				<th>Address</th>
				<th>Total</th>
				<th>Approval</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			
			$con = mysqli_connect("localhost", "root", "demo", "project");
			$date = date('Y-m-d');
			$sql = "SELECT * FROM cash_order";
			
			$run = mysqli_query($con,$sql);
			while($row_item = mysqli_fetch_array($run)){
			  $id = $row_item['order_ID'];
			  $name = $row_item['name'];
			  $email = $row_item['email'];
			  $no = $row_item['contactno'];
			  $address = $row_item['address'];
			  $total= $row_item['total'];
			  $approval= $row_item['Approval'];
				
			
			?>
			
			<tr>
				<td><?php echo $id ; ?></td>
				<td><?php echo $name ; ?></td>
				<td><?php echo $email ; ?></td>
				<td><?php echo $no ; ?></td>
				<td><?php echo $address ; ?></td>
				<td><?php echo $total ; ?></td>
				<td><?php echo $approval ; ?></td>
				<td><a class="btn btn-success" href="OrderView.php?update=<?php echo $id ; ?>">Approved</a>
				<a class="btn btn-danger" href="OrderView.php?delete=<?php echo $id ; ?>">Remove</a></td>
			</tr>
			<?php } ?>
			
		</tbody>
	</table>
	</div>
	
	</div>
</div>
<?php
$con = mysqli_connect("localhost", "root", "demo", "project");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to Database: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM tbl_orderdetail ");

echo "<table class='center' border='1' width='400'>
<tr>
<th width='10%'>OrderD_ID</th>
<th width='10%'>Order_ID</th>
<th width='30%'>Product_Name</th>
<th width='30%'>Quantity</th>
<th width='25%'>SubTotal</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
    echo "<td>" . $row['OrderD_ID'] . "</td>";
	echo "<td>" . $row['Order_ID'] . "</td>";
    echo "<td>" . $row['Product_Name'] . "</td>";
	echo "<td>" . $row['Quantity'] . "</td>";
	echo "<td>" . $row['SubTotal'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>


</body>
</html>