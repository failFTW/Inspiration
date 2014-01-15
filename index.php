<?php 
include_once('#');

$page = @$_GET['page'];
switch ($page) {
	case null:
	case "home":
		$getpage = "#";
		break;
}
?>