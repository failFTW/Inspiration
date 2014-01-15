<?php 
include_once('core/config.php');

$page = @$_GET['page'];
switch ($page) {
	case null:
	case "home": //Simplistic Home Page
		$getpage = "#";
		break;
}
?>