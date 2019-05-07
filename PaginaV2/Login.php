<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		 <!-- +++++++++++ -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- Colocamos la etiqueta title para dar titulo a la pagina -->
		<title>Login</title>
		<!-- Agregar icono de la página-->
		<link rel="shortcut icon" type="image/x-icon" href="Img/LogotipoPracticasColombia.ico">
		<!--Bootstrap nav-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="css/LoginCss.css">
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
						<a class="nav-link" data-value="about" href="index.html">Inicio</a> </li>
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

    	<div class="modal-dialog text-center">
			<div class="col-sm-8 main-section">
				<div class="modal-content">
					<div class="col-12 user-img">
						<img src="img/LogotipoPracticasColombia.ico" alt="Logo Prácticas Colombia">
						<form class="col-12" onsubmit="return validar();">
							<div class="form-group">
								<input id="correo" type="email" class="form-control" placeholder="Correo electrónico" required>
							</div>
							<div class="form-group">
								<input id="contraseña" type="password" class="form-control" placeholder="Contraseña" required>
							</div>
							<button type="submit" class="btn"><i class="fas "></i>ENVIAR</button>
						</form>
						<div class="col-12 forgot">
							<h10>¿Aún no estas registrado?</h10>
							<a href="registro.html">Registrarte</a>
						</div>
					</div>
				</div> <!--Final del Modal Content-->
			</div>
    	</div>

		<script src="js/login.js" type="text/javascript"></script>
	</body>
</html>
