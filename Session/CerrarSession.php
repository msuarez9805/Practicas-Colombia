<?php
	/**
	*session_start() reaunda la sesion creada
	*session_start() destruye la sesion creada
	*Posteriormente lo redirecciona a la pagina de Login
	*/
	session_start();
	session_destroy();
	header ("Location:Login.php");
?>