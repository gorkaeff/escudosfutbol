# Escudos de futbol

Aplicación web donde se mostrarán los escudos de los equipos de futbol que se inserten desde el panel de usuario.

Web del proyecto en servidor de producción gratuito: <a href="http://escudosfutbol.hol.es">http://escudosfutbol.hol.es</a>

<p>Si quieres clonar este proyecto:</p>
<ul>
	<li>- Clonar proyecto en tu pc (git / svn)</li>
	<li>- Crear una base de datos en tu localhost</li>
	<li>- Crear un fichero .env a partir de .env.example y cambiar los datos de conexión de tu BBDD</li>
	<li>- En la raiz del proyecto Laravel, realizar <b>"composer install"</b> para descargar la carpeta vendor con todas las librerias</li>
	<li>- En la raiz del proyecto, <b>"php artisan key:generate"</b></li>
	<li>- En la raiz del proyecto, <b>"php artisan migrate"</b>, para crear las tablas en la BBDD anteriormente creada</li>
	<li>- En la raiz del proyecto, <b>"php artisan serve"</b>, para poner en marcha el proyecto en localhost:8000</li>
</ul>

PD: Si da problemas, seguramente haya que crear unas carpetas en "storage" porque no habia subido a github dicha carpeta.
- storage/app
- storage/framework
- storage/framework/sessions
- storage/logs

Todas ellas deben estar para funcionar correctamente.