<!doctype html>
<html>
<head>
<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="sign.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
		<?php

	
	$con=mysqli_connect("localhost","root","","project");
	$name="";
	$pass="";
	$msg="";
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = $_POST['name'];
		$pass = $_POST['password'];
		$sql = "SELECT * FROM user WHERE uname='".$name."' AND password='".$pass."' ";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0){
			$_SESSION['name'] = strtoupper($name);
			header("Location:Home.php");
		}
		else{
		$msg = "Invalid Inputs";
	
	}
		}
	
?>
	
	<div id="login-box">
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div class="left">
    <h1>Sign In</h1>
    
    <input type="text" name="name" placeholder="Username" value="<?php echo $name; ?>" required />
    <input type="password" name="password" placeholder="Password" value="<?php echo $pass; ?>" required />
    
	  <a href="signin.php"><input type="submit" name="submit" value="Sign In" /></a>
	  <p style="color: red;"><?php echo $msg;?> </p>
	  
	  <p>Don't You Have a Account <a href="signup.php">Sign up</a></p>
  </div>
  
  <div class="right">
	    <span class="reg">New here ?</span>
	     <span class="sign">WELLCOME!!!!</span>
			<p class="text">Shopped with us before? Log in with your details</p>
			
  </div>
  <div class="or">OR</div>
		</form>
</div>


</body>
</html>
