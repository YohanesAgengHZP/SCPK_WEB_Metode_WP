<?php
$db="nilai_dosen";

$koneksi = mysqli_connect('localhost', 'root', '');
if(!$koneksi){
	die ("koneksi ke database Gagal..");
}
//else echo "koneksi Berhasil";

if(!$koneksi->select_db($db)){
	die ("<br>Database Gagal di Temukan ");
}
//else echo "<br>Database Berhasil ditemukan";
?>