<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Ceciliyan Tea</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
 <link rel="stylesheet" href="index.css">
<style>
body {
  font-family: "Times New Roman", Times, serif;
  margin: 0;
}
.header{
	height:50vh;
	width:100%;
	background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url("pics/vivek-kumar-JS_ohjocm00-unsplash.jpg");
	background-position: center;
	background-size: cover;
	position: relative;
	
}
label.logo{
  color: rgba(252,252,252,1.00);
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav{
	display: flex;
	padding: 2%, 6%;
	justify-content: space-between;
	align-items: center;
}
nav img{
	width: 50px;
}
.nav-links{
	flex: 1;
	text-align: right;
}
	
.nav-links ul li{
	list-style: none;
	display: inline-block;
	padding: 8px, 12px;
	position: relative;
}
.nav-links ul li a{
	color: #fff;
	text-decoration: none;
	font-size: 20px;
	padding: 25px;
}
.nav-links ul li::after{
	content: '';
	width: 0%;
	height: 2px;
	background: #f44336;
	display: block;
	margin: auto;
	transition: 0.5s;
	}
.nav-links ul li:hover::after{
	width: 100%;
}
	.text-box{
	width: 90%;
	color: #fff;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	text-align: center;
}
.text-box h1{
	font-size: 62px;
}
nav .fa{
	display: none;
}

@media(max-width:700px){
	.text-box h1{
		font-size: 20px;
	}
	.text-box p{
		font-size: 12px;
	}
	.nav-links ul li{
		display: block;
	}
	.nav-links{
		position: absolute;
		background: #f44336;
		height: 100vh;
		width: 200px;
		top: 0;
		right: -200px;
		text-align: left;
		z-index: 2;
		transition: 1s;
	}
	nav .fa{
		display: block;
		color: #fff;
		margin: 10px;
		font-size: 22px;
		cursor: pointer;
	}
	.nav-links ul{
		padding: 30px;
	}
}

h1{
   text-align: center;
}
	
.icon-bar {
  position: fixed;
  top: 50%;
  
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: black;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: burlywood;
}
	
input[type=text]{
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 4px;	
}
button[type=submit]{
  width: 100%;		
}

</style>

</head>

<body>

<?php
	$con=mysqli_connect("localhost","root","demo","project");
	$msg="";
	
	$query = "SELECT * FROM product";
    //session_unset();
	//session_destroy();
	if(!$con){
		$msg = "Error :" .mysqli_connect_error();
	} 
	$count=0;
	
	if(isset($_POST['btnAdd'])){
		if(isset($_SESSION['cart'])){
			$proId = array_column($_SESSION['cart'],'id');
			if(!in_array($_POST['txtid'],$proId)){
				$count = count($_SESSION['cart']);
				$product_array=array('id' =>$_POST['txtid'],
								 'name'=>$_POST['txtname'],
								 'price'=>$_POST['txtprice'],
								 'qty'=>$_POST['txtQty']);
				$_SESSION['cart'][$count] = $product_array;
			}
		}else{
			$product_array=array('id' =>$_POST['txtid'],
								 'name'=>$_POST['txtname'],
								 'price'=>$_POST['txtprice'],
								 'qty'=>$_POST['txtQty']);
			$_SESSION['cart'][$count] = $product_array;
		}
	}
	
	
	
	if(isset($_GET['action'])){
		if($_GET['action']=="remove"){
			foreach($_SESSION['cart'] as $key => $values){
				if($values['id']==$_GET['id']){
					unset($_SESSION['cart'][$key]);
					
				}
			}
			$_SESSION['numberofItems']--;
		}
	}
	
	$result = mysqli_query($con,$query);
	
?>

<section class="header">
	<nav>
		
		<div class="nav-links" id="navLinks">
		<i class="fa fa-times" onClick="hideMenu()"></i>
			<ul>

				<li><a href="Home.php">Home</a></li>
				<li><a href="ff.php">Products</a></li>
				<li><a href="Cart.php">Orders</a></li>
				<li><a href="ordersWholesales.php">Wholesale</a></li>
				<li><a href="AboutUs.php">About</a></li>
				<li><a href="Cntact.php">Contact</a></li>
				<li><a href="uLogOut.php">LogOut</a></li>
			</ul>
		</div>
		<i class="fa fa-bars" onClick="showMenu()"></i>
	</nav>
	
	<div class="text-box">
		<h1>Orders</h1>
		
	</div>
	
</section>

<div class="icon-bar">
	<a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-instagram"></i></a> 
    <a href="#"><i class="fa fa-whatsapp"></i></a>
    <a href="#"><i class="fa fa-twitter-square"></i></a>
</div>

<!--<h2>Cart Details</h2>-->



<?php
	echo "<br>";
	require('search.php');
	
?>

<?php
	if(isset($_SESSION['numberofItems'])){
		$_SESSION['numberofItems']++;
	}else{
		$_SESSION['numberofItems'] = 0;
	}
	
	if(!isset($_SESSION['total'])){
		$_SESSION['total'] = 0;
	}
	
?>
<br/>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/> &nbsp; <?php if(isset($_SESSION['numberOfItems'])){echo "<span style=color:red;>" .$_SESSION['numberOfItems']. "</span>"; } ?>
</svg> 
</button>

<div class="container">
	<div class="row">
		<?php
		if(mysqli_num_rows($result)>0){
		   while($row = mysqli_fetch_array($result)){
		?>
		<div class="col-lg-4 mt-4  mb-4">
			<div class="card-deck">
				<div class="card border-info p-2">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<img src="<?php echo $row['Image']; ?>" class="card-img-top" width="50" height="250">
					
					<h5>ID : &nbsp;&nbsp;<input type="text" name="txtid" value="<?php echo $row['ID']; ?>" size="5" readonly /></h5>
    		        <h5 class="card-title">Product : &nbsp;&nbsp;<input type="text" name="txtname" value="<?php echo $row['Name']; ?>" size="5" readonly /></h5>
    		        <h5>Category : &nbsp;&nbsp;<input type="text" name="txtcategory" value="<?php echo $row['Category']; ?>" size="5" readonly /></h5>
    		        <h5>Price : &nbsp;&nbsp;<input type="text" name="txtprice" value="<?php echo $row['Prices']; ?>" size="5" readonly /></h5>
					
					<!--<h4 class="card-title"><b>Product: <?php //echo $row['Name']; ?></b></h4>
					<h4>Price: <?php //echo number_format($row['Prices']); ?> /- </h4>
					<h4>Quantity: <?php //echo number_format($row['Quantity']); ?> g </h4>-->
					
					<h5>Quantity : &nbsp;&nbsp;<input type="number" name="txtQty" value="1" min="1" size="10" /><br></h5>
					<!--<input type="hidden" name="hidden_product" value="<?php //echo $row['Name']; ?>"> 
					<input type="hidden" name="hidden_price" value="<?php //echo number_format($row['Prices']); ?>"><br>-->
					
					<button type="submit" name="btnAdd" class="btn btn-danger"><b>Add to Cart</b><i class="fas fa fa-shopping-cart"></i></button> 
					
					</form>
					
					<!--<input type="submit" name="btnAdd" class="btn btn-danger" value="Add to Cart" size="25"/>-->
				</div>
			</div>
		</div>
		<?php 
		   
		}
		}	
		?>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLable" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLable">Modal Title</h5>
				<button type="button" class="btnClose" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				
				<form action="Pay.php" method="post">  
				<table class="table table-bordered">
                     <tr>
			            <th width="10%">Name</th>
			            <th width="5%">Price</th>
			            <th width="5%">Quantity</th>
			            <th width="10%">Sub Total</th>
			            <th width="5%">Action</th>
		            </tr>
               <?php
	              if(isset($_SESSION['cart'])){
		       ?>
		
		       <?php
		       $total = 0;
		
		         foreach($_SESSION['cart'] as $key => $values){
			        $SubTotal = 0;
			        $SubTotal = $values['price']*$values['qty'];
			    ?>
			        <tr>
				      <td><?php echo $values['name'] ?></td>
				      <td><?php echo $values['price'] ?></td>
				      <td><?php echo $values['qty'] ?></td>
				      <td><?php echo $SubTotal; ?> </td>
				      <td><a href="Cart.php?action=remove&id=<?php echo $values['id']; ?>"  onclick="return confirm('Are you sure want to remove this item?');"><span class="text-danger">Remove</span></a></td>
				      
				      <!--<td><a href="Cart.php?action=remove&id=<?php //echo $values['id']; ?>"><span class="text-danger">Remove</span></a></td>-->
			        </tr>
			   <?php
			   $total = $total+$SubTotal;
					 $_SESSION['total'] = $total;
		          }
	          }
              ?>
              <tr>
	             <td colspan="3" align="right">Total : &nbsp;</td>
	             <td colspan="2"><?php if(isset($total)) {echo $total; } ?></td>
              </tr>

              </table>
              
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
				<button type="submit" name="btncheck" class="btn btn-primary">Check Out</button>
			</div>
			</form>
			
			<form action="Deposit.php" method="post" style="text-align: center;">
	    <div class="modal-footer">
		     <button type="submit" name="btncheck" class="btn">Check Out with Payment</button>
	    </div>
    </form>
			
		</div>
	</div>
</div>
	</body>
<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
					<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "358927080853776", // Facebook page ID
            facebook_color: "#A8CE50", // Facebook button color
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>	
	
 	<div class="footer-col">
  	 			<h4>Company</h4>
  	 			<p >World class support, delivery, and expert tea advice to grow your business. </p>
				
  	 		</div>
  </footer>



</html>
