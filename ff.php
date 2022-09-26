<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<link rel="stylesheet" href="index.css">
<title>Ceciliyan Tea</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
	
h1{
  text-align: center;
  text-transform: uppercase;
  font-size: 45px;
}
input[type=text]{
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 4px;	
}
	
body {
  font-family: "Times New Roman", Times, serif;
}
.header{
	height:50vh;
	width:100%;
	background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url("pics/PicsArt_05-05-08.44.22.jpg");
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
.nav-links{
	flex: 1;
	text-align: right;
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
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}

	
	
</style>

</head>

<body>

<?php
	
	$con=mysqli_connect("localhost","root","","project");
	$msg="";
	
	$query = "SELECT * FROM product";
	if(!$con){
		$msg = "Error :" .mysqli_connect_error();
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
		<h1>Our Products</h1>
	</div>
	</section>
<br/><br/>


<div class="container">
	<div class="row">
		<?php
		if(mysqli_num_rows($result)>0){
		   while($row = mysqli_fetch_array($result)){
		?>
		<div class="col-lg-4 mt-4  mb-4">
			<div class="card-deck">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="<?php echo $row['Image']; ?>" class="card-img-top" width="50" height="250">
								</div>
								<div class="flip-card-back">
									<h5>ID : &nbsp;&nbsp;<?php echo $row['ID']; ?></h5>
    		                        <h5 class="card-title">Product : &nbsp;&nbsp;<?php echo $row['Name']; ?></h5>
    		                        <h5>Price : &nbsp;&nbsp;<?php echo $row['Prices']; ?></h5>
    		                        <h5>Quantity :<?php echo $row['Quantity']; ?>g</h5>
								</div>
							</div>
						</div>
					</form>
			</div>
		</div>
		<?php 
		   
		}
		}	
		?>
	</div>
</div>

<?php
	
	include('scroll.php');
	
?>
	
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
