<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['umur'];
$pekerjaan = $_POST['kota'];
 
mysql_query("INSERT INTO user VALUES('','$nama','$umur','$kota')");
 
header("location:index.php?pesan=input");
?>