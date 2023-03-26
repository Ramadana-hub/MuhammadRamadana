<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
 
// update data ke database
mysqli_query($koneksi,"update pegawai set nama='$nama', nip='$nip', nohp='$nohp', email='$email' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>