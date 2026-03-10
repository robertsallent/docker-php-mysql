<h1>Entorno PHP + MySQL para pruebas</h1>

<h2>Introducción</h2>

<p>Entorno para el desarrollo y realización de pruebas sobre Docker para aplicaciones web, que incluye:</p>

- MySQL 8.0
- PHP 8.2
- phpmyadmin
- postfix

<p>Está creado por Robert Sallent para las formaciones que imparte en el ámbito de desarrollo de aplicaciones web con PHP, en distintos centros de formación, entre los que se incluyen los Centros de Innovación y Formación Ocupacional (CIFO) de la Generalitat de Catalunya.</p>

<p>Está pensado para que lo podáis usar libremente, tan solo tenéis que agradecer al autor y darle apoyo moral en sus proyectos, por ejemplo:</p>

- <a href="https://juegayestudia.com">https://juegayestudia.com</a>
- <a href="https://fastlight.org">https://fastlight.org</a>
- <a href="https://veinspercubelles.org">https://veinspercubelles.org</a>


<h2>Creación del nuevo proyecto</h2>

<p>Para crear un nuevo proyecto, tan solo hay que hacer:
<code>composer create-project robertsallent/docker-php-mysql micarpeta</code></p>

<p>Una vez creado el proyecto, dentro de la carpeta "micarpeta" haremos:
<code>docker compose up --build</code></p>

<p>Listo.</p>

<h2>Para comprobar que todo funciona</h2>

<p>Para probar, en el navegador usaremos:</p>
- localhost:8080 para abrir el proyecto, aparecerá una página de bienvenida.
- localhost:8081 para abrir el phpmyadmin.

<p>Para conectar al MySQL desde el Workbench, dBeaver u otros clientes, debemos usar el nombre de host "mysql" y el puerto 3306 (si no hemos cambiado la configuración).</p>

<p>El password para el usuario "root" es "root".</p>

<p>El DocumentRoot del servidor de Apache está apuntando a la carpeta /var/www/html/public, para que todo funcione perfecto en proyectos FastLight, Laravel, Symfony o CodeIgniter. En nuestro IDE trabajaremos sobre la carpeta "src" para proyectos completos (o "src/public" si estamos trabajando en ejercicios o ejemplos de clase).</p>


<h2>Comandos útiles Docker</h2>
 
<p>Reconstruye los contenedores a partir del docker-compose.yml:
<code>docker compose build</code></p>

<p>Levanta los contenedores:
<code>docker compose up</code></p>

<p>Puedes hacer las dos operaciones anteriores en un solo paso haciendo.
<code>docker compose up --build</code></p>

<h3>Estos otros comandos también nos pueden ser útiles.</h3>

<p>Iniciar:
<code>docker compose start</code></p>

<p>Detener:
<code>docker compose stop</code></p>

<p>Detener y eliminar el contenedor
<code>docker compose down</code></p>


<h2>Limpieza completa</h2>

<p>Si queremos limpiar completamente y reconstruirlo todo desde cero, podemos hacer:</p>

<code>docker compose down -v --remove-orphans</code>
<br>
<code>docker builder prune -f</code>
<br>
<code>docker compose build --no-cache</code>
<br>
<code>docker compose up -d</code>


<h2>TODO list</h2>

- Hacer que funcione mysqldump para poder realizar exportaciones de las BDDs desde las aplicaciones.
- Revisar reinicios de Postfix.

<h2>Créditos</h2>

<p><a href="https://robertsallent.com">Robert Sallent</a>, ingeniero superior en informática y formador ocupacional.</p>