<?php
	/**
	*Se reaunada la sesion ya creada
	*/
	session_start();
	$varSession = $_SESSION ['usuario'];
	/**
	*Se realiza un condicional para que solo puedan acceder al contenido de la pagina los usuario con sesion creada y logeada en la pagina.
	*/	
	if ($varSession==null || $varSession = ''){
		echo '<script>alert("Usted no tiene autorizacion, Debe iniciar session con su cuenta de Practicas Colombia para poder acceder a este apartado. Gracias")</script>';	
		die();
	}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<!--
		* En head encontramos todos los cdn y demás librerias que incluyen varias funcionalidades:
		* Jquery version 3.3.1
		* Bootstrap 4.3.1 & 4.3.1
		* Fontawesome 5.7.2
		* Materialize 1.0.0
		-->

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cookies</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/Styles2.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="shortcut icon" type="image/x-icon" href="../Img/LogotipoPracticasColombia.ico" >
	</head>

	<body>

		<!-- Barra de Navegación que nos proporciona varias obciones de modificación con bootstrap y permite una gran variedad de clases que se adecuan a las preferencias de las personas -->

		<nav class="navbar navbar-expand-lg fixed-top ">
				<a class="navbar-brand" href="#"> <img src="../Img/LogotipoPracticasColombia.ico" width="50px" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse " id="navbarSupportedContent">
					<ul class="navbar-nav mr-4">
						<li class="nav-item">
							<a class="nav-link" data-value="about" href="../Index.php">Inicio</a> </li>
						<li class="nav-item">
							<a class="nav-link " data-value="portfolio" href="../Readme.php">Acerca de</a>
							</li>
						<li class="nav-item">
							<a class="nav-link " data-value="team" href="../EquipoDeTrabajo.php">Equipo</a>
							</li>
						 <li class="nav-item">
							<a class="nav-link " data-value="blog" href="../License.php">Licencia</a>
							</li>
						<li class="nav-item">
							<a class="nav-link " href="mailto:atencionalusuario@practicascolombia.com">Contacto</a>
							</li>
					</ul>
				</div>
			</nav>
		<br>
		<br>
		<br>

		<!-- Seleccione práctica -->

		<!--
		* En este elemento div que tomamos como contenedor, se encuentra las prácticas ofrecidas por Practicas Colombia, donde se puede seleccionar una de ellas y con la lógica de php, almacenar cookies.

		* Cada Botón está referenciado al archivo crer_cookie.php y tienen el valor añadido de práctica y su respectiva abreviación teniendo en cuenta el nombre de la empresa. Ejemplo: Nestlé = ns.

		* El elemento form esta desarrollado con el framework de CSS, llamado materialize y está predefinido con sus respectivos estilos

		-->
		
			<div class="container fluid">

				<h3 class="center-align">Seleccione su Práctica</h3>
				<p class="center-align">
					<a href="../Session/CerrarSession.php" >Cerrar Sesion</a>
				</p>

				<!--
				* Form con estilos en materialize, predeterminada.
				-->
				<form action="#">
					<p>
						<label>
							<input name="group1" type="radio" checked />
							<span>Nestlé</span>
						</label>
					</p>
					<!--
					* Botón con estilos en mateialize donde se referencia el archivo crear_cookie.php y tiene su correspondiente valor practica = 'ns'.
					* Valor: ''
					-->
					<p class="center-align">
						<a href="crear_cookie.php?practica=ns" class="waves-effect waves-light btn-small">Seleccionar</a>
					</p>

					<p>
						<label>
							<input name="group1" type="radio" />
							<span>Compensar</span>
						</label>
					</p>
					 <!--
					* Botón con estilos en mateialize donde se referencia el archivo crear_cookie.php y tiene su correspondiente valor practica = 'cp'.
					* Valor: ''
					-->
					<p class="center-align">
						<a href="crear_cookie.php?practica=cp" class="waves-effect waves-light btn-small">Seleccionar</a>
					</p>

					<p>
						<label>
							<input class="with-gap" name="group1" type="radio" />
							<span>Bancolombia</span>
						</label>
					</p>
					 <!--
					* Botón con estilos en mateialize donde se referencia el archivo crear_cookie.php y tiene su correspondiente valor practica = 'bc'.
					* Valor: ''
					-->
					<p class="center-align">
						<a href="crear_cookie.php?practica=bc" class="waves-effect waves-light btn-small">Seleccionar</a>
					</p>

					<p>
						<label>
							<input name="group1" type="radio" />
							<span>Brinsa S.A</span>
						</label>
					</p>
					 <!--
					* Botón con estilos en mateialize donde se referencia el archivo crear_cookie.php y tiene su correspondiente valor practica = 'br'.
					* Valor: ''
					-->
					<p class="center-align">
						<a href="crear_cookie.php?practica=br" class="waves-effect waves-light btn-small">Seleccionar</a>
					</p>

					<p>
						<label>
							<input class="with-gap" name="group1" type="radio" />
							<span>Ecopetrol</span>
						</label>
					</p>
					 <!--
					* Botón con estilos en mateialize donde se referencia el archivo crear_cookie.php y tiene su correspondiente valor practica = 'ec'.
					* Valor: ''
					-->
					<p class="center-align">
						<a href="crear_cookie.php?practica=ec" class="waves-effect waves-light btn-small">Seleccionar</a>
					</p>

					<p>
						<label>
							<input class="with-gap" name="group1" type="radio" />
							<span>Loreal</span>
						</label>
					</p>
					 <!--
					* Botón con estilos en mateialize donde se referencia el archivo crear_cookie.php y tiene su correspondiente valor practica = 'lr'.
					* Valor: ''
					-->
					<p class="center-align">
						<a href="crear_cookie.php?practica=lr" class="waves-effect waves-light btn-small">Seleccionar</a>
					</p>

					<p>
						<label>
							<input class="with-gap" name="group1" type="radio" />
							<span>EAN</span>
						</label>
					</p>
					 <!--
					* Botón con estilos en mateialize donde se referencia el archivo crear_cookie.php y tiene su correspondiente valor practica = 'ea'.
					* Valor: ''
					-->
					<p class="center-align">
						<a href="crear_cookie.php?practica=ea" class="waves-effect waves-light btn-small">Seleccionar</a>
					</p>

					<p>
						<label>
							<input class="with-gap" name="group1" type="radio" />
							<span>Cruz Verde</span>
						</label>
					</p>
					 <!--
					* Botón con estilos en mateialize donde se referencia el archivo crear_cookie.php y tiene su correspondiente valor practica = ''.
					* Valor: 'cv'
					-->
					<p class="center-align">
						<a href="crear_cookie.php?practica=cv" class="waves-effect waves-light btn-small">Seleccionar</a>
					</p>

					<p>
						<label>
							<input class="with-gap" name="group1" type="radio" />
							<span>Avianca</span>
						</label>
					</p>
					 <!--
					* Botón con estilos en mateialize donde se referencia el archivo crear_cookie.php y tiene su correspondiente valor practica = ''.
					* Valor: 'av'
					-->
					<p class="center-align">
						<a href="crear_cookie.php?practica=av" class="waves-effect waves-light btn-small">Seleccionar</a>
					</p>

					<p>
						<label>
							<input class="with-gap" name="group1" type="radio" />
							<span>Latam</span>
						</label>
					</p>
					 <!--
					* Botón con estilos en mateialize donde se referencia el archivo crear_cookie.php y tiene su correspondiente valor practica = ''.
					* Valor: 'lt'
					-->
					<p class="center-align">
						<a href="crear_cookie.php?practica=lt" class="waves-effect waves-light btn-small">Seleccionar</a>
					</p>

					<p>
						<label>
							<input class="with-gap" name="group1" type="radio" />
							<span>Everis</span>
						</label>
					</p>
					 <!--
					* Botón con estilos en mateialize donde se referencia el archivo crear_cookie.php y tiene su correspondiente valor practica = ''.
					* Valor: 'evr'
					-->
					<p class="center-align">
						<a href="crear_cookie.php?practica=evr" class="waves-effect waves-light btn-small">Seleccionar</a>
					</p>

					<p>
						<label>
							<input class="with-gap" name="group1" type="radio" />
							<span>Texmoda</span>
						</label>
					</p>

					 <!--
					* Botón con estilos en mateialize donde se referencia el archivo crear_cookie.php y tiene su correspondiente valor practica = ''.
					* Valor: 'tx'
					-->
					<p class="center-align">
						<a href="crear_cookie.php?practica=tx" class="waves-effect waves-light btn-small">Seleccionar</a>
					</p>
					<br>
				</form>
			</div>
		</div>	
		<br>
		
			<!-- Footer -->
		<footer>
			<div class="container-fluid padding">
				<div class="row text-center">
					<div class="col-md-4">
						<hr class="light">
						<h5>PERSONAS</h5>
						<hr class="light">
						<p>Registro</p>
						<p>Hoja de Vida</p>
						<p>Salario</p>
						<p>Ofertas</p>
					</div>
					<div class="col-md-4">
						<hr class="light">
						<h5>EMPRESAS</h5>
						<hr class="light">
						<p>Registro</p>
						<p>Publicar oferta</p>
						<p>Temporales de empleo</p>
					</div>
					<div class="col-md-4">
						<hr class="light">
						<h5>NOTICAS</h5>
						<hr class="light">
						<p>Empleos</p>
						<p>Mundo actual</p>
						<p>Tendencias laborales</p>
						<p>Otras noticias</p>
					</div>
					<div class="col-12">
						<hr class="light">
						 <h10> COPYRIGHT © 2019 Practicas Colombia S.A.S Prohibida su reproducción total o parcial, así como su traducción a cualquier idioma sin autorización escrita de su titular. PracticasColombia es un producto de Practicas Colombia S.A.S. Nit. 830456789. Aviso de privacidad</h10>
					</div>
				
			</div>
		</footer>
		
		
	</body>
</html>
