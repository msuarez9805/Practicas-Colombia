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
    <!--
    * Imagen que representa el logo de cada una de las empresas disponibles por prácticas colombia.
    * Clase referenciada en estilos: 'imagenes'.
    * Alt: depende de la empresa: Logo de
    -->
    <div align="center">
       <br>
        <img class="imagenes" src="img/bancolombia.jpg" alt="Logo de Nestle"  >
    	<br>
    	<br>
    	<div class="container fluid">
    		<br><br>	
			<p>
				Bancolombia (BVC: BCOLOMBIA, NYSE: CIB) es un grupo financiero multilatino. Su presencia en Centroamérica está distribuida así: Colombia tiene el 72% de la cartera total, Panamá el 13%, El Salvador y Guatemala el 5% cada uno, esto refleja la importancia de cada geografía para la operación como grupo empresarial. El Grupo Bancolombia cuenta con más de 14 millones de clientes.

				En 2018 y luego de nuevo años de su ingreso al Índice Global de Sostenibilidad del Dow Jones, el Grupo Bancolombia ocupa el primer lugar entre las entidades financieras del mundo.

				El centro de operaciones de Bancolombia en Colombia se encuentra en Medellín, sin embargo tiene presencia en el 98% municipios del país a través de más de 11.000 corresponsales bancarios Bancolombia.

				En 2018, cerró el año alcanzando un patrimonio histórico de 24 billones de pesos. El comportamiento de la cartera vencida, a 90 días, presentó un nivel de 3,55% y una cobertura de 180%.

				Su centro de operaciones se encuentra en la ciudad de Medellín. Bancolombia en 2018 consolidó más de 11 millones de clientes en Colombia, que representan el 20 % del mercado bancario colombiano, siendo así el banco más grande de Colombia.
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d90607.72123203518!2d-74.12233040312445!3d4.652214937332815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9c022bd29aed%3A0x28111c23a2f60467!2sBancolombia+Sucursal!5e0!3m2!1ses!2sco!4v1559018055574!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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