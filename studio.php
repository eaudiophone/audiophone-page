<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Estudio</title>
		<link rel="shortcut icon" type="image/png" href="./img/Logo_01.png">
		<link rel="stylesheet" href="./css/bootstrap-4.0.css">
		<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/styles.css">
		<script src="./js/jquery-3.4.1.js"></script>
		<script src="./js/bootstrap-4.0.js"></script>
	</head>
	<body class="audiophone-page-dark-theme">
		<?php require_once './components/navbar/navbar.php'; ?>
		<header>
			<div class="fondo"></div>
			<div class="separator"></div>
		</header>
		<section>
			<div class="container mb-5 mt-5">
				<div class="w-100 d-flex justify-content-center align-items-center flex-md-row flex-column mb-5 mt-5">
					<img src="./img/microfonos.png" alt="microfonos" class="mr-md-5 icon" style="max-height: 50px;">
					<h3 class="font-italic">Estudio de Grabación:</h3>
				</div>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eum et veritatis suscipit eaque. Necessitatibus labore laboriosam delectus at! Tempore dolores distinctio temporibus odio tenetur nihil culpa sit, itaque harum voluptatum assumenda quam aspernatur beatae laboriosam pariatur quos, deserunt, ex fugiat quo corrupti consequatur excepturi necessitatibus. Deleniti repellat, eos necessitatibus provident architecto voluptatem minus explicabo sed eligendi adipisci rem accusamus. Ab dolorem suscipit eum in! Eveniet excepturi ut ratione debitis est ex aliquam minima hic, maiores ea. Aliquam atque, sint perspiciatis quae adipisci cum minus fugiat aspernatur et dicta non accusamus delectus, veritatis unde ipsa quia illum recusandae ipsam, suscipit provident, ut iure tempora maiores. Nemo nobis quas minus neque ullam ipsa impedit non soluta temporibus, reprehenderit! Saepe, placeat, explicabo. Aut eveniet debitis mollitia amet molestias praesentium beatae illum ex temporibus eos dolorum accusamus ipsum laboriosam alias, veritatis expedita cum deserunt earum, eius minima. Ea maiores quaerat atque saepe quis!
				</p>
			</div>
		</section>
		<section>
			<div class="tab-content">
				<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
					<?php require_once './components/sections/studio/description.php'; ?>
				</div>
				<div class="tab-pane fade" id="galery" role="tabpanel" aria-labelledby="galery-tab">
					<div class="row">
						<p class="w-100 text-center">
							Gallery
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- control content tabs -->
		<ul class="nav justify-content-center mt-5 mb-5" role="tablist">
			<li class="nav-item active" style="margin: 0 !important">
				<a 
					class="nav-link" 
					href="#description" 
					role="tab" 
					aria-controls="profile" 
					aria-selected="true"
					data-toggle="tab"
					id="description-tab"
				>
					Descripción
				</a>
			</li>
			<li class="nav-sep"></li>
			<li class="nav-item">
				<a 
					class="nav-link" 
					id="galery-tab" 
					data-toggle="tab" 
					href="#galery" 
					role="tab" 
					aria-controls="galery" 
					aria-selected="false"
				>
					Galería
				</a>
			</li>
		</ul>

		<section>
			<?php require_once './components/modal/contact.php'; ?>
			<?php require_once './components/modal/terms.php'; ?>
		</section>
		<footer>
			<div class="d-none d-md-block">
				<?php require_once './components/sections/footer/footer_md_xl.php'; ?>
			</div>
			<div class="d-block d-md-none">
				<?php require_once './components/sections/footer/footer_xs_sm.php'; ?>
			</div>
	</footer>
	</body>
</html> 