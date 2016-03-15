<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'seoiibd');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'seoii');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Ziyt869*');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '8U4}T@D[7ryN@p0z^m gd V-x.REo}WgP1(;+gt|XhiI+D%X!MI-l.6Do<^uj=.l');
define('SECURE_AUTH_KEY', 'FMD~UkGmZyPu-c>cMB@U?eE-=+3m:*!erwP*8-~sztAuxPW2-;=:+i^Hmu}U3u;.');
define('LOGGED_IN_KEY', '4l&d|FlOkr|q$:|A57b]u-OZY%/w*^1Sh=OR!2;u6V73X<^=e2o:*K|!w#;<e{g|');
define('NONCE_KEY', '7S`@_N,#]5op|Y]y[ovM+<f^%e5x7Sl|)oIDxuK]p*^IouJk=(pJgdTmVLZ%c:2+');
define('AUTH_SALT', '$iO(`2}=ODuozA6Nudn5&XXTmEwjF^Km$;+iPkdH%W[oYB9@!mFE=/7H|-/.~|2w');
define('SECURE_AUTH_SALT', 'tMUJx|,lVgGY8cz,SJy&WoC,,tTNDT )9<+AtU5-W86mtvsr]OPmJ|M@3r#3/+Fl');
define('LOGGED_IN_SALT', 'ferHLW/S|]maRkZX-w{I.vEv1+|9N,|m8b}!|IXBQv!cekWywb{q+J@F+dbnY;-x');
define('NONCE_SALT', 'QJ%OVaGSMzt&(NE>rdkL%wbAT-7sG=5-@/<0p!*=|En5z=I{Q}01-+7bp-]cdy=<');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

