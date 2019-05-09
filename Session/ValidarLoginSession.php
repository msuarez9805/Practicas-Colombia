<?php
	$user="admin@pc.com";
	$pass="0000";
	session_start();
	if ($_POST['email']==$user && $_POST['password']==$pass){
		$_SESSION ['login']='administrador';
		header ("Location:TablaJson/tjson.php");
	}
	else{
		echo '<script>alert("usuario o contraseña inconrrecto")</script>';	
	}	
?>

	