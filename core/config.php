<?php
session_start();
if(basename($_SERVER["PHP_SELF"]) == "config.php"){
	die("Error!");
}
//Configuration (Edit These)
$host['hostname'] 		 = "localhost";
$host['user'] 	  		 = "root";
$host['password'] 		 = "";
$host['database'] 		 = "Inspiration";
$loginport 		 		 = "3306";
$timezone       	     = "";
//End of Configuration


mysql_connect($host['hostname'],$host['user'],$host['password']) OR die("Can't connect to server.");
mysql_select_db($host['database']) OR die("Mysql Database can't select the DB.");

//Begin PHP Scripts
function sql_injectionproof($sCode) {
	if (function_exists("mysql_real_escape_string")) {
		$sCode = mysql_real_escape_string($sCode);
	} else {
		$sCode = addslashes($sCode);
	}
	return $sCode;
}
//End PHP Scripts
?>