<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Alquiler</title>
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
			<div class="fondo-rental"></div>
			<div class="separator"></div>
		</header>
		<section>
			<div class="container mb-5 mt-5">
				<div class="w-100 d-flex justify-content-center align-items-center flex-md-row flex-column mb-5 mt-5">
					<h3 class="font-weight-bold font-italic">Alquiler de equipos:</h3>
				</div>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eum et veritatis suscipit eaque. Necessitatibus labore laboriosam delectus at! Tempore dolores distinctio temporibus odio tenetur nihil culpa sit, itaque harum voluptatum assumenda quam aspernatur beatae laboriosam pariatur quos, deserunt, ex fugiat quo corrupti consequatur excepturi necessitatibus. Deleniti repellat, eos necessitatibus provident architecto voluptatem minus explicabo sed eligendi adipisci rem accusamus. Ab dolorem suscipit eum in! Eveniet excepturi ut ratione debitis est ex aliquam minima hic, maiores ea. Aliquam atque, sint perspiciatis quae adipisci cum minus fugiat aspernatur et dicta non accusamus delectus, veritatis unde ipsa quia illum recusandae ipsam, suscipit provident, ut iure tempora maiores. Nemo nobis quas minus neque ullam ipsa impedit non soluta temporibus, reprehenderit! Saepe, placeat, explicabo. Aut eveniet debitis mollitia amet molestias praesentium beatae illum ex temporibus eos dolorum accusamus ipsum laboriosam alias, veritatis expedita cum deserunt earum, eius minima. Ea maiores quaerat atque saepe quis!
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
				<?php require_once './components/sections/footer/footer_md_xl.php'; ?>
			</div>
			<div class="d-block d-md-none">
				<?php require_once './components/sections/footer/footer_xs_sm.php'; ?>
			</div>
		</footer>
	</body>
</html> 