<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WP-portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9&xA=mM&40k+%H[,Q?7EEx;SjKy]1=^8fBo9t)_;v,B6gvt@,(#&8tIf>{}-<c/Y' );
define( 'SECURE_AUTH_KEY',  'n6j1zd;nin~89JawYreZw`(0ahb-GMjfj489ZvSKt#TIHOgPzT_)ytl#dZD3ricT' );
define( 'LOGGED_IN_KEY',    'Dw&1;H]P^3`RWod<0Eg1]Fx+]UrEvd4Op$XKvgsYg.8$I@(en7R1l6=4okE=tLw,' );
define( 'NONCE_KEY',        'a*AaXf3tPpizC@F6g4U)eZSZ:MsUv1>*Ul|WivHgYq</m3@q8%qP.OOOHh<.q.iB' );
define( 'AUTH_SALT',        'PN[0tWtKVI`QicUTx;)9g]?#fxP~D)ama4-KxE5;u|%dZpOI609fQHZp}Q2yY^b}' );
define( 'SECURE_AUTH_SALT', '_ @qvE?p7p>v-Jx51-4?AbTlMSi[dtsb]|~u0YfQ00!`y@ )r,>Sgi=M%q@=/(r)' );
define( 'LOGGED_IN_SALT',   '8T>$]H/X/P:JKTj:EoA}4$44%n>NGFb-k2RRG!6?iU6%2z*}jwn.#^cyOV)/Hxo5' );
define( 'NONCE_SALT',       'AKg9ak)70@k.pm{2g I&@ovV-m08;}_{7j2{!Ti32Td0BQ>T 8<[Wne-oo,[UtO]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
