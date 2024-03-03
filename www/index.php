<!DOCTYPE html>
<html lang="es">
	<head>
		<title>PHP-MySQL Docker environment</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="https://robertsallent.com/css/generic.css">
	</head>
	<body>
		<h1>It Works!</h1>
		<h2>Apache con php ha arrancado correctamente</h2>
		<p>Si puedes ver esto, significa que el servidor de Apache con php ha arrancado correctamente
		dentro de su contenedor de Docker.</p>
		
		<p>Ahora debes asegurarte que MySQL también ha arrancado sin problemas y está listo, para ello puedes crear
		una nueva conexión con Workbench con los siguientes datos:</p>
		<ul>
			<li>host: <b>localhost</b></li>
			<li>port: <b>3306</b></li>
			<li>user: <b>root</b></li>
			<li>pass: <b>dbpass</b></li>
		</ul>
		<p>Si también funciona, ya estás preparado para trabajar.</p>
		
		<p>Ejemplo creado por <a href="https://robertsallent.com">Robert Sallent</a> para los cursos que imparte.</p>
		
		<p>Aquí se muestra la información detallada de php con un <i>phpinfo()</i>:</p>
		<?php phpinfo() ?>
	</body>

</html>