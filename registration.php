<?php
session_start();
include("connection.php");
mysqli_select_db($con, 'movie');


$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['pass2'];


$q = " select * from user  where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "<br>";
	echo" THIS USER ACCOUNT ALREADY EXISTS! ";
	echo "<br>";
	echo "<br>";
	echo 'PLEASE LOGIN TO CONTINUE BOOKING';
	echo "<br>";
	echo '<a href="login.php">LOG IN</a>';
}else{

	$qy= " insert  into user(name, email, phone,  username, password) values ('$fullname' , '$email', '$phone' ,'$username', '$password') ";
	mysqli_query($con, $qy); 
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Account registered successfully Please login to continue');
    window.location.href='login.php';
    </script>");
}
?>