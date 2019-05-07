<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- Colocamos la etiqueta title para dar titulo a la pagina -->
		<title>Prácticas Colombia</title>
		<!-- Agregar icono de la página-->
		<link rel="shortcut icon" type="image/x-icon" href="Img/LogotipoPracticasColombia.ico">
		<!--Bootstrap nav-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!--Enlace Estilos -->
		<link rel="stylesheet" href="css/styles.css">
		<!--Enlace fontawesome Iconos -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


		<!--
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

		-->

	</head>

	<body>
		<!-- Barra de Navegación -->
		<nav class="navbar navbar-expand-lg fixed-top ">
			<a class="navbar-brand" href="#"> <img src="Img/LogotipoPracticasColombia.ico" width="50px" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav mr-4">
					<li class="nav-item">
						<a class="nav-link" data-value="about" href="Index.html">Inicio</a> </li>
					<li class="nav-item">
						<a class="nav-link " data-value="portfolio" href="Readme.html">Acerca de</a>
						</li>
					<li class="nav-item">
						<a class="nav-link " data-value="team" href="EquipoDeTrabajo.html">Equipo</a>
						</li>
					 <li class="nav-item">
						<a class="nav-link " data-value="blog" href="License.html">Licencia</a>
						</li>
					<li class="nav-item">
						<a class="nav-link " href="mailto:atencionalusuario@practicascolombia.com">Contacto</a>
						</li>
				</ul>
			</div>
		</nav>

		<!-- Imágenes de presentación -->
		<div id="slides" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="Img/ImagenFondo.jpg" alt="Cambiar Imagen">
					<div class="carousel-caption">
						<h1 class="display-2">Prácticas Colombia</h1>
						<h3>Te ayudamos en tu crecimiento profesional</h3>
						<!--Buton para acceder al Html de login-->
						<button type="button" class="btn btn-outline-light btn-lg"> <a href="login.html">INICIAR SESION</a>
						</button>
						<!--Buton para acceder al Html de login-->
						<button type="button" class="btn btn-primary btn-lg"><a href="registro.html"> REGISTRATE </a>
						</button>
					</div>
				</div>
			</div>
		</div>



		<!--
	Comentarios sobre el Objetivo de la página
		<div class="container-fluid">
			<div class="row jumbotron">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
					<p class="lead">Prácticas Colombia es una aplicación web diseñada por Estudiantes de la universidad EAN. Su objetivo es ayudar al Alumno en su proceso de pasantías y ser el medio de comunicación entre las empresas y los propios estudiantes.</p>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
						<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">VER MÁS</button></a>
					</div>
				</div>
			</div>
		</div>
		-->

		<!-- Bienvenida -->
		<div class="container-fluid padding">
			<div class="row welcome text-center">
				<div class="col-12">
					<h1 class="display-4">Te damos la Bienvenida</h1>
				</div>
				<div class="col-12">
					<p class="lead"> Ésta pagina te ayudará a conseguir tus prácticas de manera sencilla, contamos con una base de datos sólida que se adecúa tus necesidades. Nuestra página web esta pensada para que los estudiantes encuentren su empresa ideal. Asímismo lograr una mejora en la calidad del servicio para todos los interesados. </p>
				</div>
			</div>
		</div>

		<!-- Busqueda de practicas -->

			<div class="filtrado">
				<br>
				<div align="center"><h2 style="color: white"> ENCUENTRA AQUI TUS PRACTICAS </h2>
				<button type="button" class="btn btn-outline-light btn-lg"><a href="BuscarEmpleos.html"> VER OFERTAS </a> </button>
				<button type="button" class="btn btn-outline-light btn-lg"><a href="TablaJson/tjson.html"> OFERTAS JSON </a> </button>
				<button type="button" class="btn btn-outline-light btn-lg"><a href="NuevosEmpleos.html"> AGREGAR OFERTA </a> </button>
				</div>

				<div align="center">

				</div>
				<br>
			</div>
			<br>

		<!-- Mas info -->

		<div class="container-fluid padding">
			<div class="row text-center padding">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<i class="fas fa-university"></i>
					<h3>CURSOS</h3>
					<p>Investigación</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<i class="fab fa-connectdevelop"></i>
					<h3>CONEXIONES</h3>
					<p>Redes de contacto</p>
				</div>
				<div class="col-sm-12 col-md-4">
					<i class="fas fa-graduation-cap"></i>
					<h3>MI PRIMER EMPLEO</h3>
					<p>¿Ya hiciste tus practicas? <br> Te damos la opcion de un primer empleo</p>
				</div>
			</div>
			<hr class="my-4">
		</div>

		<!-- Sección de 2 Columnas -->
		<div class="container-fluid padding">
			<div class="row padding">
				<div class="col-lg-6">
					<h2>Somos tú aliado</h2>
					<p>
						Es bien sabido por todos que los candidatos tienen en cuenta, además del salario, diferentes aspectos positivos 	  que les brinda la empresa a la que deciden postularse para alguna vacante, es decir, los beneficios laborales.
						<br>
						<br>
						Entre esos encontramos las oportunidades de carrera, el perfil del equipo, el posicionamiento de la empresa en su sector, el balance de vida que ofrece y, por último, pero no menos importante, los beneficios que tendrá.
						<br>
						<br>
						No hay nada mejor que mostrar lo mejor de lo que somos y también de lo que brindamos para tener colaboradores altamente motivados al interior de nuestras plantillas. De esta manera es más sencillo que se sientan comprometidos con los objetivos de nuestra empresa , que disfruten desarrollando su trabajo y que nos ayuden mejorar nuestra reputación de marca empleadora, nuestro Employer Branding.
					</p>
					<br>
					<button type="button" class="btn btn-primary">INFORMACIÓN
					</button>
				</div>
				<div class="col-lg-6">
					<img src="img/cambiarimagen4.jpg" class="img-fluid" alt="Cambiar Imagen 4">
				</div>
			</div>
		</div>

		<hr class="my-4">

		<!-- Imagen
		<figure>
			<div class="fixed-wrap">
				<div id="fixed">
				<img class="tamaño-imagen-atras" src="img/universe.jpg" alt="Cambiar imagen 5">
				</div>
			</div>
		</figure>
		-->


		<!-- Contacto -->
		<div class="container-fluid padding">
			<div class="row text-center padding">
				<div class="col-12">
					<h2>Contáctanos</h2>
				</div>
				<div class="col-12 social padding">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-whatsapp"></i></a>
				</div>
			</div>
		</div>

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
						<p>publicar oferta</p>
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
