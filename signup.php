<!doctype html>
<html>
<head>
<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="sign.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
		<?php
	$sever="localhost";
	$user="root";
	$pass="demo";
	$db="project";
	
	$con=mysqli_connect($sever,$user,$pass,$db);
	
	if(!$con){
		echo "Error :".mysqli_connect_error();
	}
	
	$name="";
	$email="";
	$contact="";
	$password="";
	$msg="";
	
	$error = "";
	
	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$password = $_POST['password'];
		
		//$sql = "INSERT INTO login VALUES('".$fname."' , '".$sname."' , '".$address."', ".$birthday.", '".$email."', '".$password."' )";
		$sql="INSERT INTO `user`( `uname`, `email`, `contact`, `password`) VALUES ('".$name."','".$email."',".$contact.",'".$password."')";
		
		if(mysqli_query($con,$sql)){
			$msg = "Create Your New Account";
			header("Location:Home.php ");
		}else{
			$msg = "Not Inserted :". mysqli_error($con);
		}
		
	}

?>
	
	<div id="login-box">
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div class="left">
    <h1>Sign up</h1>
    
    <input type="text" name="name" placeholder="Username" value="<?php echo $name; ?>" required />
    <input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>" required />
    <input type="text" name="contact" placeholder="contact" value="<?php echo $contact; ?>" required />
    <input type="password" name="password" placeholder=" password" value="<?php echo $password; ?>" required />
	 <div class="error-message"><p style="color: red;"><?php echo $msg;?> </p></div>
     <input type="submit" name="submit" class="btn" value="Sign Up" />
	  
	  <p>Already have an account? <a href="signin.php">Sign In</a></p>
  </div>
  
  <div class="right">
	    <span class="reg">New here ?</span>
	    <span class="sign">Create Account.</span>
			<p class="text">Enter the details to create an account to shop online.</p>
	  
	  
  </div>
  <div class="or">OR</div>
			
		</form>
</div>


</body>
</html>
