<?php
$koneksi = mysqli_connect("localhost","root","","gni_projectsales");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
mysqli_query($koneksi, "DELETE from superadmin WHERE id='$_GET[id]'");
echo "<script language='javascript'> alert ('Data Berhasil Dihapus'); window.location = '../data-admin'</script>";
?>