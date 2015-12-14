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
define('DB_NAME', 'farmacia');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'ryxFh`0>*::+!7}KoZ7Yg498zIk<ILc0W_TcJvE!_scugY]<m:&C#7W=$l50;~]X');
define('SECURE_AUTH_KEY', '}|Eory^$*DjX+q5P-C5qj)zh)M0z_c.CbEzW+io 3`%1j{lJSaH;([^a~L/nV(xF');
define('LOGGED_IN_KEY', ']8C<x71Z1t-Qo=j19+<#nZ4BS=24Ra>Y@$R QF9$3JO ~VRix-3~2JEol2z3(5y,');
define('NONCE_KEY', 'g[*9LnA x4m(xtzl~IL3G@4|[Zzps&XaN=qZ~2+%3-Z_(XvN|iAw7z$,uTcm3KKz');
define('AUTH_SALT', '8TWT3WHF9h_hW<[ 9_yxRH[uU?)Z7<Gl8b$d?c<YPLm{*wIpU-[cvJD*Da&VqVNe');
define('SECURE_AUTH_SALT', 'zgaZaQ~{w8c=s|K-$9x~f=dYf9wd5Rq+1,Zh ESPs!)Dj<wph1pU.#v_aP9s1~ s');
define('LOGGED_IN_SALT', 'WhgfL!c!^Ft7H?JllWw7DD`bo<1lK|3h~1Sq}`hALr+U5YI?68=o5#IvR6tL{pH_');
define('NONCE_SALT', '{+!0BOT?Px?z>(TfL 9$6d2$ngvmnfgO`r]`-hGKQoxpv=9D[s~jZ<~m!22Ky:ZH');

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

