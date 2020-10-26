<?php
error_reporting();
$koneksi = mysqli_connect("localhost","root","","gni_projectsales");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
if (isset($_POST['save'])){
$nama		= htmlspecialchars($_POST['nama']);
$email		= htmlspecialchars($_POST['email']);
$password	= md5($_POST['password']);
$pass		= htmlspecialchars($_POST['pass']);
$level		= htmlspecialchars($_POST['level']);
//Validasi jika ada nama ada yang sama
$cek		= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM superadmin WHERE nama='$nama' or email='$email'"));
//melakukan perulangan
if ($cek > 0){
		echo "<script language = 'javascript'> alert ('Maaf Cek Kembali Nama dan Email Sudah ada di Database'); window.location='../data-admin'</script> ";
		}else { 	
		$query = mysqli_query($koneksi, "INSERT INTO superadmin (nama, email, password, pass, level) VALUES ('".$nama."', '".$email."', '".$password."', '".$pass."', '".$level."')");

		echo "<script language = 'javascript'> alert ('Berhasil ditambahkan'); window.location='../data-admin'</script> ";
		}
	}
?>