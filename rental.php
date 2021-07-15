<?php require_once './components/sections/footer/footer_md_xl.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Alquiler</title>
		<link rel="shortcut icon" type="image/png" href="./img/Logo_01.png">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/styles.css">
		<script src="https://kit.fontawesome.com/a8e23f8d34.js" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body class="audiophone-page-dark-theme">
		<?php require_once './components/navbar/navbar.php'; ?>
		<header>
			<div class="fondo-rental"></div>
			<div class="separator"></div>
		</header>
		<section>
			<div class="container mb-5 mt-5">
				<div class="w-100 d-flex justify-content-center align-items-center flex-md-row flex-column mb-5 mt-5">
					<img src="./svg/Cornetas.svg" alt="monitoreo" style="max-height: 120px;">
					<h3 class="font-weight-bold font-italic ml-4 mb-0">Alquiler de equipos</h3>
				</div>
				<p class="text-justify">

					Ofrecemos servicio de alquiler de equipos desde sonidos de grupos musicales, minitecas e instrumentos para dar vida y color a sus eventos en la ciudad de Caracas. Preparados y listos para la cualquier celebración.
					Buscamos ofrecer el mejor servicio de calidad al momento de realizar la solucitud de alquiler, por ello contamos con una gran varidad de equipos que puede disponer para hacer que su evento logre impactar a sus
					invitados. <br> <br>

					Desde pequeñas celebraciones hasta grandes eventos, cumplimos con 3 aspectos sencillos: equipo, instrumentos y transporte, que ya viene incluido cuando solicita el servicio. Su tarifa varia de acuerdo al equipo a solicitar, al contactar y aceptar se generará un contrato de servicios, deberá cancelar el 50% inicial y el 50% al final del evento. Para más información consulte nuestros términos y condiciones de servicio ubicado en la parte inferior.

				</p>
			</div>
		</section>

		<section>
			<?php require_once './components/sections/rental/description.php'; ?>
		</section>
		<section>
			<?php require_once './components/modal/contact.php'; ?>
			<?php require_once './components/modal/terms.php'; ?>
		</section>
		<footer class="mt-5">
			<div class="d-none d-md-block">
				<?= getFooter('https://www.instagram.com/estudio_audiophone/') ?>
			</div>
			<div class="d-block d-md-none">
				<?= getFooterXS('https://www.instagram.com/estudio_audiophone/') ?>
			</div>
		</footer>
	</body>
</html>
