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
		<section>
			<?php require_once './components/modal/contact.php'; ?>
			<?php require_once './components/modal/terms.php'; ?>
		</section>
		<section></section>
		<section></section>
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