<?php

$dbserver = "localhost";
$dbuser = "root";
$userpassword = "";
$dbname = "Practical_sessions";

$connection = new mysqli($dbserver, $dbuser, $userpassword, $dbname);

if (!$connection) {
	echo "<div
	style='color:red;text-align:center;padding: 7x'>
	Error establishing connection! Please check if your server is online..
	</div>";
}
?>
