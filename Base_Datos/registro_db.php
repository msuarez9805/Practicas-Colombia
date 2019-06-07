<!DOCTYPE html>
<?php
include("conexion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$programa = $_POST["programa"];
$pass = $_POST["contraseña"];
$documento = $_POST["documento"];

$insertar  ="insert INTO estudiante(nombre, apellido, edad, programa, contraseña, documento) VALUES ('$nombre', '$apellido', '$edad', '$programa', '$pass', '$documento')";

$verificar_estudiante = mysqli_query($conexion, "SELECT * FROM estudiante WHERE estudiante = 'estudiante'");
if(mysqli_num_rows($verificar_usuario) > 0){
	echo "El usuario ya esta registrado";
	exit;
}

$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
	echo "error al registrarse";
}else{
	echo "Usuario registrado";
}
mysqli_close($conexion);

<?
