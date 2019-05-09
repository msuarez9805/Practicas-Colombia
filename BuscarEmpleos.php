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
		<title>Nuevo Empleo</title>
		<!-- Agregar icono de la página-->
		<link rel="shortcut icon" type="image/x-icon" href="Img/LogotipoPracticasColombia.ico">
		<!--Bootstrap nav-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Enlace Estilos -->
		<link rel="stylesheet" href="css/EstilosTablas.css">
		<link rel="stylesheet" href="css/LoginCss.css">
		<link rel="stylesheet" href="css/EstilosTablas.css">

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


		<!-- Titulos -->
		<div id = "cuadro">
			<center>
				<br>
				<br>
				<h1><strong>PRACTICAS COLOMBIA</strong></h1>
				<h3>Buscar empleo nuevos empleos</h3>
				<div class = "derecha" id = "Buscar"> Buscar <input type = "search" class = "table-filter" data-table = "order-table" placeholder = "Filtrar"></div>
			</center>

		<!-- Tabla -->
		<div class = "datagrid">
			<table class = "order-table table">
							<thead class="thead-dark">
					<tr>
					  <th> EMPRESA</th>
					  <th> CIUDAD</th>
					  <th> CARRERA</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>NESTLË</td><td>BOGOTA</td><td>INGENIERIA DE SISTEMAS</td>
					</tr>
					<tr>
						<td>COMPENSAR</td><td>MEDELLIN</td><td>MEDICINA</td>
					</tr>
					<tr>
						<td>BANCOLOMBIA</td><td>BOGOTA</td><td>ECONOMIA</td>
					</tr>
					<tr>
						<td>BRINSA S.A</td><td>SANTA MARTA</td><td>ADMINISTRACION DE EMPRESA</td>
					</tr>
					<tr>
						<td>ECOPETROL</td><td>CALI</td><td>INGENIERIA QUIMICA</td>
					</tr>
					<tr>
						<td>LÓREAL S.A</td><td>BOGOTA</td><td>IDIOMAS</td>
					</tr>
					<tr>
						<td>UNIVERSIDAD EAN</td><td>BOGOTA</td><td>COMUNICACION SOCIAL</td>
					</tr>
					<tr>
						<td>ECOPETROL</td><td>BOGOTA</td><td>INGENIERIA PRODUCCION</td>
					</tr>
					<tr>
						<td>CRUZ VERDE</td><td>META</td><td>MEDICINA</td>
					</tr>
					<tr>
						<td>AVIANCA</td><td>BOGOTA</td><td>IDIOMAS</td>
					</tr>
					<tr>
						<td>LATAM AIRLINES</td><td>BOGOTA</td><td>ADMINISTRACION DE EMPRESAS</td>
					</tr>
					<tr>
						<td>EVERIS</td><td>CALI</td><td>INGENIERIA DE SISTEMAS</td>
					</tr>
					<tr>
						<td>TEXMODA</td><td>MEDELLIN</td><td>ADMINISTRACION DE EMPRESAS</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</body>
</html>
