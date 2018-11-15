<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./css/style.css">
	<title>Files Explorer</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<header>
		<p id="path"></p>
	</header>
	<main id="main">
		<?php
			include 'php/dir_fct.php';
			include 'php/div_fct.php'; 
		?>
	</main>
	<footer>
		<div id="menu">
			<p>Menu</p>
		</div>
		<div id="back">
			<input type="image" value="Retour" src="img/arrow.svg" alt="">
		</div>
	</footer>
	<script src="./js/script.js"></script>
</body>
</html>