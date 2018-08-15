<!DOCTYPE html>
<html lang = "es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Servicios y tarifas</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/navbar.css">
		<link rel="shorcut icon" type="image/png" href="../img/Logo 01.png">
		<link rel="stylesheet" type="text/css" href="../css/tarifas.css">

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
								<i class="fa fa-star-o"> </i>Servicios
								<span class="caret"></span>
								<ul class="dropdown-menu" role="menu">
									<li><a href="estudio.php"><i class="fa fa-microphone"></i>
										Estudio de grabación</a></li>
									<li><a href="estudio.php"><i class="fa fa-microphone"></i>Nuestro equipamento</a></li>
									<li><a href="alquiler.php"><i class="fa fa-truck"></i>Alquiler de equipos</a></li>
									<li class="divider"></li>
									<li><a href="tarifas.php"><i class="fa fa-money"></i>Tarifas</a></li>
								</ul>
							</a>

						</li>

						<li><a id="elemento" href="clientes.php"><i class="fa fa-users"></i>Clientes</a></li>
						<li><a  id="elemento" href="../#contactanos"><i class="fa fa-phone-square"></i>Contactanos</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
							
							<li><a id="elemento2" href="https://www.facebook.com/estudio.audiophone?fref=ts"><i class="fa fa-facebook-square fa-2x"></i></a></li>
							<!-- <li><a id="elemento2" title="Whatsapp" data-toggle="popover" data-container="body" 
								data-placement="bottom" data-content="+58 0416-905-57-06"><i class="fa fa-whatsapp fa-2x"></i></a></li> -->
							<li><a id="elemento2" href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
							<li><a id="elemento2" href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
					</ul>

				</div>
			</div>
		</nav> <!-- Fin del navbar -->	

		<!-- ================================================================================= -->

			<header id="audiophone">
				<div class="container">
					<h1>tarifas</h1>
				</div>
			</header>
			
			<div class="jumbotron">
					<p>
					Somos flexibles en nuestras tarifas, especialmente para los más reservados. 
					Nuestra pasión es ayudar a los músicos locales a que realicen grabaciones con impresionante sonido.<br>
					Todas las tarifas incluyen un ingeniero de sonido.
				</p>
				<center><a href="../#contactanos" type="button" class="btn btn-default btn-lg" id="boton1">Contáctanos</a></center>	
			</div>

		<!-- ==================================================================================== -->
		
		<div class="container-fluid" id="contenedor">
			<div class="row">
				<div class="col-sm-6" id="inicio">
					<div class="thumbnail">
						<img src="../img/estudio5.jpg" height="2764" width="4146" class="img-responsive" alt="...">
						<div class="caption">
							<h3>Tiempo de Grabación</h3>
							<h4>Precio: <span class="label label-info">2500 Bs. por hora</span></h4>
							<p>
								La hora hasta la fecha está en 2500 Bs. Pero es mejor llamar a los telefonos
								para preguntar.
							</p>
						</div>
					</div>
				</div>


				<div class="col-sm-6" id="inicio">
					<div class="thumbnail">
						<img src="../img/consola1.jpg" height="2848" width="4288" class="img-responsive" alt="...">
						<div class="caption">
							<h3>Mezclas músicales</h3>
							<h4>Precio: <span class="label label-info">Negociable</span></h4>
							<p>Según la disponbilidad del cliente se llegará de acuerdo por ambas partes podría ser
							por horas o precio paquete.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col-sm-6" id="#final">
					<div class="thumbnail">
						<img src="../img/consola2.jpg" class="img-responsive">
						<div class="caption">
							<h3>Masterización</h3>
							<h4>Precio: <span class="label label-info">Negociable</span></h4>
							<p>Las masterizaciones se cobrá de la misma manera que las mezclas músicales</p>
						</div>	
					</div>
				</div>


				<div class="col-sm-6" id="final">
					<div class="thumbnail">
						<img src="../img/DSCF9455.jpg" height="4288" width="2500" class="img-responsive" id="reducir">
						<div class="caption">
							<h3>Producciones Músicales</h3>
							<h4>Precio: <span class="label label-info">Negociable</span></h4>
							<p>El paquete de producción musical varía según el estimado de piezas y el volumen de 
							instrumentos es recomendable llamar y preguntar.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- ============================================================================================== -->

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
			<div class="row text-center">
				<div class="col-sm-4">
					<span class="copyright">
						Copyright &copy;2018 Audiophone 
					</span><br>
				</div>

				<div class="col-sm-4">
					<ul class="list-inline social-buttons">
						<li><a href="https://www.facebook.com/estudio.audiophone?fref=ts"><i class="fa fa-facebook-square"></i></a></li>
							<!--<li><a title="Whatsapp" data-toggle="popover" data-container="body" 
								data-placement="top" data-content="+58 0416-905-57-06">
								<i class="fa fa-whatsapp"></i></a></li> -->
							<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</div>

				<div class="col-md-4">
				<ul class="list-inline quicklinks">
					<li><a href="">Politicas de privacidad</a></li>
					<li><a href="">Términos de uso</a></li>
				</ul>
			</div>
			</div>
		</div>
	</footer>
</html>