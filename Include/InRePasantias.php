<!DOCTYPE html>
<html lang="es">

<html>
	<head>
		<meta charset = "utf-8">
		<!-- +++++++++++ -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet"/>
		<!-- Enlace Java -->
		<script src="js/Tablas.js" type="text/javascript"></script>
		 <!-- Agregar icono de la página-->
		<link rel="shortcut icon" type="image/x-icon" href="Img/LogotipoPracticasColombia.ico">
		<!-- Enlace con Javascript -->
		<script src="js/Tablas.js" type="text/javascript"></script>
		<!-- Colocamos la etiqueta title para dar titulo a la pagina -->
		<title>Consejos</title>
		<!-- Agregar icono de la página-->
		<link rel="shortcut icon" type="image/x-icon" href="Img/LogotipoPracticasColombia.ico">
		<!--Bootstrap nav-->


	</head>

	<body>
		<!-- Barra de Navegación -->
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
		<div class="container-fluid padding">
				<div class="col-12">
					<div class="card" >
						<p align="justify">
						<br padding: 10px;>
						<?php
							/**
							*@method $include y $requiere
							*El metodo include sirve para agregar texto llamando a un archivo diferente
							*El metodo require da una adverentencia que notifica que el archivo llamado no se encuentra o si exite el archivo funciona igual que el include
							*/
							include "Pasantias.php";
							require "Pasantias.php";
							echo "Debe saber que ademas de estos consejos es importante tener toda la actitud para que inicie con pie derecho esto le ayudara a tener una buena imagen y que su jefe lo tenga en cuenta cuando usted termine sus pasantias ";
						?>
				</div>
			</div>
		</div>	
	
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
			</div>
		</footer>
	</body>	
</html>