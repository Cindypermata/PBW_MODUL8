<?php
include 'koneksi.php';
$nim = $_POST['nim'];
$pass = $_POST['pass'];

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE nim = '$nim' AND pass = '$pass' ");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['nim'] = $nim;
	$_SESSION['status'] = "login";
	header("location:uts.php");
}else{
	header("location:index.php");	
}

// echo $us, $pass;

?>