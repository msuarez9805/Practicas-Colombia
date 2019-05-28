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
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Styles2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
     <!-- Barra de Navegación que nos proporciona varias obciones de modificación con bootstrap y permite una gran variedad de clases que se adecuan a las preferencias de las personas -->
    <nav class="navbar navbar-expand-lg fixed-top ">
        <a class="navbar-brand" href="#">PC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-4">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="#licencia_">Inicio</a> </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio" href="#readme_">Acerca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="blog" href="#acercade_">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="team" href="#equipo_">Equipo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="contact" href="#contacto_">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <!--
    * Imagen que representa el logo de cada una de las empresas disponibles por prácticas colombia.
    * Clase referenciada en estilos: 'imagenes'.
    * Alt: depende de la empresa: Logo de
    -->
    <div align="center">
        <img class="imagenes" src="img/avianca.png" alt="Logo de Nestle"  >
    	<br>
    	<div class="container fluid">
    		<br><br>	
			<p>
				AVIANCA S. A. (NYSE: AVH y BVC: PFAVH, IATA: AV, OACI: AVA y denominación: Avianca), (acrónimo de Aerovías del Continente Americano, anteriormente Aerovías Nacionales de Colombia) es la mayor aerolínea de Colombia. Fundada en 1919 con el nombre SCADTA, es la segunda aerolínea más antigua del mundo, después de KLM fundada solo 2 meses antes. Posee la segunda flota más grande de Suramérica, después de la chilena LATAM. Sus centros de conexiones están localizados en los aeropuertos El Dorado (Bogotá), El Salvador (San Salvador) y Jorge Chávez (Lima). Desde estos tres hubs opera vuelos programados y chárteres a Norteamérica, Centroamérica, El Caribe, Sudamérica y Europa. Tiene más de 20 500 empleados y una flota de más de 200 aeronaves, que operan más de 100 destinos en 26 países en América y Europa y ofrece unos 5.100 vuelos semanales. Ofrece conexiones entre destinos operados directamente o a través de acuerdos de código compartido, así como a través de la red Star Alliance.
			</p>
			<!--
			* En este link, se direcciona al archivo: 'eliminar_cookie.php' donde se eliminará la cookie almacenada.
			* Archivo Referenciado: 'eliminar_cookie.php'.
			-->
			<p>
            	<a href="eliminar_cookie.php">Eliminar Cookie</a>
            	<br>
            	<a href="../Session/CerrarSession.php" >Cerrar Sesion</a>
        	</p>
			<br>
		</div>	
		<br>
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63626.38032000817!2d-74.12834834435206!3d4.656569352099093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a9502553bc1%3A0xc810db080ad5d801!2sNestl%C3%A9+de+Colombia!5e0!3m2!1ses!2sco!4v1559016087428!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    	<br><br>
    </div>
</body>
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
			</div>
		</footer>
</html>