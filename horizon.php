<?php require_once './components/sections/footer/footer_md_xl.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Horizonte</title>
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
			<div class="fondo-gmh">
			</div>
			<div class="separator"></div>
		</header>
		<section>
			<div class="container mb-5 mt-5">
				<div class="w-100 d-flex justify-content-center align-items-center flex-md-row flex-column mb-5 mt-5">
					<img src="./img/icono_GMH.png" alt="Logo_01" style="max-height: 150px;">
					<h3 class="font-weight-bold font-italic text-center text-sm-left">Grupo Musical Horizonte:</h3>
				</div>
				<p class="text-justify">

					Para sus eventos en vivo puede solicitar los servicios del Grupo Musical Horizonte, encargado de la contratación de profesionales del canto, para tus eventos de música en vivo dentro de la ciudad de Caracas, proporcionando un buen ambiente musical para tus clientes, amigos y seres queridos. El Grupo Musical Horizonte es un grupo de diversos musicos que se unieron para ofrecer sus servicios para eventos en vivo en la ciudad de Caracas, trabajando en diferentes modelos de trabajos, en duetos, trietos y hasta cuartetos, en combinaciones básicas de piano, saxofón, bajo y canto. Especializados en Música Latina, Onda Nueva, Jazz y Bossanova. <br><br>

					Para las tarifas funciona igual con el evento de alquiler se cobra el 50% inicial y el 50% en la finalizacion del trabajo. Para más información consulte nuestros términos y condiciones de servicio ubicado en la parte inferior. 
				</p>
			</div>
		</section>
		<section>
			<?php require_once './components/sections/GMH/description.php'; ?>
		</section>
		<section>
			<div class="container-fluid fondo05 mt-5 pb-5">
				<h3 class="font-italic text-center">Demostración en Vivo</h3>
				<div class="text-center mt-3 mb-3 p-5">
					 <video width="500" controls>
	  					<!--<source src="./videos/GHH1.ogv"> -->
	  					<source src="./videos/garota2.webm" type="video/webm">
	  					<!-- <source src="./videos/garota2.ogv" type="video/ogg"> -->
						Your browser does not support the video tag.
					</video> 
				</div>
				<div class="container">
					<p class="text-center">
						El grupo tiene historia, tocamos en las principales establecimientos comerciales en la ciudad de Caracas, siguenos a través de las redes sociales o contactarnos directamente para solicitar servicios.
						<br> <br>
					</p>
					<div class="w-100 d-flex flex-row justify-content-center">
						<button class="btn contact-button" data-toggle="modal" data-target="#modalContact">
							<b class="font-weight-bold font-italic">Contáctar</b>
						</button>
					</div>		
				</div>
			</div>
		</section>


		<section>
			<?php require_once './components/modal/contact.php'; ?>
			<?php require_once './components/modal/terms.php'; ?>
		</section>
		<footer>
			<div class="d-none d-md-block">
				<?= getFooter('https://www.instagram.com/grupomusicalhorizonte/') ?>
			</div>
			<div class="d-block d-md-none">
				<?= getFooterXS('https://www.instagram.com/grupomusicalhorizonte/') ?>
			</div>
		</footer>
	</body>
</html> 