<?php 
include 'koneksi.php';
 
$uas_email = $_POST['uas_email'];
$uas_password = $_POST['uas_password'];
 
$con = mysqli_query("select * from uas where uas_email='$uas_email' and uas_password='$uas_password'");
$cek = mysqli_num_rows($con);
 

	session_start();
	
	$_SESSION['uas_email'] = $uas_email;
	$_SESSION['status'] = "login";
	header("location:form.php");
 
?>