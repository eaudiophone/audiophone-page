<?php require_once './components/sections/footer/footer_md_xl.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Audiophone</title>
		<link rel="shortcut icon" type="image/png" href="./img/Logo_01.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./css/index.css">
		<link rel="stylesheet" type="text/css" href="./css/navbar.css">
		<link rel="stylesheet" type="text/css" href="./css/media.index.css">
		<script src="https://kit.fontawesome.com/a8e23f8d34.js" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body class="audiophone-page-dark-theme">
		<?php require_once './components/navbar/navbar.php'; ?> <!-- navbar -->
		<header>
			<div class="header-background jumbotron m-0">
				<div class="row h-100">
					<div class="col-sm-4 d-sm-block d-none">
						<div class="text-right">
							<img src="./svg/EA_blanco.svg" alt="EA_blanco" style="height: 250px;">
						</div>
					</div>
					<div class="col-sm-8 col-12 align-self-center">
						<div class="text-center">
							<h1 class="header-title"><b>Estudios Audiophone</b></h1>
							<h2>¿Buscas Plasmar tu Talento?</h2>
							<h4 class="header-title">Graba tu música y se la estrella que quieres mostrar</h4>
							<button class="btn contact-button btn-lg mt-3 button-shadow" data-toggle="modal" data-target="#modalContact">
								<b class="font-weight-bold font-italic">Contactar</b>
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
				<?php require_once './components/sections/services/services_xl.php'; ?>
			</div>
			<div class="contianer-fluid pb-5 pt-5 d-none d-md-block d-xl-none"> <!-- services-only-md-lg -->
				<?php require_once './components/sections/services/services_md.php' ?>
			</div>
			<div class="contianer-fluid pb-5 pt-5 d-block d-md-none"> <!-- services-only-xs-sm -->
				<?php require_once './components/sections/services/services_xs.php' ?>
			</div>

		</section>
		<section>
			<h3 class="text-center font-italic mb-5">Clientes y Amigos</h3>
			<div class="container pb-5 pt-5 mb-5 clients">
				<div class="row">
					<div class="col-md-6 col-12 text-right padding line-s">
						<img src="./img/Collage.jpg" class="w-100 rounded-circle">
					</div>
					<div class="col-md-6 col-12 padding">
						<div class="d-flex flex-column justify-content-center align-items-center h-100">
							<p class="text-justify font-14">
								Conservamos los mejores momentos en la labor de los servicios de nuestros clientes,
								tenemos historias que contar y queremos que tú también consideres al equipo Audiophone como
								tu mejor opción al momento de realizar algún proyecto músical, evento o carrera artistica,
								colaboramos con el desarrollo de talento a muchos profesionales del canto. <br><br>

								Por eso decimos que una acción vale más que mil palabras por ello dejamos demostraciones, para
								que puedas conocer nuestro trabajo y puedas comprobar ti mismo si quieres trabajar con
								nosostros. Además siguenos en nuestras redes sociales o contactanos para saber más.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="fondo05 pb-5" id="maps">
				<h3 class="text-center font-italic mb-5">Encuentrános en:</h3>
				<?php require_once './components/maps/maps.php'; ?>
				<div class="d-none d-xl-block"> <!-- only-xl -->
					<div class="row mt-4">
						<div class="col-5 fondo-l">
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
						<div class="col-5 fondo-r">
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
				<div class="d-none d-md-block d-xl-none"> <!-- only md-lg -->
					<div class="row mt-4">
						<div class="col-sm-6 text-center">
							<p class="p-0 mr-5 text-right font-italic" style="font-size: 18px">
								<span style="text-decoration: underline;">Horarios:</span><br>
								Lunes a Viernes <br>
								Desde las <br>
								10:00am a las 3:00pm
							</p>
						</div>
						<div class="col-sm-6">
							<p class="p-0 font-italic text-left ml-5" style="font-size: 18px">
								<span style="text-decoration: underline;">Dirección:</span><br>
								Av. Principal de Manicomio <br>
								Esq. Trinchera <br>
								Casa N°. 152 <br>
								La Pastora - Caracas
							</p>
						</div>
					</div>
				</div>
				<div class="d-block d-md-none mt-4">
					<p class="p-0 mr-5 text-right font-italic" style="font-size: 18px">
						<span class="bold" style="text-decoration: underline;">Horarios:</span><br>
						Lunes a Viernes <br>
						Desde las <br>
						10:00am a las 3:00pm
					</p>

					<p class="p-0 font-italic text-left ml-5" style="font-size: 18px">
						<span class="bold" style="text-decoration: underline;">Dirección:</span><br>
						Av. Principal de Manicomio <br>
						Esq. Trinchera <br>
						Casa N°. 152 <br>
						La Pastora - Caracas
					</p>
				</div>
			</div>
		</section>
		<section> <!-- modals -->
			<?php require_once './components/modal/contact.php'; ?>
			<?php require_once './components/modal/terms.php'; ?>
		</section>
		<footer>
			<div class="d-none d-md-block">
				<?= getFooter('https://www.instagram.com/estudio_audiophone/') ?>
			</div>
			<div class="d-block d-md-none">
				<?= getFooterXS('https://www.instagram.com/estudio_audiophone/') ?>
			</div>
		</footer>
		<script src="./js/index.js"></script>
	</body>
</html>
