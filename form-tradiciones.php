<!DOCTYPE html>
<html lang="es">
<head>
	<title>INSERTAR TRADICIONES</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
	<?php
	include("conect.php");
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['fecha']) && !empty($_POST['fecha']) && isset($_POST['descripcion']) && !empty($_POST['descripcion']))
	{
		$con=mysql_connect($db_host,$db_user,$db_pass)or die("problemas al conectar");
		mysql_select_db($db_name,$con)or die ("problemas al conectar la bd");
		mysql_query("insert into tradiciones (nombre, fecha, descripcion) values ('$_POST[nombre]', '$_POST[fecha]', '$_POST[descripcion]')",$con);
		echo "Datos insertados";
	}else{
		echo "Problemas al insertar datos";
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