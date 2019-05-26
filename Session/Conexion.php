<?php
$conexion = mysqli_connect("localhost", "server", "server", "Registro");
if (!$conexion) {
    echo 'Error de conexión en la base de datos'
}
else {
    echo 'Conexión exitosa a la base de datos'
}
