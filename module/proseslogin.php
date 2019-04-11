<?php
session_start();
include "../inc/koneksi.php";
$username=$_POST['username'];
$pass=md5($_POST['password']);

$cekusername=mysqli_query($host,"SELECT * FROM users WHERE username='".$username."'")or die(mysqli_error($host));
$data=mysqli_fetch_assoc($cekusername);
if($data['password']==$pass){
	$_SESSION['username']=$data['username'];
	$_SESSION['is_login']=TRUE;
	header("Location:".base_url);
}else{
	header("Location:".base_url."index.php?act=login&status=wrongpass");
}

?>