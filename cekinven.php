<?php
session_start();

include '../koneksi.php';

$email 		= mysqli_real_escape_string($koneksi, $_POST['email']);
$password 	= md5(mysqli_real_escape_string($koneksi, $_POST['password']));
$captcha	= mysqli_real_escape_string($koneksi, $_POST['captcha']);

$login		= mysqli_query($koneksi,"select * from user where email='$email' and password='$password'");
$cek		= mysqli_num_rows($login);
if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);
	if ($_SESSION['captcha'] == $captcha) {
//----------------------------------------------------------------------------------All Direksi		
		if ($data['level'] == "2") {
			$_SESSION['email'] = $email;
			$_SESSION['level'] = "2"; 					
				header("location:1/dashboard");
//----------------------------------------------------------------------------------HRD		
		} else if ($data['level'] == "3") {
			$_SESSION['email'] = $email;
			$_SESSION['level'] = "3"; 					
				header("location:1/dashboard");
//----------------------------------------------------------------------------------Sales						
		} else if ($data['level'] == "4") {
			$_SESSION['email'] = $email;
			$_SESSION['level'] = "4"; 					
				header("location:1/dashboard");
//----------------------------------------------------------------------------------Admin Sales						
		} else if ($data['level'] == "5") {
			$_SESSION['email'] = $email;
			$_SESSION['level'] = "5"; 					
				header("location:0/dashboard");
//----------------------------------------------------------------------------------Purchasing		
		} else if ($data['level'] == "6") {
			$_SESSION['email'] = $email;
			$_SESSION['level'] = "6"; 					
				header("location:1/dashboard");
//----------------------------------------------------------------------------------Warehouse		
		} else if ($data['level'] == "7") {
			$_SESSION['email'] = $email;
			$_SESSION['level'] = "7"; 					
				header("location:2/dashboard");
//----------------------------------------------------------------------------------Head Engineering		
		} else if ($data['level'] == "8") {
			$_SESSION['email'] = $email;
			$_SESSION['level'] = "8"; 					
				header("location:1/dashboard");
//----------------------------------------------------------------------------------Engineering		
		} else if ($data['level'] == "9") {
			$_SESSION['email'] = $email;
			$_SESSION['level'] = "9";
				header("location:2/dashboard");
//----------------------------------------------------------------------------------User		
		}else if ($data['level'] == "10") {
			$_SESSION['email'] = $email;
			$_SESSION['level'] = "10";
				header("location:2/dahsboard");
		} else {
			header("location:index?pesan=gagal");
		}
	}
} else {
	header("location:index?pesan=gagal");
}
?>