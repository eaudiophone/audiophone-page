<?php  
	
$path = 'http://'. $_SERVER['HTTP_HOST']. '/audiophone-page/';

/* sintaxis HEREDOC string 

	La sintaxis tiene una serie de advertencias que debes de seguir.

	1.- Los identificadores debe empezar en la primera columna de la 
	nueva linea.

	2.- Debe contener solo caracteres alfanúmericos y guiones bajos,
	empezar con un carácter alfabético o un guión bajo.

	3.- la línea con el identificador de cierre no debe contener ningún otro carácter, excepto un punto y coma (;). Esto, en especial, significa que el identificador no debe estar sangrado, y que no debe existir ningún espacio ni tabulación antes o después del punto y coma. Es muy importante observar que el primer carácter antes del identificador de cierre debe ser un salto de línea definido por el sistema operativo local. 

*/

$navbar = <<<NAVBAR

<nav class="navbar sticky-top navbar-expand-lg navbar-light bg" id="cambio">

	<!-- only-xs -->
	<div class="p-0 m-0 d-xs w-100"> 
		<div class="p-0 m-0 d-flex fle-row justify-content-between align-items-center">
			<img src="./img/logoEstudioAudiophoneTranspBlanco.png" class="logo-brand">
			<span class="font-italic font-weight-bold" style="font-size: 14px;">Estudios Audiophone</span>
			<button class="navbar-toggler" style="border: none;" type="button" data-toggle="collapse" 
				data-target="#menu-responsive" aria-controls="menu-responsive" 
				aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars bars"></i>
			</button>
		</div>
	</div>

	<div class="d-xs w-100"> 
		<div class="collapse navbar-collapse" id="menu-responsive">
			<div class="navbar-nav link-center" >
				<a 
					class="nav-item nav-link" 
					href="${path}"
				>
					<i class="fa fa-home"></i>
					<span class="ml-3 font-menu-xs">Inicio</span>
				</a>
				<a 
					class="nav-item nav-link" 
					href="${path}studio.php"
				>
					<i class="fa fa-microphone"></i>
					<span class="ml-3 font-menu-xs">Estudio</span>
				</a>
				<a class="nav-item nav-link" href="${path}horizon.php">
					<i class="fa fa-list-ul"></i>
					<span class="ml-3 font-menu-xs">Horizonte</span>
				</a>
				<a class="nav-item nav-link" href="${path}#maps">
					<i class="fa fa-map-marker"></i>
					<span class="ml-3 font-menu-xs">Ubicación</span>
				</a>
				<a class="nav-item nav-link" href="#">
					<i class="fa fa-instagram"></i>
					<span class="ml-3 font-menu-xs">Instagram</span>
				</a>
				<a class="nav-item nav-link" href="#">
					<i class="fa fa-facebook"></i>
					<span class="ml-3 font-menu-xs">Facebook</span>
				</a>
				
				<button class="btn contact-button" data-toggle="modal" data-target="#modalContact">
					<b class="font-weight-bold font-italic">Contáctar</b>
				</button>
			</div>
		</div>
	</div>

	<!-- others devices sm-xl -->
	<div class="p-0 m-0 d-sm d-flex flex-row justify-content-between w-100">  
		<div class="p-0 m-0" style="width: 50vw;">
			<img src="./img/logoEstudioAudiophoneTranspBlanco.png" class="logo-brand">
			<span class="font-italic font-weight-bold font-20 ml-3">Estudios Audiophone</span>
		</div>
		
		<div class="d-sm w-100 d-flex flex-row justify-content-end align-items-center links">
			<a href="${path}">
				<i class="fa fa-home fa-2x"></i>
			</a>
			<a href="${path}studio.php">
				<i class="fa fa-microphone fa-2x"></i>
			</a>
			<a href="${path}horizon.php">
				<i class="fa fa-list-ul fa-2x"></i>
			</a>
			<a href="${path}#maps">
				<i class="fa fa-map-marker fa-2x"></i>
			</a>
			<a href="#">
				<i class="fa fa-instagram fa-2x"></i>
			</a>
			<a href="#">
				<i class="fa fa-facebook fa-2x"></i>
			</a>
			<button class="btn contact-button" data-toggle="modal" data-target="#modalContact">
				<b class="font-weight-bold font-italic">Contáctar</b>
			</button>
		</div>
	</div>
</nav>

NAVBAR;

echo $navbar;
	
?>