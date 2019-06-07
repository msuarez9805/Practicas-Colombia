<?php
	/**
	*session_start() Inicia la sesion creada
	*/
	session_start();

	/**
	*Se crea una varible $user para guardar el email del usuario
	*Se crea una varible $pass para guardar la contraseña del usuario
	*/
	$user="admin@pc.com";
	$pass="0000";
	/**
	*Se crea un if para condicionar, que si los datos email y password ingresados en login son iguales a los datos entonces se creara sesion usuario= administrador y lo rediccionara a la pagina de empleos para que aplique a alguno.
	*/
	if ($_POST['email']==$user && $_POST['password']==$pass){
		/**
		*Se crea una varible de sesion usuario = 'administrador'
		*/
		$_SESSION ['usuario']='administrador';
		header ("Location:../Cookies/practica.php");
	}
		/**
		*Si no mostrara en pantalla un mensaje de alerta de que los datos ingresados con incorrectos. 
		*/
	else{
		echo '<script>alert("usuario o contraseña inconrrecto")</script>';	
	}	
?>

