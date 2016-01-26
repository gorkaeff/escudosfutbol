# Escudos de futbol

Aplicación web donde se mostrarán los escudos de los equipos de futbol que se inserten desde el panel de usuario.

Web del proyecto en servidor de producción gratuito: <a href="http://escudosfutbol.hol.es">http://escudosfutbol.hol.es</a>

Si quieres clonar este proyecto:

- Clonar proyecto en tu pc (git / svn)
- Crear una base de datos en tu localhost
- Crear un fichero .env a partir de .env.example y cambiar los datos de conexión de tu BBDD
- En la raiz del proyecto Laravel, realizar <b>"composer install"</b> para descargar la carpeta vendor con todas las librerias
- En la raiz del proyecto, <b>"php artisan key:generate"</b>
- En la raiz del proyecto, <b>"php artisan migrate"</b>, para crear las tablas en la BBDD anteriormente creada
- En la raiz del proyecto, <b>"php artisan serve"</b>, para poner en marcha el proyecto en localhost:8000

PD: Si da problemas, seguramente haya que crear unas carpetas en "storage" porque no habia subido a github dicha carpeta.
- storage/app
- storage/framework
- storage/framework/sessions
- storage/logs

Todas ellas deben estar para funcionar correctamente.