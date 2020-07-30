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
	<?php require './components/navbar/navbar.php'; ?> <!-- navbar -->
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
							El estudio Audiophone son salas de grabaciones preparadas con equipos profesionales y personal capacitado para dar una calidad impecable a tus grabaciones de audio. Dentro de nuestras instalaciones realizamos todo tipo de grabaciones, mezclas y remasterizaciones dentro de un ambiente íntimo.
						</p>
					</div>
					<div class="col-sm-4 col-12 services">

						<div class="text-center mt-3 mb-5">
							<img src="./img/mezcla.png" class="img-fluid">
						</div>

						<h4 class="text-center">Alquiler de Equipos para Fiestas y Eventos</h4>
						<p class="text-justify mt-4">
							Ofrecemos servicio de alquiler de equipos desde sonidos de grupos musicales, minitecas e instrumentos para dar vida y color a sus eventos en la ciudad de Caracas. Preparados y listos para la cualquier celebración.
						</p>
					</div>
					<div class="col-sm-4 col-12 services">

						<div class="text-center mt-3 mb-5">
							<img src="./img/masterizacion.png" class="img-fluid">
						</div>

						<h4 class="text-center">Contratación de Grupos Músicales</h4>
						<p class="text-justify mt-4">
							Poseemos contacto directo con el Grupo Musical Horizonte, encargada de la contratación de profesionales del canto, para tus eventos de música en vivo dentro de la ciudad de Caracas, proporcionando un buen ambiente musical para tus clientes, amigos y seres queridos.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container-fluid pb-5 pt-5 d-none d-xl-block"> <!-- services-only-xl -->
			<?php require './components/sections/services_xl.php'; ?>	
		</div>
	</section>
	<section>
		<h3 class="text-center font-italic mb-5">Clientes y Amigos</h3>
		<div class="container pb-5 pt-5 mb-5 clients">
			<div class="row">
				<div class="col-sm-6 col-12 text-center">
					colocar video o audio
				</div>
				<div class="col-sm-6 col-12 padding">
					<p class="text-justify">
						Conservamos los mejores momentos en la labor de los servicios de nuestros clientes, 
						tenemos historias que contar y queremos que tú también consideres al equipo Audiophone como 
						tu mejor opción al momento de realizar algún proyecto músical, evento o carrera artistica, 
						colaboramos con el desarrollo de talento a muchos profesionales del canto. <br><br>

						Por eso decimos que una acción vale más que mil palabras por ello dejamos demostraciones, para 
						que puedas conocer nuestro trabajo y puedas comprobar ti mismo si quieres trabajar con
						nosostros. Además siguenos en nuestras redes sociales o contactanos para saber más. 
					</p>
					<div class="d-flex flex-row justify-content-center mt-5">
						<a href="#contacto" style="color: white">
							<i class="fa fa-instagram fa-2x"></i>
						</a>
						<a href="#contacto" style="color: white">
							<i class="fa fa-facebook fa-2x ml-5 mr-5"></i>
						</a>
						<button class="btn contact-button" data-toggle="modal" data-target="#modalTerms">
							<b class="font-weight-bold font-italic">Contáctar</b>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<h3 class="text-center font-italic mb-5">Encuentrános en:</h3>
		<?php require './components/maps/maps.php'; ?>
		<div class="d-none d-xl-block"> <!-- only-xl -->
			<div class="row mt-4">
				<div class="col-sm-5 col-12 fondo-l">
					<div class="d-flex flex-row justify-content-end align-items-center">
						<div class="text-center" style="width: 50%">
							<p class="p-0 mr-5 text-right font-italic" style="font-size: 18px">
								Lunes a Viernes <br>
								Desde las <br>
								10:00am a las 3:00pm
							</p>

						</div>

						<div class="d-flex flex-row justify-content-end">
							<div class="circle-l-red d-flex flex-column justify-content-center align-items-center">
								<span>Horarios</span>	
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-2"></div>
				<div class="col-sm-5 col-12 fondo-r">
					<div class="d-flex flex-row justify-content-start align-items-center">
						<div class="circle-l-blue d-flex flex-column justify-content-center align-items-center">
							<span>Dirección</span>
						</div>
						<div class="text-center" style="width: 50%">
							<p class="p-0 font-italic text-left ml-5" style="font-size: 18px">
								Av. Principal de Manicomio <br>
								Esq. Trinchera <br>
								Casa N°. 152 <br>
								La Pastora - Caracas
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="mt-4">
		<div class="d-flex flex-row justify-content-between" style="padding: 20px;">
			<div class="font-italic">Design for: 
				<a class="font-special" href="https://gabmart1995.github.io/" target="_blank">Gabriel Martinez</a> & 
				<span class="font-special">Darianna Martinez</span>
			</div>
			<div class="links">
				<a href="#contacto">
					<i class="fa fa-instagram fa-2x"></i>
				</a>
				<a href="#contacto">
					<i class="fa fa-facebook fa-2x"></i>
				</a>
			</div>
			<div class="terms" data-toggle="modal" data-target="#modalTerms">
				Términos y condiciones del Servicio
			</div>
		</div>
	</footer>
	<section> <!-- modals -->
		<?php require './components/modal/contact.php'; ?>
		<?php require './components/modal/terms.php'; ?>
	</section>
</body>
</html>