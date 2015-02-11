<!DOCTYPE html>
<html lang="es">
<head>
	<title>BORRAR LENGUAS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
	<?php
	include("conect.php");
	$con=mysql_connect($db_host,$db_user,$db_pass)or die("problemas en server");
	mysql_select_db($db_name,$con)or die ("problemas en bd");
	$reg=mysql_query("select nombre from lenguas where nombre='$_POST[nombre]'",$con);
	if($re=mysql_fetch_array($reg))
	{
		mysql_query("delete from lenguas where nombre='$_POST[nombre]'",$con);
		echo "Datos eliminados";
	}else{
		echo "Datos no han sido eliminados";
	}

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