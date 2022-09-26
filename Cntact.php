<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ceciliyan Tea</title>
</head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form</title>
<!--link-stylesheet----------->
<link rel="stylesheet" type="text/css" href="cntact.css"/>
	  <link rel="stylesheet" href="index.css">
<!--using-fontAwesome------------>
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" > 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
		<?php
	$sever="localhost";
	$user="root";
	$pass="";
	$db="project";
	
	$con=mysqli_connect($sever,$user,$pass,$db);
	
	
	if(!$con){
		echo "Error :".mysqli_connect_error();
	}

	
	$name="";
	$email="";
	$subject="";
	$message="";
	$msg="";
	
	if(isset($_POST['btnSubmit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
	
			$sql="INSERT INTO tbl_contactus VALUES ('".$name."','".$email."','".$subject."','".$message."')";
			if(mysqli_query($con,$sql)){
				$msg = "Thank you! ";
			
			}else{
				$msg = "Error :". mysqli_error($con);
			}
	}
	
	?>
	
	
		<section class="header">
	<nav>
		<a href="Index.php"><img src="Images/logo.png"></a>
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
		<h1>Contact Us</h1>
		
	</div>
		</section>
	<div>
	 

    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class='fas fa-map-marker-alt' style='font-size:36px'></i>
                  <h3>Our Address</h3>
                  <p>Ceciiyan Associates Private Limited.
                 Ceciliyan Estate , Thapassarakanda ,Kalawana , Sri Lanka</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="fas fa-envelope" style='font-size:36px'></i>
                  <h3>Email Us</h3>
                  <p>Email : info@ceciliyantea.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
               <i class='fas fa-phone' style='font-size:36px'></i>
                  <h3>Call Us</h3>
                  <p>Tel : +94 45 2 255 497</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="<?php echo $name; ?>"  required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="<?php echo $email; ?>"  required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="<?php echo $subject; ?>"  required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" value="<?php echo $message; ?>"  required></textarea>
              </div>
              <div class="my-3">
                <div class="error-message"><p style="color: red;"><?php echo $msg;?> </p></div>
              </div>
              <div class="text-center"><button class="btn btn-info" name="btnSubmit" type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
		
		<div class="trade">
		<h1 class="text-center">Trade Inquiries</h1>
<p>Although our production is localized to Sri Lanka, our thinking is global in line with the pre-eminent position of Ceylon Tea in global markets.Ceciliyan’s customer centric culture focuses on both, our local and world-wide clientele. We invite you to obtain the latest information on our teas etc., based on unique tea experiences, by communicating with us via marketing@ceciliyantea.com </p>
		</div>
    </section>
    <section class="map mt-2">
      <div class="container-fluid p-0">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7927.82415366235!2d80.390473!3d6.532788!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x54e2cce082a3f948!2sCeciliyan%20Tea%20Factory!5e0!3m2!1sen!2slk!4v1619376109870!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section><!-- End Map Section -->

  </main>
	
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
