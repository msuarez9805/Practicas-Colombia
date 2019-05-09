<?php

/*
* Este documento es el que referenciamos en cada uno de los botones del documento practica.php
* Esta función permite crear una cookie que durará 24 horas y que dependerá de lo que el usuario que entre a la aplicación web seleccione durante su estancia en la misma.
*/
setcookie('seleccionar-practica',$_GET['practica'],time()+86400,'/');
/*
* La función setcookie permite crear una cookie.
* Nombre de la Cookie: 'seleccionar-practica'
* El metodo GET permite enviar la información del array de manera visible al servidor:
* Elemento que se envía: 'practica' con su respectivo valor.
* Se le ha dado un tiempo de duración a la cookie de 86400 segundos que representa un total de 24 horas.
* La cookie se almacenará desde la raiz.
*/
header('Location:web.php');
/*
* Esta funcionalidad nos enviará al archivo web.php donde se realizará la validación de la información necesaria y se creará definitivamente el tipo de cookie dependiendo de lo que el usuario seleccione.
*/

?>
