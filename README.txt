
Pasos para ejecutar correctamente el proyecto 


1. INSTALAR DEPENDENCIAS
   composer install

2. CREAR LA BASE DE DATOS
   - Abrir tu gestor de base de datos (MySQL, MariaDB, etc.)
   - Crear una base de datos vacía (ej: agencia)

3. CONFIGURAR ARCHIVO .env
   cp .env.example .env
	(copiarlo y renombrarlo)

   Editar el archivo .env con tus datos de conexión:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306 (verificar en el XAMPP para ver el puerto que utiliza la maquina)
   DB_DATABASE=agencia (en este ejemplo)
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña

4. GENERAR LA CLAVE DE LA APLICACIÓN
   php artisan key:generate

5. EJECUTAR LAS MIGRACIONES
   php artisan migrate (esto crea las tablas para la base de datos)


6. Instalar dependencias JavaScript (npm):
   npm install
   -ahora copilamos los archivos con:
   npm run dev


7. INICIAR EL SERVIDOR DE DESARROLLO
   php artisan serve

   Abrir el navegador en: http://localhost:8000 (o Presionar Ctrl + click en el enlace que se muestra en la terminal)

crear un usuario nuevo para poder ingresar a las funciones del proyecto, ingresar con el usuario creado y ya se podrá usar la aplicación 

NOTA:
- Artisan viene incluido con Laravel, no se necesita instalar por separado.
- Tener Composer, PHP y MySQL instalados.
- Se usaron plantillas de Bootstrap para trabajar las vistas de la pagina.
- Las vistas están estructuradas usando el sistema de layouts y slots de Laravel.
- En este proyecto, se utilizó el archivo app.blade.php como el layout principal
- se inyectan dinámicamente usando slots.
