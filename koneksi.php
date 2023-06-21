<?php 
$koneksi = mysqli_connect("localhost","root","","i_siswa");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi Gagal: " . mysqli_connect_error();
}
 
?>