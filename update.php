<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];
$kode = $_POST['kode'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$total = $_POST['total'];
 
// update data ke database
mysqli_query($koneksi,"update pesanan set nama='$nama', alamat='$alamat', nomor='$nomor', kode='$kode', jumlah='$jumlah', harga='$harga', total='$total' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:keranjang.php");
 
?>