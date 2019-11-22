<?php
session_start();
include("connection.php");
mysqli_select_db($con, 'movie');

$name = $_POST['username'];
$pass = $_POST['password'];



$q = " select * from user  where username = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['username'] = $name;
	echo("WELCOME USER $name" );
	$message = "logged in succesfully.";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header("Location: http://localhost/movie/index.php");

}else{
	echo "<br>";
	echo "<br>";
	echo("ACCOUNT NOT REGISTERED !");
	echo "<br>";
	echo "<br>";
	echo "OR";
	echo "<br>";
	echo "<br>";
	echo "	INVALID CREDENTIALS ";
	echo "<br>";
	echo "<br>";
	echo "PLEASE REGISTER FIRST  ";
	echo '<a href="login.php">REGISTER HERE</a>';
}



?>