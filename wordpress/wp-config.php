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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$3tCD%YNq,t2=-sf]I!$QAM_bpC4}d$&>#BE]>;/!bP>6D,L0bU E_{_^u<O1mNW' );
define( 'SECURE_AUTH_KEY',  'tgOPa.!i]64wjS6N<DO%pr=#Pj8%S|}hf!Nw?Sl#g>tSiXnKSw_9q`}cOI;7#E`%' );
define( 'LOGGED_IN_KEY',    '<33K?BS_(3AWZZW@QPNb%HOF>y-K4}<9nnzP@22/=t#LI`d&X):](MzcS_&$*+|-' );
define( 'NONCE_KEY',        'mL$@}O:Zg9]iif=dFZ/N-Nx8+{0gW,=CqaXFl==ff.*--1X3V5*zYDmYpH5J+Zop' );
define( 'AUTH_SALT',        'di,&J1gqWxoY&&:_MTjpJd`%U[hGnXjFnd4#uVH9U4Lx~xY?NZ-8)a0)C#&SMMH9' );
define( 'SECURE_AUTH_SALT', ':?*aUlaPgXY_iuLh99LM ZK|u0y3[ok0N8R#gL&pZnEK9m {S<QPiq7Zl25l8WEf' );
define( 'LOGGED_IN_SALT',   'b/f6p&1FpDuH?F]4l~3!vZ;%h]2i]4;9UN,(R!2A_2WEaOuU[6p?$C2WIh9HJY=a' );
define( 'NONCE_SALT',       '$S|Nzhl|@2?hdRiay{=}}9j>)SnC}H<D1ISz0yc$`M54wjQ~y$7(oH&, [2;8bs ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
