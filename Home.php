<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS/Home.css"> 
 <link rel="stylesheet" href="index.css">
<title>Ceciliyan Tea</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>

<body>

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
		<h1>Ceciliyan Tea Factory</h1>
		<p>Freshest and purest blends of authentic Ceylon Black tea, handpicked from the lowland rainforest hills.</p>
		<a href="" class="hero-btn">Visit Us To know More</a>
	</div>
	
</section>

<section class="product">
	<h1>Our Products</h1>
	<p style="font-size: 18px;">Production of Ceylon tea has been a passion in Sri Lanka for more than 150 years. World-wide consumption increased exponentially during this period.</p>
	
	<div class="row">
		<div class="product-col">
			<h3>Tea</h3>
			<p>Ceciliyan is known to be the best tea in the world. It is one of the most sought after Ceylon tea brands, both locally and globally.</p>
		</div>
		<div class="product-col">
			<h3>Cinnamon</h3>
			<p>Pure Cinnamon is currently developing its range of products. There will naturally be a focus on products featuring genuine Sri Lankan Cinnamon but other products will also be carried that complement our Cinnamon range. Cinnamon Chocolate will be the flagship flavour of our chocolate range. There will be a further full range of exotic spiced chocolate flavours available.</p>
		</div>
		<div class="product-col">
			<h3>Rubber</h3>
			<p>Natural rubber is produced by the rubber tree (Hevea brasiliensis). In order to collect the latex milk from tree, an incision is made in the bark of the rubber tree – which is called ‘tapping’. Depending on the use, following the tapping stage the latex milk is processed in different ways.</p>
		</div>
	</div>
	
</section>

<section class="factory">
	<h1>Our Products</h1>
	<p>Learn more about our production and tea range.</p>
	
	<div class="row">
		<div class="factory-col">
			<img src="Images/achive.jpg">
			<div class="layer">
				<h3>Tea <br><br> Tea is high in potassium and is low in sodium, making it a safe and beneficial beverage for everyone.</h3>
			</div>
		</div>
		<div class="factory-col">
			<img src="Images/cinnomon.jpg">
			<div class="layer">
				<h3>Cinnamon <br><br> Cinnamon is one of the ancient spices in the world.</h3>
			</div>
		</div>
		<div class="factory-col">
			<img src="Images/rubber.jpg">
			<div class="layer">
				<h3>Rubber <br><br>Almost 30 acres in extent, our natural rubber plantation benefits from the prevalent unique climate and soil conditions.</h3>
			</div>
		</div>
	</div>
	
</section>


<section class="merchandise">
	<h1 style="color: limegreen;">Our Tea Merchandise</h1>
	<p style="font-size: 20px;">We offer you more than 30 types of the finest quality Ceylon tea, perfected over 70 years.</p>
	
	<div class="row">
		<div class="merchandise-col">
			<img src="Images/Orthodox.PNG">
			<h3>Orthodox</h3>
			<p style="font-size: 18px;">Orthodox tea is commonly labeled as ‘rolled tea’. Ceciliyan’s Orthodox tea is ‘loose leaf tea’ produced by traditional methods, involving the plucking, withering, rolling, oxidation plus fermentation and drying processes, in that order. In Orthodox tea manufacture, our tea professionals extract the best of flavours from carefully plucked leaves, by skillfully regulating the production processes.</p>
		</div>
		<div class="merchandise-col">
			<img src="Images/CTC.PNG">
			<h3>CTC</h3>
			<p style="font-size: 18px;">CTC tea stands for Crush, Tear and Curl tea. It is the product of processing tea leaves by passing them through machinery, the end products being small, standard sized granules.
            CTC tea comprises of various grades, each grade maintaining a strong consistent slightly toasty flavour and dark liquor throughout.

            The production of CTC teas, results in uniform small leaf sizes. It is convenient for packing into tea bags which enables quicker infusion time for the consumer, thus alluding to life on the fast track. So, CTC tea is evermore oriented towards modern fast-paced lifestyles.</p>
		</div>
	</div>
	
</section>

<section class="contact">
	<h1>THE GOODNESS OF CEYLON BLACK TEA</h1>
	<p>The goodness in Ceciliyan’s Ceylon Black teas is reflected in their strong, rich flavor with a bright reddish hue, that has been warmly embraced by tea lovers around the world.</p>
	<a href="Cntact.php" class="hero-btn">Contact Us</a>
</section>



<?php
	
	include('scroll.php');
	
?>	


<script>
	
	var navLinks = document.getElementById("navLinks");
	
	function showMenu(){
		navLinks.style.right = "0";
	}
	
	function hideMenu(){
		navLinks.style.right = "-200px";
	}
	
</script>


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
               <li><a href="">Home</a></li>
				<li><a href="">Products</a></li>
				<li><a href="">Orders</a></li>
				<li><a href="">Wholesale</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">LogOut</a></li>
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