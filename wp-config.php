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
define('DB_NAME', 'wp_rgb');

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
define('AUTH_KEY', '>FA_T).q3UQ:_F4Jb<uE8xQz+eA2NP6o;!!k9~>4h*848! VIaDXpsy532-dKT5#');
define('SECURE_AUTH_KEY', 'la?<(`ivTRy8,9vKp-GFWj^T$58M[sUuwimIf0tQ[dL<i70gAK:%R&(F a@V/}L*');
define('LOGGED_IN_KEY', '_5qMzt}dE@C@dyzL~9cx9{W*fkr7s_V]44Nyuz>1->P8zNLyOC_1o.L)kg*r<TZd');
define('NONCE_KEY', 'fNWdeu7U4%&Yi#JBd1I#K{Aw*{f:%3#~dl=rr3ofoTM9n1pl:+hvXY;&&8JzC5Rl');
define('AUTH_SALT', 'd&_$rV+/=f{<K}lQ~g;zdu>u{8G.5^`s%3+RF-j|*GX~_5Ql[AMP:`JdI)58zPBG');
define('SECURE_AUTH_SALT', 'N~*4s#2[e);>XtWZE&71|9QT~Z:q|)Goj5;_afU4c37iy;@}!fXdm!2K.6R]2Xp.');
define('LOGGED_IN_SALT', 'RAYK0Gu.dZl*q21&PZ-ZQ/jjCe-bBXE$2|suC;Lgk^N_-(A-|iP0Ec.^:zi1|wh}');
define('NONCE_SALT', '15z;cJI~gW.2REfC_uHiHIdI4hf-0V<w|Z|Un.*n)iyBWy|*G^7*(] tQ{2L7/I|');

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

