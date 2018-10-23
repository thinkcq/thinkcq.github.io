<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thinkcqc_068' );

/** MySQL database username */
define( 'DB_USER', 'thinkcqc_068' );

/** MySQL database password */
define( 'DB_PASSWORD', '7FAC02EB1f4k3qvyp58we9' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '+qU1Pf!oA$4ng3.$}7_Mo02Dw[SYo6~`Ty{v,5~&OC#|Ex;*[=uw]:vof4)1H1!3' );
define( 'SECURE_AUTH_KEY',   'kE!Z,)@E8xj`&BLqKZX1b}0gj_jS<E y?74kpk]C^uvdIbX:?K~CdjvK_yLAq02M' );
define( 'LOGGED_IN_KEY',     ']Nr~IF(?toM@KZ/T=mlHAKbu;0-=Pv*C1 SqQCOI`Bk9qQY;PJ!t SI+NidB%&_g' );
define( 'NONCE_KEY',         'c;8PC#.Fb>ShSXO6T9{|(q)HF.b*1M[bMIZBC=1*j:xD|7~:L^F9~xr&Jc9Z8VU+' );
define( 'AUTH_SALT',         '6f*&9@bucBZU&3nK0Bw/S0<f/DN[8u-!~~Be GZs^v+)r@>gvb(EKfcq-VkA@Uz0' );
define( 'SECURE_AUTH_SALT',  '&]-PysX$19jONR]:ziPTMZA*3F/b|3e[U*UU0,u=$wa2HD&fbGZVOF:4%jS0WeTg' );
define( 'LOGGED_IN_SALT',    ')0M._J(TP(>wISlh]jPw^G)K;8DJWs7:MIxtgipo$8U-QXNJhMqb=~2p<T22DrGB' );
define( 'NONCE_SALT',        'tQ;J5`qOWuFZ*J5{V79T09V~wsDCt}T~c=}o3rs0Eut*Mj{9IDr0<c!1hVHn:Nv{' );
define( 'WP_CACHE_KEY_SALT', '2JV8$DMC]4}qHJotvzRpJ+jlC|g}Pfd^X7y?D&kWk0L[kk{yh-hVBnT@xrxGF7 H' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '068_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
