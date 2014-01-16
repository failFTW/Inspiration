<?php 
include_once('core/config.php');

$page = @$_GET['page']; //Grabbing pages from the whole root directory. e.g "home"
switch ($page) {
	case null:
	case "home": //Home Page
		$getpage = "public/home";
		break;
}
include_once('assets/top.php');
include_once($getpage.".php");
include_once('assets/bottom.php');
?>