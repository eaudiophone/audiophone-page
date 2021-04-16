<?php  

	$env = true;
	$path = 'http://'. $_SERVER['SERVER_NAME']. '/';

	if ( $env ) {
		$path .= 'audiophone-page/';
	}
	
?>

<nav class="navbar sticky-top navbar-expand-lg navbar-light bg" id="cambio">

	<!-- only-xs -->
	<div class="p-0 m-0 d-xs w-100"> 
		<div class="p-0 m-0 d-flex fle-row justify-content-between align-items-center">
			<img src="./img/logoEstudioAudiophoneTranspBlanco.png" class="logo-brand">
			<span class="font-italic font-weight-bold" style="font-size: 14px;">Audiophone</span>
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
					href="<?= $path ?>"
				>
					<i class="fa fa-home"></i>
					<span class="ml-3 font-menu-xs">Inicio</span>
				</a>
				<a 
					class="nav-item nav-link" 
					href="<?= $path ?>studio.php"
				>
					<i class="fa fa-microphone"></i>
					<span class="ml-3 font-menu-xs">Estudio Principal</span>
				</a>
				<a class="nav-item nav-link" href="<?= $path ?>horizon.php">
					<i class="fa fa-music"></i>
					<span class="ml-3 font-menu-xs">Grupo Horizonte</span>
				</a>
				<a class="nav-item nav-link" href="<?= $path ?>rental.php">
					<i class="fa fa-truck"></i>
					<span class="ml-3 font-menu-xs">Servicio de Alquiler</span>
				</a>
				<a class="nav-item nav-link" href="<?= $path ?>#maps">
					<i class="fa fa-map-marker"></i>
					<span class="ml-3 font-menu-xs">Ubicación</span>
				</a>
				<!--<a class="nav-item nav-link" href="#">
					<i class="fa fa-facebook"></i>
					<span class="ml-3 font-menu-xs">Facebook</span>
				</a>  -->
				
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
			<span class="font-italic font-weight-bold font-20 ml-3">Audiophone</span>
		</div>
		
		<div class="d-sm w-100 d-flex flex-row justify-content-end align-items-center links">
			<a href="<?= $path ?>">
				<i class="fa fa-home fa-2x"></i>
			</a>
			<a href="<?= $path ?>studio.php">
				<i class="fa fa-microphone fa-2x"></i>
			</a>
			<a href="<?= $path ?>horizon.php">
				<i class="fa fa-music fa-2x"></i>
			</a>
			<a href="<?= $path ?>rental.php">
				<i class="fa fa-truck fa-2x"></i>
			</a>
			<a href="<?= $path ?>#maps">
				<i class="fa fa-map-marker fa-2x"></i>
			</a>
			<!--<a href="#">
				<i class="fa fa-facebook fa-2x"></i>
			</a> -->
			<button class="btn contact-button" data-toggle="modal" data-target="#modalContact">
				<b class="font-weight-bold font-italic">Contáctar</b>
			</button>
		</div>
	</div>
</nav>
