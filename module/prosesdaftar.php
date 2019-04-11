<?php
session_start();
include "../inc/koneksi.php";
$username=$_POST['username'];
$pass=md5($_POST['password']);
$email=$_POST['email'];
$phone=$_POST['phone'];

$reg=mysqli_query($host,"INSERT INTO users (username,password,email,phone) VALUES ('".$username."','".$pass."','".$email."','".$phone."')")or die(mysqli_error($host));

if($reg){
	header("Location:".base_url."index.php?act=login");
}else{
	header("Location:".base_url."index.php?act=login&status=wrongreg");
}

?>