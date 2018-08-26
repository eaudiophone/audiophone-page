<!DOCTYPE html>
<html lang ="es-VE">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alquiler de equipos</title>
	<link rel="shorcut icon" type="image/png" href="../img/Logo 01.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/alquiler.css">
	<link rel="stylesheet" type="text/css" href="../css/modal.css">
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
									<li><a href="#audiophone"><i class="fa fa-truck"></i> Alquiler de equipos</a></li>
									<li class="divider"></li>
									<li><a href="tarifas.php"><i class="fa fa-money"></i> Tarifas</a></li>
								</ul>
							</a>

						</li>

						<li><a id="elemento" href="clientes.php"><i class="fa fa-users"></i> Clientes</a></li>
						<li><a  id="elemento" href="../#contactanos"><i class="fa fa-phone-square"></i> Contactanos</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
							
							<li><a id="elemento2" href=" https://www.facebook.com/estudio.audiophone">
								<i class="fa fa-facebook-square fa-2x"></i></a></li>
							<!--<li><a id="elemento2" title="Whatsapp" data-toggle="popover" data-container="body" 
								data-placement="bottom" data-content="+58 0416-905-57-06"><i class="fa fa-whatsapp fa-2x"></i></a></li> -->
							<!-- <li><a id="elemento2" href=""><i class="fa fa-twitter-square fa-2x"></i></a></li> -->
							<li><a id="elemento2" href="https://www.instagram.com/estudio_audiophone/"><i class="fa fa-instagram fa-2x"></i></a></li>
					</ul>

				</div>
			</div>
		</nav> <!-- Fin del navbar -->	

	<!-- ======================================================================================= -->

	<header id="audiophone">
		<div class="container-fluid">
			<div class="row">
				<img src="./../img/Imagen0096.jpg" class="img-responsive" id="reducir">
			</div>
		</div>
	</header>


	<section id="intro">
		<div class="jumbotron">
			<h1>alquiler de equipos</h1>
			<p>
				Tambien ofrecemos servicio de alquier de equipos desde sonidos de grupos musicales
				hasta minitecas para sus fiestas y eventos en la ciudad de Caracas. Contáctatanos para solicitar un presupuesto. 
			</p>
			<center>
				<a href="../#contactanos" type="button" class="btn btn-default btn-lg" id="boton4">
					Contáctanos
				</a>
			<center>
		</div>
	</section>

	<section id="alquiler">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2>¿que paquete ofrecemos?</h2>
				</div>

				<div class="col-sm-3 text-center">
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-music fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Sonido</h4>
					<p>Incluye todo tipo de salida de audio desde sub-bajo, monitores, satelites
						y cornetas de alta gamma para ambientar sus fiestas y eventos</p>
				</div>
				<div class="col-sm-3 text-center">

					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-headphones fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Display</h4>
					<p>
						Tenemos dispositivos de salidas de audio como mezcladores y consolas para
						minitecas
					</p>
				</div>
				<div class="col-sm-3 text-center">

					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Luces</h4>
					<p>
						Incluye todo tipo de luces para dar vida a sus eventos nocturnos.
					</p>	
				</div>
				<div class="col-sm-3 text-center">

					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-truck fa-stack-1x fa-inverse"></i>
					</span>
					<h4>Transporte</h4>
					<p>
						Todo el servicio de alquiler, incluye transporte de los equipos. 
					</p>	
				</div>
			</div>
		</div>

	</section>

	<!-- ============================================================================= -->

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

<!-- ================================================================ -->

<footer>

		<div class="container-fluid">
			<div class="row text-center">
				<div class="col-sm-4">
					<span class="copyright">
						Copyright &copy;2018 Audiophone 
					</span><br>
				</div>

				<div class="col-sm-4">
					<ul class="list-inline social-buttons">
						<li><a href="https://www.facebook.com/estudio.audiophone"><i class="fa fa-facebook-square"></i></a></li>
							<!--<li><a title="Whatsapp" data-toggle="popover" data-container="body" 
								data-placement="top" data-content="+58 0416-905-57-06">
								<i class="fa fa-whatsapp"></i></a></li> -->
							<!-- <li><a href=""><i class="fa fa-twitter-square"></i></a></li> -->
							<li><a href="https://www.instagram.com/estudio_audiophone/"><i class="fa fa-instagram"></i></a></li>
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