<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Audiophone</title>
	<link rel="shortcut icon" type="image/png" href="./img/Logo_01.png">
	<link rel="stylesheet" href="./css/bootstrap-4.0.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<link rel="stylesheet" type="text/css" href="./css/navbar.css">
	<link rel="stylesheet" type="text/css" href="./css/media.index.css">
	<script src="./js/jquery-3.4.1.js"></script>
	<script src="./js/bootstrap-4.0.js"></script>
</head>
<body class="audiophone-page-dark-theme">
	<?php include './components/navbar/navbar.php'; ?> <!-- navbar -->
	<header> 
		<div class="header-background jumbotron m-0">
			<div class="row h-100">
				<div class="col-sm-4 d-sm-block d-none">
					<div class="text-right">
						<img src="./img/logoEstudioAudiophoneTranspBlanco.png" style="max-height: 250px;">
					</div>
				</div>
				<div class="col-sm-8 col-12">
					<div class="d-flex flex-column justify-content-center align-items-center h-100">
						<hgroup class="text-center">
							<h1 class="header-title"><b>Estudios Audiophone</b></h1>
							<h2>¿Buscas Plasmar tu Talento?</h2>
							<h4 class="header-title">Graba tu música y se la estrella que quieres mostrar</h4>
						</hgroup>	
						<button class="btn contact-button btn-lg mt-3 button-shadow" data-toggle="modal" data-target="#modalContact">
							<b class="font-weight-bold font-italic">Contáctar</b>
						</button>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="fondo">
		<div class="opacity">
			<div class="container pb-5 pt-5">
				<h3 class="text-center font-italic">Servicios</h3>
				<div class="row">
					<div class="col-sm-4 col-12 services">
						
						<div class="text-center mt-3 mb-5">
							<img src="./img/disco.png" class="img-fluid">
						</div>

						<h4 class="text-center">Estudio de Grabación</h4>
						<p class="text-justify mt-4">
							El estudio Audiophone son salas de grabaciones preparadas con equipos profesionales y personal capacitado para dar una calidad impecable a tus grabaciones de audio. Dentro de nuestras instalaciones realizamos todo tipo de grabaciones de forma impecable dentro de un ambiente íntimo.
						</p>
					</div>
					<div class="col-sm-4 col-12 services">

						<div class="text-center mt-3 mb-5">
							<img src="./img/mezcla.png" class="img-fluid">
						</div>

						<h4 class="text-center">Alquiler de Equipos para Fiestas y Eventos</h4>
						<p class="text-justify mt-4">
							Tambien ofrecemos servicio de alquiler de equipos desde sonidos de grupos musicales hasta minitecas para sus fiestas y eventos en la ciudad de Caracas. Proporcionamos buen ambiente musical, contratando profesionales de la musica para tocar y cantar en vivo.   
						</p>
					</div>
					<div class="col-sm-4 col-12 services">

						<div class="text-center mt-3 mb-5">
							<img src="./img/masterizacion.png" class="img-fluid">
						</div>

						<h4 class="text-center">Contratación de Grupos Músicales</h4>
						<p class="text-justify mt-4">
							Audiophone, posee contacto directo con el Grupo Musical Horizonte, encargada de la contratación de profesionales del canto, para tus eventos de música en vivo dentro de la ciudad de Caracas.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section></section>
	<section></section>
	<section></section>
	<section></section>
</body>
</html>