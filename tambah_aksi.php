<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];
$kode = $_POST['kode'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$total = $_POST['total'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into pesanan values('','$nama','$alamat','$nomor', '$kode', '$jumlah', '$harga', '$total')");
 
// mengalihkan halaman kembali ke index.php
header("location:keranjang.php");
 
?>