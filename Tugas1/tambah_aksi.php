<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
// menginput data ke database
mysqli_query($koneksi,"insert into pegawai values('','$nama','$nip','$nohp','$email')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>