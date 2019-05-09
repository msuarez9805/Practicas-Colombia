<?php

/*
* Esta función permite eliminar las cookies almacenadas con su link correspondiente y de esta manera redireccionar al usuario a la página principal: practica.php
*/

setcookie('seleccionar-practica','',time()-1, '/');
/*
* setcookie permite crear una cookie, pero en este caso le decimos que el tiempo de permanencia de la misma se de -1 segundo, lo que permite eliminar la misma casi al instante de darle al link en cada una de las páginas web.
* Esta funcionalidad se puede aplicar en una página web como boton para volver a la página de inicio si definitivamente el usuario no esta interesado en la información donde se ha creado la cookie.
* Nombre de la cookie = 'seleccionar-practica'
* Tiempo de la cookie = -1 segundo.
* Se almacenará en la raiz con: '/'
*/

header('Location:practica.php');
/*
* En este elemento tenemos que después de crearse la cookie, que se elimina al instante, nos direccione a la página principal: practica.php
* Locación: practica.php
*/

?>
