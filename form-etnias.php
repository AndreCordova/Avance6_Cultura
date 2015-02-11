<!DOCTYPE html>
<html lang="es">
<head>
	<title>INSERTAR ETNIAS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
	<?php
	include("conect.php");
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['habitantes']) && !empty($_POST['habitantes']))
	{
		$con=mysql_connect($db_host,$db_user,$db_pass)or die("problemas al conectar");
		mysql_select_db($db_name,$con)or die ("problemas al conectar la bd");
		mysql_query("insert into etnias (nombre, habitantes) values ('$_POST[nombre]', '$_POST[habitantes]')",$con);
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