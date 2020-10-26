<?php 
session_start();
include '../koneksi.php';
$email 		= mysqli_real_escape_string($koneksi, $_POST['email']);
$password 	= md5(mysqli_real_escape_string($koneksi, $_POST['password']));
$captcha	= mysqli_real_escape_string($koneksi, $_POST['captcha']);

$login		= mysqli_query($koneksi,"select * from superadmin where email='$email' and password='$password'");
$cek		= mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	if($_SESSION['captcha'] == $captcha){
	if($data['level']=="#1$58%avD%4&10o"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "a7u14g4w9c1h25a4i";
		header("location:admin/dashboard.php");
	}}
	else{
		header("location:login?pesan=gagal");
	}	
}else{
	header("location:login?pesan=gagal");
}

?>