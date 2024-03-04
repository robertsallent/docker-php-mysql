<!DOCTYPE html>
<html lang="es">
	<head>
		<title>PHP-MySQL Docker environment</title>
		
		<meta charset="UTF-8">
		<meta description="Página de prueba del ejemplo de Docker para clase">
		<meta author="Robert Sallent">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		
		<link rel="shortcut icon" href="/images/small.png" type="image/png">	
		<link rel="stylesheet" type="text/css" href="https://robertsallent.com/css/generic.css">
	</head>
	<body>
		<header class="flex-container">
			<figure id="logo" class="flex1">
				<img src="images/logo.png">
			</figure>
    		<hgroup class="flex5">
        		<h1>It Works!</h1>
        		<p>Apache con php ha arrancado correctamente</p>
    		</hgroup>
		</header>
		<p>Si puedes ver esto, significa que el servidor de Apache con php ha arrancado correctamente
		dentro de su contenedor de Docker.</p>
		
		<p>Ahora debes asegurarte que MySQL también ha arrancado sin problemas y está listo, para ello puedes crear
		una nueva conexión con los siguientes datos:</p>
		<ul>
			<li>host: <b>localhost</b></li>
			<li>port: <b>3306</b></li>
			<li>user: <b>root</b></li>
			<li>pass: <b>dbpass</b></li>
		</ul>
		<p>Si también funciona, ya estás preparado para trabajar, los detalles de la versión de 
		   <b>php</b> instalada los encontrarás en <a href="phpinfo.php">este enlace</a>.</p>
		
		<footer>
			<p>Ejemplo creado por <a href="https://robertsallent.com" rel="author">Robert Sallent</a> para los cursos que imparte.</p>
			<p>Más información en <a href="https://www.linkedin.com/in/robert-sallent-l%C3%B3pez-4187a866/">LinkedIn</a>.</p>
		</footer>
	</body>

</html>