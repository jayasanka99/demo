<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ceciliyan Tea</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<link rel="stylesheet" href="index.css">
<style>
body{
	margin: 0 auto;
	background-repeat: no-repeat;
	background-size: 100% 720px;
	font-family: Arial, Helvetica, sans-serif;
}
	
h1{
	color: black;
	font-size: 60px;
}
.header{
	height:50vh;
	width:100%;
	background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url("pics/joanna-kosinska-XA7qFZdrWv8-unsplash.jpg");
	background-position: center;
	background-size: cover;
	position: relative;
	
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
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=email]{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
	
input[type=number]{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
	
textarea[name=message]{
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
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

</style>

</head>

<body>


<?php
	
	$con=mysqli_connect("localhost","root","","project");
	$msg="";
	
	if(!$con){
		echo "Error :".mysqli_connect_error();
	}
	
	$fname="";
	$cname="";
	$email="";
	$contactno="";
	$delivery="";
	$quantity="";
	$item="";
	$total="";
	$comment="";
	
	$price="";
	$msg="";
	
	if(isset($_POST['btnSubmit'])){
		$fname = $_POST['fname'];
		$cname = $_POST['cname'];
		$email = $_POST['email'];
		$contactno = $_POST['no'];
		$delivery = $_POST['delivery'];
		$quantity = $_POST['qty'];
		
		$item = $_POST['item'];
		$total = $_POST['total'];
		$comment = $_POST['message'];
		
		$sql = "INSERT INTO  wholesale (Name,CompanyName,Email,ContactNo,Delivery,Quantity,Item,Total,Comment) VALUES ('$fname' , '$cname' , '$email' , '$contactno' , '$delivery' , '$quantity' , '$item' , '$total' , '$comment') ";
		
		if(mysqli_query($con,$sql)){
			$msg = "Submitted your Order";
		}else{
			$msg = "Not Inserted :". mysqli_error($con);
		}
	}
?>
<br/>
 
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
			
	
		</section>
 <br/>
<h3 style="padding-left: 250px;">Products</h3>
 <table class="table table-bordered" style="width: 1000px;">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Catagory</th>
				<th>Price</th>
				<th>Image</th>
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
			
			?>
			
			<tr>
				<td><?php echo $id ; ?></td>
				<td><?php echo $name ; ?></td>
				<td><?php echo $catagory ; ?></td>
				<td><?php echo $price ; ?></td>
				<td><img src="<?php echo $imageName ;?>" height="70px"></td>
			</tr>
			<?php } ?>
			
			
		</tbody>
	</table>
	
	<h2 style="text-transform: uppercase; font-size: 52px; text-align: center;"><b>Orders</b></h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
      
        <div class="row">
         
          <div class="col-50">
            <label>Full Name</label>
            <input type="text" name="fname" value="<?php echo $fname; ?>" required><br/>
            <label>Company Name</label>
            <input type="text" name="cname" value="<?php echo $cname; ?>" required><br/>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>" required><br/>
            <label>Contact No</label>
            <input type="text" name="no" value="<?php echo $contactno; ?>" required>
            <p>**Please type in with your Country code</p>
            <label>Port of Delivery / Country</label>
            <input type="text" name="delivery" value="<?php echo $delivery; ?>" required><br/>
            <label>Item Name</label>
            <input type="text" name="item" value="<?php echo $item; ?>" size="32" required><br/>
          </div>

          <div class="col-50">
            <label>Quantity</label>
            <input type="number" name="qty" id="qty" value="25" min="25" size="10" /><br>
            <label>Unit Price</label>
            <input type="number" name="price" id="price" value="" size="32" required><br>
            <label>Discount %</label>
            <input type="text" name="discount" id="discount" size="32" readonly value="10"><br>
            <label>Total</label>
            <input type="text" name="total" id="totalamount" size="32" readonly value="0.00"><br>
            <label>Add Your Message/ Comment</label>
            <textarea name="message" value="" placeholder="Comment or Message"></textarea><br>
            
            <input type="submit" name="btnSubmit" value="submit" class="btnSubmit" style="background-color: green; color: white; width: 160px; height: 50px;"/>
                        
           <p style="color: red;"><?php echo $msg; ?></p>
         
          </div>
         
        </div>
        
        
      </form>
    </div>
  </div>
  
</div>


<script>
	
	$("#qty").change(function(){
					 
			calTotal();
					 
	}
					 
	);
	
	$("#price").change(function(){
					 
			calTotal();
					 
	}
					 
	);
	
	$("#discount").change(function(){
					 
			calTotal();
					 
	}
					 
	);
	
	function calTotal(){
		if($("#qty").val() == ""){
			return false;
		}
		else if($("#price").val() == ""){
			return false;
		}
		else if($("#discount").val() == ""){
			return false;
		}
		else{
			var total = 0;
			
			total = (Number($("#qty").val()) * Number($("#price").val()) ) - (Number($("#qty").val()) * Number($("#price").val()) * Number($("#discount").val())/100 )
			
			//total = total1 - (Number($("#qty").val()) * Number($("#price").val()) * Number($("#discount").val())/100 )
			
			$("#totalamount").val(total.toFixed(2));
			
		}
	}
	
</script>
	
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
  	 			<h4>company</h4>
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
  	 		<div class="footer-col">
  	 			<h4>Contact Us</h4>
  	 		<p>Ceciliyan Tea Marketing & Exports Pvt Ltd.
            Ceciliyan Estate , Kalawana , Sri Lanka.<br><br>
            Tel : +94 45 2 255 486<br><br>
            Mobile : +94 717 238 026<br><br>
            WhatsApp : +94 718 801 863<br><br>
            Email : marketing@ceciliyantea.com</p>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Company</h4>
  	 			<p>World class support, delivery, and expert tea advice to grow your business.</p>
				<img src="Images/logo.png" width="100px">
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
			<div id="google_translate_element"></div>

   <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  	 	</div>
  	 </div>
  </footer>
</body>
</html>