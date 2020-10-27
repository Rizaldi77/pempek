<?php
include('../connection.php');
session_start();
$username   = $_POST['username'];
$password   = $_POST['password'];
$hashPwd    = md5($password);
$query      = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$hashPwd'") or die(mysqli_error($conn));;
$cek	= mysqli_num_rows($query);
$cek2 	= mysqli_fetch_array($query);

if($cek>0) {
	$_SESSION['username'] = $username;
	$_SESSION['role_id'] = $cek2['role_id'];
	header("Location:../index.php?pesan=success");
}else {
    header("Location:../login.php?pesan=failed"); 
}