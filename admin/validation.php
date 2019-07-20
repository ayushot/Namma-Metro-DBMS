<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection";
}

mysqli_select_db($con, 'registerdb');

$name = $_POST['user'];
$pass = $_POST['password'];


$q = " select * from signina  where namea = '".$name."' && passa = '".$pass."' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){

	$_SESSION['username'] = $name;
	echo "<script>alert('done');
	window.location.href='updates.php';
	</script>";
	header('location:updates.php');
    echo "succesful login";

}else{

	header('location:login.php');
	 echo "unsuccesful login";
}



?>
