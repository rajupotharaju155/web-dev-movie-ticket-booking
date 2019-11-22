<?php
session_start();
include("connection.php");
mysqli_select_db($con, 'movie');

if(isset($_SESSION['username']))
 {

	$uname=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$msg=htmlspecialchars($_POST['msg']);
	$sql="insert into messages(Name, Email, Phone, Message) values('$uname','$email','$phone','$msg')";
	mysqli_query($con,$sql);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Your Request has been submitted. We will reply to you soon.');
    window.location.href='index.php';
    </script>");
 }
 else{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Please login to Submit the query');
    window.location.href='login.php';
    </script>");
	#header("location:login.php");
 }
?>