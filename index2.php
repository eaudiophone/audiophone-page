<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Audiophone S.A</title>
		<!-- CSS -->
		<link rel="stylesheet" href="./css/bootstrap-4.0.css">
		<link rel="stylesheet" href="./css/index2.css">
	</head>
	<body>
		<!-- =============================== -->
		<!-- 		Navbar 					 -->
		<!-- =============================== -->
		<?php include('./component/navbar.php'); ?>

		<!-- =============================== -->
		<!-- 		Header 					 -->
		<!-- =============================== -->
		<header>
			<div class="container-fluid" id="header">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="d-flex flex-column align-items-center 
						justify-content-center text-center pt-4">
							<h1>Estudios Audiophone</h1>
							<h3 class="pt-3" style="font-style: italic;">
								"El que plasma tu talento en una grabación"
							</h3>
							<div class="pt-3 align-self-center">
								<a href="" class="btn btn-info btn-lg">
									Ver más 
								</a>	
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 p-0">
						<img src="./img/consola2.jpg" class="w-100" alt="imagen">
					</div>
				</div>
			</div>	
		</header>
		<!-- =============================== -->
		<!-- 		Servicios 				 -->
		<!-- =============================== -->
		<section>
			<div class="container-fluid pt-5" id="intro">
				<h2 class="text-center pb-5">Nuestros servicios</h2>
				<div class="row">
					<div class="col-md-4 col-sm-12 text-center">
						<img src="./img/disco.png" class="img img-fluid">
						<h4 class="pt-5">Estudio de Grabación</h4>
						<p class="padding">
							Contamos con un estudio de grabación equipado con mejores herramientas,
							para una calidad de audio impecable en un ambiente íntimo.
						</p>
					</div>
					<div class="col-md-4 col-sm-12 text-center">
						<img src="img/mezcla.png" class="img img-fluid">
						<h4 class="pt-5">Alquiler de Equipos para Fiestas y Eventos</h4>
						<p class="padding">
							Ofrecemos servicio de alquiler de equipos para realizar sonidos a grupos músicales e incluso minitecas para sus fiestas y eventos
							dentro de la ciudad de Caracas.
						</p>
					</div>
					<div class="col-md-4 col-sm-12 text-center">
						<img src="img/masterizacion.png" class="img img-fluid"><br>
						<h4 class="pt-5">Contratación de Grupos Músicales</h4>
						<p class="padding"> 
							Para ofrecer el mejor ambiente en sus fiestas y eventos, contamos con el apoyo de diversos grupos de músicos profesionales. 
						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- =============================== -->
		<!-- 		Comentario 				-->
		<!-- =============================== -->
		<section>
			<div class="row text-center pt-5 pb-5 pl-5 pr-5" id="comentario">
				<div class="col-12">
					<h3 class="comment">
						"Una forma de crear piezas músicales con calidad profesional y 
						con servicio personalizado" 
					</h3>
				</div>
			</div>
		</section>
		<!-- =============================== -->
		<!-- 		Tarifas 					 -->
		<!-- =============================== -->
		<section>
			<div class="container-fluid p-4" id="tarifas">
				<div class="row">
					<!-- Accordion menu -->
					<div class="col-12">
						<div id="accordion">
							<div class="card">
								<div class="card-header text-center">
									<h5 class="mb-0">
        								<button class="btn btn-link" data-toggle="collapse" 
        								data-target="#record" aria-expanded="true" 
        								aria-controls="collapseOne">
         									 Estudio de Grabación
        								</button>
      								</h5>				
								</div>
								<div id="record" class="collapse" data-parent="#accordion">
									<div class="card-body">
										<div class="row">
											<div class="col-md-3 col-sm-12">
												<h5>Incluye:</h5>
												<ul>
													<li>Masterización</li>
													<li>Mezclas</li>
													<li>Producciones Musicales</li>
												</ul>
											</div>
											<div class="col-md-7 col-sm-12">
												<article class="text-justify">
													El precio actual de la hora de grabación puede variar. 
													Según la disponibilidad del cliente se llegará a un 
													acuerdo por ambas partes.
												</article>
											</div>
											<div class="col-md-2 col-sm-12 text-center">
												<h5>Precio:</h5>
												<span class="badge badge-success">Negociable</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header text-center">
									<h5 class="mb-0">
        								<button class="btn btn-link" data-toggle="collapse" 
        								data-target="#rental" aria-expanded="true" 
        								aria-controls="collapseTwo">
         									 Alquiler de equipos
        								</button>
      								</h5>				
								</div>
								<div id="rental" class="collapse" data-parent="#accordion">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-12 col-md-3">
												<h4>Incluye:</h4>
												<ul>
													<li>sub-bajos, monitores y satelites</li>
													<li>Mezcladores y consolas de minitecas</li>
													<li>Luces</li>
													<li>Transporte de equipos</li>
													<li>Presupuesto</li>
												</ul>
											</div>
											<div class="col-sm-12 col-md-7">
												<article class="text-justify">
													Para contratar el servicio de alquiler, se necesita 
													contactar directamente a la empresa, el precio puede 
													variar.
												</article>
											</div>
											<div class="col-sm-12 col-md-2 text-center">
												<h5>Precio:</h5>
												<span class="badge badge-success">Negociable</span>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<div class="card">
								<div class="card-header text-center">
									<h5 class="mb-0">
        								<button class="btn btn-link" data-toggle="collapse" 
        								data-target="#group" aria-expanded="true" 
        								aria-controls="collapseThree">
         									 Grupo Musical
        								</button>
      								</h5>				
								</div>
								<div id="group" class="collapse" data-parent="#accordion">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-12 col-md-3">
												<h5>Incluye:</h5>
												<ul>
													<li>Presupuesto</li>
													<li>Músicos profesionales</li>
													<li>Servicio personalizado</li>
													<li>Servicio de sonido incluido</li>
												</ul>
											</div>
											<div class="col-sm-12 col-md-7">
												<article>
													Para solicitar los servicios del grupo musical,
													 contactar directamente con nosotros.
												</article>
											</div>
											<div class="col-sm-12 col-md-2 text-center">
												<h5>Precio:</h5>
												<span class="badge badge-success">Negociable</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>		
				<!-- Boton Contactanos -->
				<div class="text-center">
					<h4>Si deseas mayor Información:</h4>
					<a href="" class="btn btn-lg btn-primary" type="button">
						Contáctenos
					</a>
				</div>
			</div>
		</section>
		<!-- =============================== -->
		<!-- 		 Contactanos					 -->
		<!-- =============================== -->
		<section>
			<div class="container-fluid p-0">
				<div class="row">
					<div class="col-sm-12 col-md-6 text-center">
						<h4>Dirección</h4>
						<p>
							Av. Principal de Manicomio Esq. Trinchera, <br> 
							vaya despues de la bomba de gasolina y en la tercera parada del <br> 
							metrobus de Agua Salud. Casa N° 152 La Pastora,<br> 
							Caracas, Venezuela
						</p>
					</div>
					<div class="col-sm-12 col-md-6 text-center">
						<h4>Horario de trabajo:</h4>
						<p>
							Lunes a Viernes <br> 
							Desde las 10 AM a 7 PM
						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- =============================== -->
		<!-- 		Footer 					 -->
		<!-- =============================== -->
		<footer>
			<div class="d-flex flex-wrap justify-content-around">
				<div>
					<span>Copyright &copy;2018 Audiophone</span>
				</div>
				<div>
					<a href="">face</a>
					<a href="">inst</a>
				</div>
				<div>
					<a href="">Condiciones</a>
				</div>
			</div>	
		</footer>
		<!-- =============================== -->
		<!-- 		JavaScript 				 -->
		<!-- =============================== -->
		<script src="./js/jquery-3.4.1.js"></script>
		<script src="./js/bootstrap-4.0.js"></script>
	</body>
</html> 