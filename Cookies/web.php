<?php

/*
* Esta lógica permite direccionar a la persona de forma directa a la página web correspondiente a la practica que ha visitado con un tiempo estipulado de 24 horas.
*/

if(!$_COOKIE['seleccionar-practica']) {
    header('Location:practica.php');
}
/*
* Esta función dice que si se tiene la cookie seleccionar-carpeta sin ningún valor, que nos direccione a practica.php
* Valor = ' '
* Direccionamiento = practica.php
*/

else if($_COOKIE['seleccionar-practica'] == 'ns') {
    header('Location:nestle.php');
}
/*
Esta función dice que si se tiene la cookie seleccionar-carpeta con el valor ' ' dado en el archivo practica.php nos direccione al archivo .php correspondiente.
* Valor = 'ns'
* Direccionamiento = nestle.php
*/

else if($_COOKIE['seleccionar-practica'] == 'cp') {
    header('Location:compensar.php');
}
/*
Esta función dice que si se tiene la cookie seleccionar-carpeta con el valor ' ' dado en el archivo practica.php nos direccione al archivo .php correspondiente.
* Valor = 'cp'
* Direccionamiento = compensar.php
*/

else if($_COOKIE['seleccionar-practica'] == 'bc') {
    header('Location:bancolombia.php');
}
/*
Esta función dice que si se tiene la cookie seleccionar-carpeta con el valor ' ' dado en el archivo practica.php nos direccione al archivo .php correspondiente.
* Valor = 'bc'
* Direccionamiento = bancolombia.php
*/

else if($_COOKIE['seleccionar-practica'] == 'br') {
    header('Location:brinsa.php');
}
/*
Esta función dice que si se tiene la cookie seleccionar-carpeta con el valor ' ' dado en el archivo practica.php nos direccione al archivo .php correspondiente.
* Valor = 'br'
* Direccionamiento = brinsa.php
*/

else if($_COOKIE['seleccionar-practica'] == 'ec') {
    header('Location:ecopetrol.php');
}
/*
Esta función dice que si se tiene la cookie seleccionar-carpeta con el valor ' ' dado en el archivo practica.php nos direccione al archivo .php correspondiente.
* Valor = 'ec'
* Direccionamiento = ecopetrol.php
*/

else if($_COOKIE['seleccionar-practica'] == 'lr') {
    header('Location:loreal.php');
}
/*
Esta función dice que si se tiene la cookie seleccionar-carpeta con el valor ' ' dado en el archivo practica.php nos direccione al archivo .php correspondiente.
* Valor = 'lr'
* Direccionamiento = loreal.php
*/

else if($_COOKIE['seleccionar-practica'] == 'ea') {
    header('Location:ean.php');
}
/*
Esta función dice que si se tiene la cookie seleccionar-carpeta con el valor ' ' dado en el archivo practica.php nos direccione al archivo .php correspondiente.
* Valor = 'ea'
* Direccionamiento = ean.php
*/

else if($_COOKIE['seleccionar-practica'] == 'cv') {
    header('Location:cruzverde.php');
}
/*
Esta función dice que si se tiene la cookie seleccionar-carpeta con el valor ' ' dado en el archivo practica.php nos direccione al archivo .php correspondiente.
* Valor = 'cv'
* Direccionamiento = cruzverde.php
*/

else if($_COOKIE['seleccionar-practica'] == 'av') {
    header('Location:avianca.php');
}
/*
Esta función dice que si se tiene la cookie seleccionar-carpeta con el valor ' ' dado en el archivo practica.php nos direccione al archivo .php correspondiente.
* Valor = 'avianca'
* Direccionamiento = av.php
*/

else if($_COOKIE['seleccionar-practica'] == 'lt') {
    header('Location:latam.php');
}
/*
Esta función dice que si se tiene la cookie seleccionar-carpeta con el valor ' ' dado en el archivo practica.php nos direccione al archivo .php correspondiente.
* Valor = 'lt'
* Direccionamiento = latam.php
*/

else if($_COOKIE['seleccionar-practica'] == 'evr') {
    header('Location:everis.php');
}
/*
Esta función dice que si se tiene la cookie seleccionar-carpeta con el valor 'evr' dado en el archivo practica.php nos direccione al archivo .php correspondiente.
* Valor = 'evr'
* Direccionamiento = everis.php
*/

else if($_COOKIE['seleccionar-practica'] == 'tx') {
    header('Location:texmoda.php');
}
/*
Esta función dice que si se tiene la cookie seleccionar-carpeta con el valor 'tx' dado en el archivo practica.php nos direccione al archivo .php correspondiente.
* Valor = 'tx'
* Direccionamiento = texmoda.php
*/

?>
