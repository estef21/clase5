<?php 

function sup($titulo="",$seccion=""){

echo <<<HTML

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="view/style/estilo.css">
	<link rel="stylesheet" type="text/css" href="view/style/css/all.css" />
	<link href="https://fonts.googleapis.com/css?family=Abel|Bree+Serif|Source+Code+Pro&display=swap" rel="stylesheet">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes /">
	<title>$titulo</title>
</head>
<body>

	<div class="contenedor">
	
	<header>Sistema Agenda 2019: $seccion</header>
	
	<nav>
		<a href="index.php?inicio"><i class="fas fa-folder-plus"></i>Nuevo</a>
		<a href="index.php?nosotros"><i class="fas fa-street-view"></i>Contactos</a>
		<a href="#"><i class="fas fa-door-open"></i>Salir</a>
	</nav>
	<section>

HTML;
}

function inferior()
{
	echo <<<HTML
		
	</section>
	<footer>Web Developer: Computacion V (056)212121</footer>

</div>
</body>
</html>

HTML;
}