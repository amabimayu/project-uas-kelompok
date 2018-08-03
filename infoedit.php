<?php
// panggil koneksi
include "koneksi.php";
$uas_nama = $_POST['uas_nama'];
$uas_password = $_POST['uas_password'];
$uas_email = $_POST['uas_email'];
$uas_kategori = $_POST['uas_kategori'];


//if (!empty($yt_email) && !empty($yt_nama) && !empty ($yt_password) && !empty ($yt_birth) && !empty ($yt_jk))// pengecekan jika ada kosong
//{
mysqli_query($con, "INSERT INTO uas(uas_nama,uas_password,uas_email,uas_kategori) VALUES ('$uas_nama','$uas_password','$uas_email','$uas_kategori')");
header ('location:login.php');//arahkan kembali
//else
	//header('location:home.php');
	?>