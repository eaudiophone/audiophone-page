<!DOCTYPE html>
<html lang = "es-VE">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
		<!-- CSS  personalizado -->
		<link rel="stylesheet" type="text/css" href="./css/index.css">
		<link rel="stylesheet" type="text/css" href="./css/navbar.css"> 
		<link rel="stylesheet" type="text/css" href="./css/modal.css">
		<!-- Favicon-->
		<link rel="shortcut icon" type="image/png" href="./img/Logo 01.png">
		<title>Estudio Audiophone</title>

		<!-- Scroll -->
		<script type="text/javascript" src="./js/smooth-scroll.polyfills.min.js"></script>
		<script type="text/javascript" src="./js/scroll.js"></script>

	</head>
	<body>
			
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
					
			<!-- Creacion del menú de código -->

			<div class="navbar-header page-scroll">

				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#collapse1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</button>

					<a data-scroll href="#inicio" class="navbar-brand page-scroll">Audiophone</a>

				</div> <!-- Fin del Navbar header -->
					
				<div class="collapse navbar-collapse" id="collapse1">
						
					<ul class="nav navbar-nav">
							
						<li><a href="#inicio" id="elemento">
							<i class="fa fa-home"></i> Inicio</a></li>
							
						<li class="dropdown" role="menu"> 
								
							<a href="" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-star-o"> </i>  Servicios
								<span class="caret"></span>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#estudio"><i class="fa fa-microphone"></i>
										 Estudio de grabación</a></li>
									<li><a href="#equipamento"><i class="fa fa-microphone"></i>  Nuestro equipamento</a></li>
									<li><a href="#alquiler"><i class="fa fa-truck"></i> Alquiler de equipos</a></li>
									<li class="divider"></li>
									<li><a data-scroll href="#tarifas"><i class="fa fa-money"></i> Tarifas</a></li>
								</ul>
							</a>

						</li>

						<li><a id="elemento"  data-scroll href="#clientes"><i class="fa fa-users"></i>  Clientes</a></li>
						<li><a data-scroll href="#contactanos" id="elemento"><i class="fa fa-phone-square"></i> Contactanos</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
							
							<li><a id="elemento2" href=""><i class="fa fa-facebook-square fa-2x"></i></a></li>
							
							<!--<li>
								<a id="elemento2" title="Whatsapp" data-toggle="popover" data-container="body" 
								data-placement="bottom" data-content="+58 0416-905-57-06">
								<i class="fa fa-whatsapp fa-2x"></i></a>
							</li>-->
							<li><a id="elemento2" href=""><i class="fa fa-twitter-square fa-2x"></i></a></li>
							<li><a id="elemento2" href=""><i class="fa fa-instagram fa-2x"></i></a></li>
					</ul>

				</div>
			</div>
		</nav> <!-- Fin del navbar -->	
		
		<!-- Carrusel de imagenes -->

	<section id="inicio">

		<div class="carousel slide" id="carousel1" data-ride="carousel">

		<!-- Indicadores -->

			<ol class="carousel-indicators">
				
				<li data-target="#carousel1" data-slide-to="0" class="active"></li>
				<li data-target="#carousel1" data-slide-to="1" class="active"></li>
				<li data-target="#carousel1" data-slide-to="2" class="active"></li>
				<li data-target="#carousel1" data-slide-to="3" class="active"></li>
				<li data-target="#carousel1" data-slide-to="4" class="active"></li>

			</ol>

			<div class="carousel-inner" role="listbox">

				<div class="item active"> <!-- Elemento 1 -->
					<img src="img/consola2.jpg" height="2848" width="4288" class="img-responsive" alt="first slide">
						<div class="carousel-caption">
							<h1>ESTUDIO AUDIOPHONE</h1>
							<h4 class="nav-text">¡Estudios Audiophone el que Plasma tu Talento en una Grabación!</h4><br>
						</div>
					</div>

				<div class="item"> <!-- Elemento 2 -->
					<img src="img/bajo.jpg"  height="2848" width="4288" class="img-responsive" alt="second slide">
					<div class="carousel-caption">
						<h1>ESTUDIO AUDIOPHONE</h1>
						<h4 class="nav-text">Amplia variedad de instrumentos músicales para sus grabaciones</h4>
						<p><a href="vistas/estudio.php" class="btn btn-lg btn-info" id="boton2">Ver más</a></p>
					</div>
				</div>


				<div class="item"> <!-- Elemento 3 -->
					<img src="img/lp.jpg" height="2848" width="4288" class="img-responsive" alt="third slide">
						<div class="carousel-caption">
							<h1>ESTUDIO AUDIOPHONE</h1>
							<h4 class="nav-text">Respetamos la música antigua y moderna de todas la generaciones</h4>
							<!--<p><a href="vistas/clientes.php" id="boton2" class="btn btn-lg btn-info">Ver más</a></p>-->
						</div>
				</div>


				<div class="item"> <!-- Elemento 4 -->
					<img src="img/timbales.jpg" height="2848" width="4288" class="img-responsive" alt="fourth slide">
						<div class="carousel-caption">
							<h1>ESTUDIO AUDIOPHONE</h1>
							<h4 class="nav-text">Ofrecemos servicio de alquiler de equipos para fiestas y eventos</h4>
							<p><a href="vistas/alquiler.php" class="btn btn-lg btn-info" id="boton2">Ver más</a></p>
						</div>
				</div>

				<div class="item"> <!-- Elemento 5 -->
					<img src="img/consola1.jpg" height="2848" width="4288" class="img-responsive" alt="fifth slide">
						<div class="carousel-caption">
							<h1>ESTUDIO AUDIOPHONE</h1>
							<h4 class="nav-text">Tecnología analogica y Digital</h4><br>
						</div>
				</div>

			</div>

			<!-- Controles -->

			<a href="#carousel1" class="left carousel-control" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previo</span>
			</a>

			<a href="#carousel1" class="right carousel-control" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>

		<!-- Fin del carrusel -->
	</section>

		

		<section id="intro">

			<div class="container">
				<div class="row">
					<div class="col-sm-4">

						<img src="img/disco.png" height="112" width="112" alt="vista1" class="img-responsive img-centered"><br>
						<h4>Grabaciones</h4><br>
						<p class="inferior">
							Dentro de nuestras instalaciones realizamos todo tipo de grabaciones con 
							alta calidad profesional e impecable con las reproduciones de audio.
						</p>
					
					</div>

					<div class="col-sm-4">
						<img src="img/mezcla.png" height="112" width="112" alt="vista2" class="img-responsive img-centered"><br>
						<h4>Mezclas</h4><br>
						<p class="inferior">
							En el mismo estudio realizamos mezclas de todo tipo de música, con su respectiva calidad
							de audio. 
						</p>
					</div>

					<div class="col-sm-4">
						<img src="img/masterizacion.png" height="112" width="112" class="img-responsive img-centered"><br>
						<h4>Masterizaciones</h4><br>
						<p>
							Además se realizan materizaciones de audio con calidad profesional correspondiente a la peticion
							del cliente.
						</p>
					</div>
				</div>
			</div>
			
		</section>

		<section id="estudio">

			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h1>EL ESTUDIO</h1>
						<p>
							El Estudio Audiophone es una sala de grabación con equipos profesionales y personal 
							calificado para dar una calidad impecable en sus grabaciones de audio. 
						</p>
					</div>
				</div>
					<div class="row">
			
						<!-- col-sm-push-1: desplaza el objeto un lado hacia la derecha  -->	

							<div class="col-sm-10 col-sm-push-1">
								<div class="thumbnail">
									<img src="img/estudio6.jpg" height="3216" width="4288" class="img-responsive" id="imagen">
								
									<div class="caption">
										<a href="#galeria1" class="btn btn-default portfolio-link" type="button" data-toggle="modal">
										<i class="fa fa-eye"></i> Ver detalles
									</a>
									</div>
								
								</div>
							</div>
					</div>
				</div>
			</div>

		</section>

		<section id="equipamento">
			<div class="container-fluid text-center">
				
				<div class="row">
					
					<h1>nuestro equipamento</h1>

					<div class="col-sm-4 col-xs-12">
						<img src="img/caset.png" class="img-responsive img-centered2">
						<a href="vistas/estudio.php" type="button" class="btn btn-default" data-toggle="tooltip"
						data-placement="bottom" title="Más información">Grabaciones</a>
					</div>

					<div class="col-sm-4 col-xs-12">
						<img src="img/mezcla2.png" class="img-responsive img-centered2">
						<a href="vistas/estudio.php" type="button" class="btn btn-default" data-toggle="tooltip"
						data-placement="bottom" title="Más información">Mezclas</a>
					</div>

					<div class="col-sm-4 col-xs-12">
						<img src="img/microfonos.png" class="img-responsive img-centered2">
						<a href="vistas/estudio.php" type="button" class="btn btn-default" data-toggle="tooltip"
						data-placement="bottom" title="Más información">Micrófonos</a>
					</div>
				</div>

				<div class="row" id="inferior">
					<div class="col-sm-4 col-xs-12">
						<img src="img/equipo.png" class="img-responsive img-centered2">
						<a href="vistas/estudio.php" type="button" class="btn btn-default" data-toggle="tooltip"
						data-placement="bottom" title="Más información">Equipos externos</a>
					</div>

					<div class="col-sm-4 col-xs-12">
						<img src="img/monitoreo.png" class="img-responsive img-centered2">
						<a href="vistas/estudio.php" type="button" class="btn btn-default" data-toggle="tooltip"
						data-placement="bottom" title="Más información">Monitoreo</a>	
					</div>

					<div class="col-sm-4 col-xs-12">
						<img src="img/instrumentos.png" class="img-responsive img-centered2">
						<a href="vistas/estudio.php" type="button" class="btn btn-default" data-toggle="tooltip"
						data-placement="bottom" title="Más información">Instrumentos</a>
					</div>
				</div>
			</div>
		</section>

		<!-- Secccion de laquiler -->

		<section id="alquiler">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<h1>alquiler de equipos</h1>
						<h3>
							Tambien ofrecemos servicio de alquier de equipos desde sonidos de grupos musicales
							hasta minitecas para sus fiestas y eventos en la ciudad de Caracas.  
						</h3>
						<center><a href="./vistas/alquiler.php" class="btn btn-default btn-lg" type="button">Más información</a></center>
					</div>
				</div>
			</div>
		</section>  

		<!-- Seccion de los clientes -->

		<section id="clientes">
			<div class="container-fluid">
				<div class="row">
					<h1>clientes del estudio</h1>
					<div class="col-sm-4 col-sm-offset-2">
						<img src="img/02.JPG" id="climg" class="img-responsive img-circle">
					</div>

					<div class="col-sm-4 col-xs-12">
						<h3>Alejandro Lez.</h3>
						<p>Cantante profesional</p>
							<a href="vistas/clientes.php" type="button" class="btn btn-info">Ver más artistas</a>
					</div>

				</div>	
			</div>
		</section>
		
		<!-- Seccion de tarifas -->

		<section id="tarifas">
			<div class="container responsive">
				<div class="row">
					<h1>precios y tarifas</h1>
					
					<div class="col-sm-3">
						<a href="vistas/tarifas.php" type="button" class="btn btn-default"><p>tiempo de estudio</p></a>
					</div>

					<div class="col-sm-3">
						<a href="vistas/tarifas.php" type="button" class="btn btn-default"><p>mezclas</p></a>
					</div>

					<div class="col-sm-3">
						<a href="vistas/tarifas.php" type="button" class="btn btn-default"><p>masterizaciones</p></a>
					</div>

					<div class="col-sm-3">
						<a href="vistas/tarifas.php" type="button" class="btn btn-default"><p>producciones <br> musicales</p></a>
					</div>
				</div>
			</div>
		</section>

		<!-- Sección de contáctanos -->

		<section id="contactanos">
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-4 col-sm-8">
						<h1 class="section-heading">contáctanos</h1>
						<h3 class="section-subheading">¿Preparado para una sesión músical?</h3>
						<p>
							
							Llámenos al número local (0212) 8616101 o al (0416) 9055706<br>
							<br>

							Puede ubicarnos en las Redes Sociales: Facebook, Twitter, <br> 
							Whatsapp e Instagram.
						<p>	
					</div>
						
				</div>
				
		</section>

		<!-- Seccion de dreccion -->

		<section id="direccion">
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h4>Dirección</h4>
								<p>Av. Principal de Manicomio Esq. Trinchera, <br> vaya despues de la bomba
								de gasolina y en la tercera parada del<br> metrobus de Agua Salud. 
								Casa N° 152 La Pastora,<br> Caracas, Venezuela</p>
						</div>

						<div class="col-sm-6">
							<h4>Horario de trabajo:</h4>
							<p>Lunes a Viernes<br>Desde las 10 AM a 7 PM</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Inclusión de las ventanas modales -->
		<?php 

			include('./vistas/modal.php');
		?>	

		<!-- JavaScript -->

		<script src="./js/jquery.js"></script>
		<script src="./js/bootstrap.min.js"></script>

		<script type="text/javascript">
			
			$(function() {

				$('[data-toggle="tooltip"]').tooltip()

		})

			/* Funcion de Javascript de Whatapp */

			$(function () {
  		
  			$('[data-toggle="popover"]').popover()

		})

		</script>
	
	</body>  <!-- Fin del body -->

	<footer>

		<div class="container-fluid">
			<div class="row text-center">
				<div class="col-sm-4">
					<span class="copyright">
						Copyright &copy;2018 Audiophone 
					</span>
				</div>

				<div class="col-sm-4">
					<ul class="list-inline social-buttons">
						<li><a href=""><i class="fa fa-facebook-square"></i></a></li>
							<!--<li><a title="Whatsapp" data-toggle="popover" data-container="body" 
								data-placement="top" data-content="+58 0416-905-57-06">
								<i class="fa fa-whatsapp"></i></a></li> -->
							<li><a href=""><i class="fa fa-twitter-square"></i></a></li>
							<li><a href=""><i class="fa fa-instagram"></i></a></li>
				</div>

				<div class="col-md-4">
				<ul class="list-inline quicklinks">
					<li><a data-toggle="modal" data-target="#privacidad" href="">Políticas de privacidad</a></li>
					<li><a data-toggle="modal" data-target="#condiciones" href="">Condiciones de servicio</a></li>
				</ul>
			</div>
			</div>
		</div>	
	</footer>
	</html>


