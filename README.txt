
INSTRUCCIONES BÁSICAS
---------------------------------------------------------------------------------------

docker compose build    # reconstruye los contenedores a partir del docker-compose.yml
docker compose up       # construye y arranca

Puedes hacer las dos operaciones anteriores en un solo paso haciendo.
docker compose up --build

Estos otros comandos también nos pueden ser útiles:
docker compose start    # Iniciar 
docker compose stop     # Detener
docker compose down     # Detener y eliminar el contenedor

La clave del usuario root de mysql es root 

Para probar, ves al navegador y escribe en la barra de direcciones:
localhost:8080  # Visualizar la aplicación
localhost:8081  # Abrir phpmyadmin

TODO:
- Añadir y configurar un servidor de correo
- Hacer que funcione mysqldump para poder realizar exportaciones de las BDDs desde las aplicaciones
