<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
     <link rel="stylesheet" href="style_loginSignup.css">
<body>

	<div class="login-page">
		<div class="form">

			<form class="login-form">
				
				<a href="#" class="button">Add Station</a>
				<a href="#" class="button">Remove Station</a>
				<a href="#" class="button">Remove Route</a>
				<a href="#" class="button">Remove Line</a>
			<!--
				<button>Add Station</button>
				<button>Remove Station</button>
                <button>Remove Route</button>
                <button>Remove Line</button>
				-->
			</form>



		</div>
	</div>
   </body>
</html>








</div>

</body>
</html>
