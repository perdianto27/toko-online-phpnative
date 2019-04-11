<?php
$act=@$_GET['act'];
switch($act){
	case "login":
	include "module/login.php";
	break;

	case "payment":
	include "module/payment.php";
	break;

	case "services":
	include "module/payment.php";
	break;



	case "events":
	include "module/events.php";
	break;

	case "about":
	include "module/about.php";
	break;
	
	case "checkout":
	include "module/checkout.php";
	break;

	case "products":
	include "module/products.php";
	break;
	
	default:
	include "module/home.php";
	
}
?>