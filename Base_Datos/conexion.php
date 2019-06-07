<?php
$conexion = mysqli_connect("localhost", "server", "server", "db_practicas_col");
if(!conexion){
	echo 'error al conectar la bd';
}
else{
	echo 'Conectado a la bd';
}

?>
