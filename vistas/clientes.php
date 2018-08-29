<!DOCTYPE html>
<html lang = "es-VE">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="./../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./../css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="./../css/estilos.css">
		<link rel="stylesheet" type="text/css" href="./../css/navbar.css">
		<link rel="stylesheet" type="text/css" href="./../css/clientes.css">
		<link rel="stylesheet" type="text/css" href="./../css/modal.css">
		<title>Nuestros Clientes</title>
		<link rel="shortcut icon" type="image/png" href="../img/Logo 01.png">
		<!-- Scroll -->
		<script type="text/javascript" src="./../js/smooth-scroll.polyfills.min.js"></script>
		<script type="text/javascript" src="./../js/scroll.js"></script>
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

					<a data-scroll href="#audiophone" class="navbar-brand page-scroll">Audiophone</a>

				</div> <!-- Fin del Navbar header -->
					
				<div class="collapse navbar-collapse" id="collapse1">
						
					<ul class="nav navbar-nav">
							
						<li><a href="../index.php" id="elemento">
							<i class="fa fa-home"></i> Inicio</a></li>
							
						<li class="dropdown" role="menu"> 
								
							<a href="" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-star-o"> </i> Servicios
								<span class="caret"></span>
								<ul class="dropdown-menu" role="menu">
									<li><a href="estudio.php"><i class="fa fa-microphone"></i>
										 Estudio de grabación</a></li>
									<li><a href="estudio.php"><i class="fa fa-microphone"></i> Nuestro equipamento</a></li>
									<li><a href="alquiler.php"><i class="fa fa-truck"></i> Alquiler de equipos</a></li> 
									<li class="divider"></li>
									<li><a href="tarifas.php"><i class="fa fa-money"></i> Tarifas</a></li>
								</ul>
							</a>

						</li> 
						<li><a id="elemento" href="#audiophone"><i class="fa fa-users"></i> Clientes</a></li>
						<li><a  id="elemento" href="../#contactanos"><i class="fa fa-phone-square"></i> Contactanos</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
							
							<li><a id="elemento2" href=""><i class="fa fa-facebook-square fa-2x"></i></a></li>
							<!--<li><a id="elemento2" title="Whatsapp" data-toggle="popover" data-container="body" 
								data-placement="bottom" data-content="+58 0416-905-57-06"><i class="fa fa-whatsapp fa-2x"></i></a></li> -->
							<!-- <li><a id="elemento2" href=""><i class="fa fa-twitter-square fa-2x"></i></a></li> -->
							<li><a id="elemento2" href="https://www.instagram.com/estudio_audiophone/"><i class="fa fa-instagram fa-2x"></i></a></li>
					</ul>

				</div>
			</div>
		</nav> <!-- Fin del navbar -->	
		<!-- ================================================================================= -->

		<header id="audiophone">
			<div class="container">
				<h1>nuestros clientes</h1>
			</div>		
		</header> <!-- fin del header -->

		<!-- ====================================================================================== -->
	
		
		<div class="jumbotron">
			<div class="container">
				<div class"row">
					<div class="col-xs-12">
						<p class="text-center">
							Nos encanta guardar las historias de nuestros servicios 
							a los clientes más destacados que lograron su éxito gracias a Audiophone.  
					</p>
					</div>
					
				</div>
			</div>
			
		</div>

		<!-- ====================================================================================== -->


		<section id ="clientes">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<img src="../img/24.JPG" height="252" width="256" class="img-responsive img-circle img-centered">
					<h3>Jesús Moreno &<br>Alfonso Martínez</h3>
					<p>Arreglistas y Músicos <br> Socio y Dueño del Estudio</p>
				</div>
				<div class="col-sm-6">
					<img src="../img/25.JPG" height="252" width="256" class="img-responsive img-circle img-centered">
					<h3>Kent, Alex, Ángel & Omar<br>Remy Band</h3>
					<p>Cantantes profesionales.</p>
				</div>	
			</div>

			<div class="row">
				<div class="col-sm-6">
					<img src="../img/26.JPG" height="252" width="256" class="img-responsive img-circle img-centered">
					<h3>Indira</h3>
					<p>Músicos Profesionales</p>
				</div>

				<div class="col-sm-6">
					<img src="../img/13.JPG" height="260" width="235" class="img-responsive img-circle img-centered">
					<h3>Diveana</h3>
					<p>Cantante profesional</p>
				</div>

				<div class="row">
					<div class="col-sm-6" id="final">
						<img src="../img/22.JPG" height="260" width="210" class="img-responsive img-circle img-centered">
						<h3>Aracelis Fiallo</h3>
						<p>Violinista Profesional</p>
					</div>

					<div class="col-sm-6" id="final">
						<img src="../img/21.JPG" height="252" width="256" class="img-responsive img-circle img-centered">
						<h3>Veronica Fiallo</h3>
						<p>Músico Profesional</p>
					</div>
				</div>
			</div>
		</div>
		</section>

		<!-- Collage de Imagenes -->

		<section id="collage01"></section>
		
		<?php 

			include("./modal.php");
		?>		

		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>

		<script type="text/javascript">
			$(function () {
  		
  			$('[data-toggle="popover"]').popover()

		})
		</script>
	</body>
	<footer>
		<div class="container">
		
		<div class="row">

			<div class="col-md-4">
				<span class="copyright">Copyright &copy; 2018 Audiophone </span><br>
			</div>

			<div class="col-sm-4">
					<ul class="list-inline social-buttons">
						<li><a href=""><i class="fa fa-facebook-square"></i></a></li>
							<!--<li><a title="Whatsapp" data-toggle="popover" data-container="body" 
								data-placement="top" data-content="+58 0416-905-57-06">
								<i class="fa fa-whatsapp"></i></a></li> -->
							<!-- <li><a href="https://www.instagram.com/estudio_audiophone/"><i class="fa fa-twitter-square"></i></a></li> -->
							<li><a href="https://www.instagram.com/estudio_audiophone/"><i class="fa fa-instagram"></i></a></li>
					</ul>
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
