<!DOCTYPE html>
<html lang="es">
<head>
	<title>ELIMINAR GASTRONOMIA</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
	<?php
	include("conect.php");
	$con=mysql_connect($db_host,$db_user,$db_pass)or die("problemas en server");
	mysql_select_db($db_name,$con)or die ("problemas en bd");
	$registro=mysql_query("select * from lenguas where nombre='$_POST[nombre]'")or die ("problema en consulta:".mysql_error());
	while ($reg=mysql_fetch_array($registro)){
		echo $reg['nombre']."<br>";
		echo $reg['hablantes']."<br>";
	}
	?>
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