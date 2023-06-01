<?php
include 'koneksi.php';
$username = $_POST['username'];
$pass = $_POST['pass'];

$login = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username = '$username' AND pass = '$pass' ");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:isi.php");
}else{
	header("location:index.php");	
}

// echo $us, $pass;

?>