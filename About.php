<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	  <link rel="stylesheet" href="index.css">
<title>Ceciliyan Tea</title>

<style>
	
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: "abel";
	}
	body{
		min-height: 100vh;
		
		/*display: flex;
		align-items: center;
		justify-content: center;
		background-color: white;*/
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

	.section{
		background-color: #ddd;
	}
	
	.about h3 {
  font-weight: 400;
  font-size: 26px;
}
	
.about p:last-child {
  margin-bottom: 0;
}

	.image{
		float: right;
		width: 40%;
	}
	.image img{
		width: 100%;
		height: auto;
	}
	.cont{
		width: 80%;
		display: block;
		margin: auto;
		padding-top: 100px;
	}
	.content-section{
		float: left;
		width: 55%;
	}
	.image{
		float: right;
		width: 40%;
	}
	.image img{
		width: 100%;
		height: auto;
	}
	.content-section .title{
		text-transform: uppercase;
		font-size: 28px;
	}
	.content-section .content h3{
		margin-top: 20px;
		color: #5d5d5d;
		font-size: 21px;
	}
	.content-section .content p{
		margin-top: 10px;
		font-size: 18px;
		line-height: 1.5;
		text-align: justify;
	}
	@media screen and (max-width: 768px){
		.cont{
		    width: 80%;
		    display: block;
		    margin: auto;
		    padding-top: 50px;
	    }
		.content-section{
		    float: none;
		    width: 100%;
			display: block;
			margin: auto;
	    }
		.image{
		    float: none;
		    width: 100%;
	    }
		.image img{
			width: 100%;
			height: auto;
			display: block;
			margin: auto;
		}
		.content-section .title{
			text-align: center;
			font-size: 19px;
		}
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
	.image .hero-btn{
	    display: inline-block;
	    text-decoration: none;
	    color: black;
	    border: 1px solid #fff;
	    padding: 12px 34px;
	    font-size: 22px;
	    background: transparent;
	    position: relative;
	    cursor: pointer;
     }

    .image .hero-btn:hover{
	    border: 1px solid #f44336;
	    background: #44336;
	    transition: 1s;
     }
	
</style>

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
		<h1>About Us</h1>
	</div>
	</section>
	
	
	 <section class="about" data-aos="fade-up">
      <div class="container">
    
        <div class="row">
          <div class="col-lg-6">
            <img src="Images/factory.PNG" class="img-fluid" alt="">
			 <a href="AboutUs.php" class="hero-btn" style="display: inline-block; text-decoration: none; color: black; border: 1px solid #fff; padding: 12px 34px; font-size: 22px; background: transparent; position: relative; cursor: pointer;">Read More</a>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
			  <div class="content">
            <h1>Company Profile</h1>
            <p class="fst-italic">
             Production of Ceylon tea has been a passion in Sri Lanka for more than 150 years. World-wide consumption increased exponentially during this period.
            </p>
        
            <p>
             The serene Sinharaja Rain Forest has bio-diverse environs and a unique ecosystem. It borders Ceciliyan Estate to the North and is designated a Biosphere Reserve and a World Heritage Site by UNESCO.
                Spanning 130 acres in the verdant hills of Kalawana, in the Ratnapura District, Ceciliyan Estate is in perfect harmony with nature. It is managed by Ceciliyan Associates Private Ltd, a family business in its third generation, from the early 1920’s. Ceciliyan is regarded as the name of the wife of the original owner and was endorsed by managements from 1940 onwards.</p>
                <p>Seasonal rainfall is due to both the North-East and South-West monsoons. The micro climate around  Sinharaja forest reserve helps keep tea bushes healthy and produce succulent tea leaves throughout the year. The mild climate enhances leaf Chlorophylls, improving made tea’s blackness. Nutrient-rich soils, enhance the enzymic activity, thus contributing to produce liquoring tea. These inherent environmental factors, specific to this area, help produce teas having unique characteristics that others cannot replicate.

                Our MD/CEO Paani Dias, counts more than 45 years of versatile experience in managing plantations growing a variety of crops. He was trained in the Netherlands in Dairy Farming. He was awarded the Diploma in Plantation Management and is a Fellow of the Institute of Plantation Management. Mr. Dias was Past President of the largest stakeholder in the tea industry, namely the Sri Lanka Private Tea Factory Owners’ Association, which naturally, plays a pivotal role in the manufacture of Ceylon Tea and is Vice Chairman of the influential Ceylon Tea Traders’ Association.

                Being customer centric, we now export the finest quality Ceylon tea as per buyers’ requirements from confirmed samples.
            </p>
          </div>
        </div>

      </div>
		 
		 <div class="icon-bar">
	<a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-instagram"></i></a> 
    <a href="#"><i class="fa fa-whatsapp"></i></a>
    <a href="#"><i class="fa fa-twitter-square"></i></a>
</div>
    </section><!-- End About Section -->

<section>
<!--div class="section">
	<div class="cont">
		<div class="content-section">
			<div class="title">
				<h1>Company Profile</h1>
			</div>
			<div class="content">
				<h3>Production of Ceylon tea has been a passion in Sri Lanka for more than 150 years. World-wide consumption increased exponentially during this period.</h3>
				<p>The serene Sinharaja Rain Forest has bio-diverse environs and a unique ecosystem. It borders Ceciliyan Estate to the North and is designated a Biosphere Reserve and a World Heritage Site by UNESCO.
                Spanning 130 acres in the verdant hills of Kalawana, in the Ratnapura District, Ceciliyan Estate is in perfect harmony with nature. It is managed by Ceciliyan Associates Private Ltd, a family business in its third generation, from the early 1920’s. Ceciliyan is regarded as the name of the wife of the original owner and was endorsed by managements from 1940 onwards.</p>
                <p>Seasonal rainfall is due to both the North-East and South-West monsoons. The micro climate around  Sinharaja forest reserve helps keep tea bushes healthy and produce succulent tea leaves throughout the year. The mild climate enhances leaf Chlorophylls, improving made tea’s blackness. Nutrient-rich soils, enhance the enzymic activity, thus contributing to produce liquoring tea. These inherent environmental factors, specific to this area, help produce teas having unique characteristics that others cannot replicate.

                Our MD/CEO Paani Dias, counts more than 45 years of versatile experience in managing plantations growing a variety of crops. He was trained in the Netherlands in Dairy Farming. He was awarded the Diploma in Plantation Management and is a Fellow of the Institute of Plantation Management. Mr. Dias was Past President of the largest stakeholder in the tea industry, namely the Sri Lanka Private Tea Factory Owners’ Association, which naturally, plays a pivotal role in the manufacture of Ceylon Tea and is Vice Chairman of the influential Ceylon Tea Traders’ Association.

                Being customer centric, we now export the finest quality Ceylon tea as per buyers’ requirements from confirmed samples.</p>
			</div>
		</div>
		<div class="image">
			<img src="Images/factory.PNG">
			<a href="AboutUs.php" class="hero-btn">Read More</a>
		</div>
	</div>
</div-->

<div class="icon-bar">
	<a href="#"><i class="fa fa-facebook"></i></a> 
    <a href="#"><i class="fa fa-instagram"></i></a> 
    <a href="#"><i class="fa fa-whatsapp"></i></a>
    <a href="#"><i class="fa fa-twitter-square"></i></a>
</div>
</section>
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
