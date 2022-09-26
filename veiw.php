<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ceciliyan Tea</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	
	
	
</style>

</head>

<body>

<?php
	
	$con=mysqli_connect("localhost","root","","project");
	$msg="";
	
	if(!$con){
		$msg = "Error :" .mysqli_connect_error();
	} 
	
?>
<?php
	
	require('sideNav.php');
	
?>
<div align="center" class="mt-5">
	<h1> View Customer Details</h1>
	<div class="row justify-content-center"  align="center" class="mt-5">
		<div class="row justify-content-center" style="width: 2600px; padding-left: 30px;">
			<table width="800" height="400"  >
				<thead>
					<tr class="table-info">
				       <th >ID</th>
				       <th>Name</th>
				       <th>Email</th>
				       <th>ContactNo</th>
				       
			        </tr>
				</thead>
				<tbody>
					<?php
					
					$sql = "SELECT * FROM user";
					
					$run = mysqli_query($con,$sql);
					while($row = mysqli_fetch_array($run)){
						$id = $row ['id'];
						$name = $row ['uname'];
						$email = $row ['email'];
						$no = $row ['contact'];
						
					
					?>
					
					<tr>
						<td><?php echo $id; ?></td>
						<td><?php echo $name; ?></td>
						<td><?php echo $email; ?></td>
						<td><?php echo $no; ?></td>
						
					</tr>
					
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

</body>
</html>