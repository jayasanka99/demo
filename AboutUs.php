<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

<style>
*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Playfair Display', serif;
    display: grid;
    background-color: white;
    align-content: center;
    min-height: 100vh;
}
	
.header{
	height:50vh;
	width: 100%;
	background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url("pics/PicsArt_05-05-08.45.17.jpg");
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
section1{
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 90vh;
    width: 85vw;
    margin: 0 auto;
}
.image{
    background: url("Images/Image1.jpg") center/cover no-repeat;
}
.content{
    background: white;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
.content h2{
    text-transform: uppercase;
    font-size: 36px;
    letter-spacing: 6px;
    opacity: 0.9;
}
.content span{
    height: 0.5px;
    width: 80px;
    background: #777;
    margin: 30px 0;
}
.content p{
    padding-bottom: 15px;
    font-weight: 300;
    opacity: 0.7;
    width: 60%;
    text-align: center;
    margin: 0 auto;
    line-height: 1.7;
}
.links{
    margin: 15px 0;
}
.links li{
    border: 0.5px solid #777;
    list-style: none;
    border-radius: 5px;
    padding: 10px 15px;
    width: 160px;
    text-align: center;
}
.links li a{
    text-transform: uppercase;
    color: #777;
    text-decoration: none;
}
.links li:hover{
    border-color: blue;
}
.links li:hover a{
    color :blue;
}
.vertical-line{
    height: 30px;
    width: 0.5px;
    background: #777;
    margin: 0 auto;
}
.icons{
    display: flex;
    padding: 15px 0;
}
.icons li{
    display: block;
    padding: 5px;
    margin: 5px;
}
.icons li i{
    font-size: 26px;
    opacity: 0.8;
}
.icons li i:hover{
    color: blue;
}


/*****************/

@media(max-width: 992px){
    section1{
        grid-template-columns: 1fr;
        width: 100%;
    }
    .image{
        height: 100vh;
    }
    .content{
        height: 100vh;
    }
    .content h2{
        font-size: 20px;
        margin-top: 50px;
    }
    .content span{
        margin: 20px 0;
    }
    .content p{
        font-size: 14px;
    }
    .links li a{
        font-size: 14px;
    }
    .links{
        margin: 5px 0;
    }
    .links li{
        padding: 6px 10px;
    }
    .icons li i{
        font-size: 15px;
    }
}
	.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
	.footer{
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col p{
	font-size: 15px;
	color: #bbbbbb;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}
</style>

</head>

<body>
  <section class="header">
	<nav>
		<a href="Index.php"><img src="Images/logo.png"></a>
		<div class="nav-links" id="navLinks">
		<i class="fa fa-times" onClick="hideMenu()"></i>
			<ul>
                <li><a href="">Home</a></li>

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
		<h1>About Company</h1>
		
	</div>
	
</section> 
	<div class="section">
	<div class="cont">
		<div class="content-section">
		</div>
		</div>
        <section1>
            <div class = "image">
                <!-- image here -->
            </div>

            <div class = "content">
                <h2>About Us</h2>
                <span><!-- line here --></span>

                <p style="font-size: 18px;">Production of Ceylon tea has been a passion in Sri Lanka for more than 150 years. World-wide consumption increased exponentially during this period.</p>

                <ul class = "links">
                    <li><a href = "About.php">About</a></li>
                    <div class = "vertical-line"></div>
                    <li><a href = "#">stakeholders</a></li>
                </ul>

                <ul class = "icons">
                    <li>
                        <i class = "fa fa-whatsapp"></i>
                    </li>
                    <li>
                        <i class = "fa fa-facebook"></i>
                    </li>
                    <li>
                        <i class = "fa fa-instagram"></i>
                    </li>
                    <li>
                        <i class = "fa fa-twitter-square"></i>
                    </li>
                </ul>
            </div>
        </section1>
		<div class="section">
	<div class="cont">
		<div class="content-section">
		</div>
		</div>
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

        
  