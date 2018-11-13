<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./css/style.css">
	<title>Files Explorer</title>
</head>
<body>
	<header>
		<p id="path"></p>
	</header>
	<main>
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