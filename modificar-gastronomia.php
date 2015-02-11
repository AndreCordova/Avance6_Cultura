<!DOCTYPE html>
<html lang="es">
<head>
	<title>ACTUALIZAR GASTRONOMÍA</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
	<?php
	include("conect.php");
	$con=mysql_connect($db_host,$db_user,$db_pass)or die("problemas en server");
	mysql_select_db($db_name,$con)or die ("problemas en bd");
	mysql_query("update gastronomia set nombre='$_POST[nuevo]' where nombre='$_POST[viejo]'",$con) or die (mysql_error());
	echo "Actualizacion correcta";
	?>
	<section>
	</section>
	</header>
	<footer id="pinferior">
		<div class="infor">
			Contactos: 2568546
		</div>
		<div class="derechos">
			Todos los derechos reservados 2015
		</div>
		<div class="logos">
			<img src="images/logo_ecuador.jpg">
			<img src="images/logoAllYouNeed.png">
		</div>
	</footer>	
</body>
</html>