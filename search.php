<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Search</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<style> 
	*{
		font-family: "Times New Roman", Times, serif;
	}
input[type=textbox] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=textbox]:focus {
  width: 50%;
}
	
input[type=submit]{
  background-color: #f44336;
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



<form method="post" style="text-align: center;">
	<input type="textbox" name="search" required>
	<input type="submit" name="submit">
</form>

<?php
	
	$con=mysqli_connect("localhost","root","","project");
	$msg="";
	
	if(!$con){
		$msg = "Error :" .mysqli_connect_error();
	}
	
	if(isset($_POST['submit'])){
		$search = $_POST['search'];
		$sql = "SELECT * FROM product WHERE Name like '%$search%' " ;
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_row($result);
			require('ss.php');
		}else{
			echo "Record Not Founded";
		}
	}
	//$result = mysqli_query($con,$sql);
?>



<?php mysqli_close($con); ?>

</body>
</html>