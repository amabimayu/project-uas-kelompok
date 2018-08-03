<?php
//panggil koneksi
include "koneksi.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];


if (!empty($nama) && !empty($email)  && !empty($pesan))// pengecekan jika data kosong
{
	mysqli_query($con, "INSERT INTO komentar(nama,email,pesan)
	VALUES ('$nama', '$email','$pesan')");
	header ('location:contact.php?status=sukses'); // arahkan kembali
}else
{
	header ('location:contact.php?status=gagal');
}
?>
