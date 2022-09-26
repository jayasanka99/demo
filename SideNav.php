<!doctype html>
<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ceciliyan Tea</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body{
		min-height: 100vh;
		background-color: white;
	}
	.navigation{
		position: fixed;
		width: 60px;
		height: 100%;
		background: navy;
		transition: 0.5s;
		overflow: hidden;
	}
	.navigation:hover,
	.navigation.active{
		width: 250px;
	}
	.navigation ul{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
	}
	.navigation ul li{
		position: relative;
		width: 100%;
		list-style: none;
	}
	.navigation ul li:hover{
		background: #520C87;
	}
	.navigation ul li a{
		position: relative;
		display: block;
		width: 100%;
		display: flex;
		text-decoration: none;
		color: white;
	}
	.navigation ul li a .icon{
		position: relative;
		display: block;
		min-width: 60px;
		height: 60px;
		line-height: 60px;
		text-align: center;
	}
	.navigation ul li a .icon .fa{
		font-size: 24px;
	}
	.navigation ul li a .title{
		position: relative;
		display: block;
		padding: 0 10px;
		height: 60px;
		line-height: 60px;
		text-align: start;
		white-space: nowrap;
	}
	.toggle{
		position: absolute;
		top: 0;
		right: 0;
		width: 60px;
		height: 60px;
		background: white;
		cursor: pointer;
	}
	.toggle.active{
		background: #520C87;
	}
	.toggle:before{
		content: '\f0c9';
		font-family: fontAwesome;
		position: absolute;
		width: 100%;
		height: 100%;
		line-height: 60px;
		text-align: center;
		font-size: 24px;
		color: black;
	}
	.toggle.active:before{
		content: '\f00d ';
		
	}
	@media(max-width:767px){
		.navigation{
			left: -60px;
		}
		.navigation.active{
			left: 0px;
			width: 100%;
		}
	}
	
</style>

</head>

<body>


<div class="navigation">
	<ul>
		<li>
			<a href="ItemHandle.php">
			    <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
				<span class="title">Manage Product</span>
			</a>
		</li>
		<li>
			<a href="OrderView.php">
			    <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
				<span class="title">Orders</span>
			</a>
		</li>
		<li>
			<a href="veiw.php">
				<span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
				<span class="title">User Account</span>
			</a>
		</li>
		<li>
			<a href="feed.php">
				<span class="icon"><i class="fa fa-comment" aria-hidden="true"></i></span>
				<span class="title">User Feedback</span>
			</a>
		</li>
		<li>
			<a href="ALogOut.php">
				<span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
				<span class="title">LogOut</span>
			</a>
		</li>
	</ul>
</div>

<div class="toggle" onClick="toggleMenu()"></div>
<script type="text/javascript">
	
	function toggleMenu(){
		let navigation = document.querySelector('.navigation');
		let toggle = document.querySelector('.toggle');
		navigation.classList.toggle('active');
		toggle.classList.toggle('active');
	}
	
</script>

</body>
</html>