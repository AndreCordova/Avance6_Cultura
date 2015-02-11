<!DOCTYPE html>
<html lang="es">
<head>
	<title>INSERTAR LENGUAS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
	<?php
	include("conect.php");
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['hablantes']) && !empty($_POST['hablantes']))
	{
		$con=mysql_connect($db_host,$db_user,$db_pass)or die("problemas al conectar");
		mysql_select_db($db_name,$con)or die ("problemas al conectar la bd");
		mysql_query("insert into lenguas (nombre, hablantes) values ('$_POST[nombre]', '$_POST[hablantes]')",$con);
		echo "Datos insertados";
	}else{
		echo "Problemas al insertar datos";
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