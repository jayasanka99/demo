<?php session_start(); ?>
<?php
	$con=mysqli_connect("localhost","root","","project");
	$msg="";
	
	if(!$con){
		$msg = "Error :" .mysqli_connect_error();
	} 


    $name = "";
    $email = "";
    $no = "";
    $address = "";
    $payment = "";
    $total = "";
    $query = "";
    $msg = "";
    $input = ""; 

    if(isset($_POST['payment'])){
		$name = $_POST['txtName'];
		$email = $_POST['txtEmail'];
		$no = $_POST['txtPhone'];
		$address = $_POST['txtAddress'];
		$total = $_POST['txtTotal'];
		
		$target_dir = "image/";
	$target_file = $target_dir.basename($_FILES['pImage']["name"]);
	move_uploaded_file($_FILES['pImage']["tmp_name"], $target_file);
		
    $sql = "INSERT INTO banking_order (name,email,contactno,address,total,slip,Approval) VALUES ('$name' , '$email' , '$no' , '$address' , '$total' , '$target_file' , 'No' ) ";
		
		
		//$payment = sprintf("",$payment);
		
		if(mysqli_query($con,$sql)){
			$orderid = mysqli_insert_id($con);
			foreach($_SESSION['cart'] as $key => $values){
				
				$SubTotal = $values['qty']*$values['price'];
				
				$sql="INSERT INTO tbl_order (order_ID,Product_Name,Quantity,SubTotal) VALUES (".$orderid.", '".$values['name']."', ".$values['qty'].", ".$SubTotal." )";
				
				if(!mysqli_query($con,$sql)){
					//$msg = "Order Details Submitted Successfully";
					//echo "Error : " . mysqli_error($con);
				}
			}
			$msg = "Order Details Submitted Successfully";
			//echo "<p>Order Details Submitted Successfully</p>";
		}else{
			$msg = "Not Inserted :". mysqli_error($con);
		}
		
	}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ceciliyan Tea</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
	  
	  *{
		  font-family: "Times New Roman", Times, serif;
	  }
	  input[type=text1]{
           box-sizing: border-box;
           border: 2px solid white;
           border-radius: 4px;	
		   width: 50px;
      }
	  .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
		  font-size: 18px;
      }
	  .green{ 
		  background: #228B22; 
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
	  /* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
	
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

	
  </style>

  
</head>

<body>
  
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	<table width="400">
		<?php
		 if(isset($_SESSION['cart'])){
			 ?>
			 <tr>
			    <th width="10%">Name</th>
			    <th width="5%">Price</th>
			    <th width="5%">Quantity</th>
			    <th width="10%">Sub Total</th>
		     </tr>
		     <?php
			 $total = 0;
			 foreach($_SESSION['cart'] as $key => $values){
				 $subTotal = 0;
				 $subTotal = $values['price']*$values['qty'];
				 ?>
				 <tr>
				 	<td><?php echo $values['name'] ?></td>
				    <td><?php echo $values['price'] ?></td>
				    <td><?php echo $values['qty'] ?></td>
				    <td><?php echo $subTotal; ?> </td>
				 </tr>
				 <?php
				 $total = $total + $subTotal;
			 }
			 
			 
		 }
		
		?>
		
		<tr>
	             <td colspan="3" align="right">Total : &nbsp;</td>
	             <td colspan="2"><?php if(isset($total)) {echo $total; } ?></td>
              </tr>
              
		
	</table>
</form>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 style="color: blue; text-align: center; font-size: 30px;"><b>Complete your order!</b></h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <!--<h6 class="lead"><b>Product(s) : </b><?//= $allItems; ?></h6>-->
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          
          <!--<h5><b>Total Amount Payable : </b><?php //if(isset($total)) {echo $total; } ?>/-</h5>-->
        </div>
        <form action="" method="post" class="p-2" enctype="multipart/form-data">
        
        <!--<h5><b>Total Amount Payable : </b><input type="text1" name="txtTotal" value="<?php //echo $total; ?>">/-</h5>-->
         <h5><b>Total Amount Payable : </b><input type="text" name="txtTotal" style="border: none; width: 150px;" value="<?php echo $total; ?>"></h5>
          <!--<input type="hidden" name="products" value="<?php //echo $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?php //echo $grand_total; ?>">-->
          <div class="form-group">
            <input type="text" name="txtName" class="form-control" placeholder="Enter Name" value="<?php echo $name; ?>" required />
          </div>
          <div class="form-group">
            <input type="email" name="txtEmail" class="form-control" placeholder="Enter E-Mail" value="<?php echo $email; ?>" required />
          </div>
          <div class="form-group">
            <input type="tel" name="txtPhone" class="form-control" placeholder="Enter Phone" value="<?php echo $no; ?>" required />
          </div>
          <div class="form-group">
            <textarea name="txtAddress" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..." value="<?php echo $address; ?>" required></textarea>
          </div>
          
          <div class="form-group">
			 <div class="custom-file">
				  <input type="file" name="pImage" class="custom-file-input" id="customFile">
				  <label for="customFile" class="custom-file-label">Choose</label>
			 </div>
		  </div>
        
        <div class="form-group">
            <p style="color: red;"><?php echo $msg; ?></p>
          </div>
         
          
          
          <!--<label><input type="radio" name="colorRadio" value="green">  If you pay on banking, Please send your slip...</label>
			<div class="green box">Commercial Bank No : <strong> 0602102220201126 </strong></div>
           
          <br/>
          <div class="form-group">
				<div class="custom-file">
					<input type="file" name="pImage" class="custom-file-input" id="customFile">
					<label for="customFile" class="custom-file-label">Add your Slip</label>
				</div>
		  </div>-->
      
     
        
         <br/>
          <div class="form-group">
          	<button type="submit" name="payment" class="w3-btn w3-teal" style="font-size: 16px;" ><b>Pay On Cash</b></button>
          	
          </div>
          
          <p id="demo"></p>
          
          
          
          <!--<div class="form-group">
            <input type="submit" name="submit" value="Pay On Cash" class="btn btn-primary btn-block">
            <input type="submit" name="submit" value="On Banking" class="btn btn-primary btn-block">
          </div>-->
        </form>
      </div>
    </div>
  </div>
  



 <?php mysqli_close($con); ?>
</body>

</html>