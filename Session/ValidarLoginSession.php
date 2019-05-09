<?php
	session_start();
	$user="admin@pc.com";
	$pass="0000";
	if ($_POST['email']==$user && $_POST['password']==$pass){
		$_SESSION ['usuario']='administrador';
		header ("Location:../Cookies/practica.php");
	}
	else{
		echo '<script>alert("usuario o contraseña inconrrecto")</script>';	
	}	
?>

	