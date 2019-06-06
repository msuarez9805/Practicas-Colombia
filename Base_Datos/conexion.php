<?php
function conectar(){
	$user = "server";
	$pass = "server";
	$server = "localhost";
	$db ="Practicas Colombia";
	$con = new mysqli($server, $user, $pass) or die("error al conectar la bd".mysql_error());
	mysql_select_db($db,$con);
	return $con;
}

?>
