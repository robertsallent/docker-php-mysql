<!DOCTYPE html>
<html lang="es">
	<head>
		<title>PHP-MySQL Docker environment</title>
		
		<meta charset="UTF-8">
		<meta description="Página de prueba del ejemplo de Docker para clase">
		<meta author="Robert Sallent">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		
		<link rel="shortcut icon" href="/images/small.png" type="image/png">	
		<link rel="stylesheet" type="text/css" href="https://fastlight.org/css/base.css">
	</head>
	<body>
		<header id="main-header" class="flex-container">
			<figure id="logo" class="flex1">
				<img src="images/logo.png">
			</figure>
    		<hgroup class="flex5">
        		<h1>It Works!</h1>
        		<p>Apache con php ha arrancado correctamente</p>
    		</hgroup>
		</header>
		
		<main>
			<h1>Todo listo</h1>
		
			<section id="instrucciones">
				<h2>Instrucciones</h2>
				
        		<p>Si puedes ver esto, significa que el servidor de Apache con php ha arrancado correctamente
        		dentro de su contenedor de Docker.</p>
        		
        		<p>Asegúrate que MySQL también ha arrancado sin problemas y está listo, 
        		para ello puedes crear una nueva conexión con los siguientes datos:</p>
        		<ul>
        			<li>host: <b>mysql</b></li>
        			<li>port: <b>3306</b></li>
        			<li>user: <b>root</b></li>
        			<li>pass: <b>root</b></li>
        			<li>database (para probar): <b>test</b></li>
        		</ul>
        		
        		<p>Si lo prefieres, puedes usar  
        			<a class="button" href="http://localhost:8081" target="_blank">phpmyadmin</a>
        		</p>
        		
        		<p>Ya estás preparado para trabajar, coloca tu proyecto en la 
        		carpeta <b>src</b>. El <i>DocumentRoot</i> está configurado para la
        		carpeta <b>public</b> así que tu <i>index.php</i> debe estar
        		en <i>/src/public/index.php</i>.
        		
        		<p>Los detalles de la versión de 
        		   <b>php</b> instalada los encontrarás en <a href="phpinfo.php">este 
        		   enlace</a>.</p>
    		</section>
    	</main>
		<footer id="main-footer">
			<p>Ejemplo creado por <a href="https://robertsallent.com" rel="author">Robert Sallent</a> para los cursos que imparte.</p>
			<p>Más información en <a href="https://www.linkedin.com/in/robert-sallent-l%C3%B3pez-4187a866/">LinkedIn</a>.</p>
		</footer>
	</body>

</html>