<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<meta name= viewport content= "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<style type="text/css">
*{
	margin: 0px;
	padding: 0px;
	box-sizing: border-box; ;
}

body{
	font-size: 20px;
	overflow-x: hidden;
	color: white;
	font-family: 'Flamenco', cursive;
}

header{
	background-image:linear-gradient(rgba(0,0,0,1),rgba(0,0,0,1)), url('../images/metr.png');
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	height: 100vh;
}

.clearfix:after{
	content: ".";
	visibility: hidden;
	display: block;
	height: 0px;
	clear: both;
}

#myVideo {
 position: absolute;
 right: 0;
 bottom: 0;
 min-width: 0%;
 min-height: 0%;
 opacity: 0.3;
}


.row{
	max-width: 1180px;
	margin: 0 auto;
}

.logo{
	height: 120px;
	width: auto;
	float: left;
	margin-top: 20px;

}

.main-nav{
	float: right;
	margin-top: 60px;
}

.main-nav li{
	display: inline-block;
	list-style: none;
	margin-left: 40px;
}

.main-nav li a{
	padding: 5px 0;
	color: #fff;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 90%;
	font-weight: 100;
}

.main-nav li a:hover{
	border-bottom: 2px solid #bf55ec;
}


.main-content-header{
	width: 1180px;
	padding:0 2%;
	position: absolute;
	/*border: 1px solid red;*/
	top: 55%;
	left: 50%;
	transform: translate(-50%, -50%);

}

h1{
	color: #fff;
	font-size: 240%;
	word-spacing: 5px;
	letter-spacing: 3px;
	margin-bottom: 20px;
	text-transform: uppercase;
	font-weight: lighter;
}

.btn{
	display: inline-block;
	padding: 10px 30px;
	font-weight: lighter;
	text-decoration: none;
	text-transform: uppercase;
	border-radius: 200px;
	transition: background-color 0.2s, border 0.2s, color 0.2;
}


.btn-full{
	background-color: transparent;
	color: #bf55ec;
	margin-right: 15px;
	border: 1px solid #bf55ec;
}

.btn-full:hover{
	background-color: #fff;
}

.btn-nav{
	background-color: transparent;
	color: #fff;
	border: 1px solid #fff;
}

.btn-nav:hover{
	background-color: #bf55ec;
}


.colorchange{
	animation:  colorchangethapa 1s infinite;
}

@keyframes colorchangethapa{
	0%{color: red;}
	25%{color:#bf55ec; ;}
	50%{ color: white; }
	100%{ color:#bf55ec;  }
}

</style>



<body>

	<video autoplay muted loop id="myVideo">
	  <source src="images/homepg_video_x264.mp4" type="video/mp4">
	  Your browser does not support HTML5 video.
	</video>

	<header>
		<nav>
			<div class="row clearfix">
				<img src="images/namma-metro_logo.jpg" class="logo">

				<ul class="main-nav animated slideInDown">
					<li><a href="images/map.jpg">ROUTES</a></li>
					<li><a href="#">FARE CALCULATOR</a></li>
					<li><a href="login.php">METRO CARD</a></li>
					<li><a href="signup.php">SIGN UP</a></li>
				</ul>

			</div>
		</nav>

		<div class="main-content-header">
			<h1> WELCOME TO <span class="colorchange">BENGALURU METRO</span>.<br>
				WAY TO SAVE TIME & MONEY. </h1>
			<a href="#" class="btn btn-full"> About</a>
			<a href="admin/login.php" class="btn btn-nav"> Admin </a>
		</div>
	</header>


</body>
</html>
