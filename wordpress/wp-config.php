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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '$zS8hz&Awz@l0xv*|2irnh;})9zdrCcdDrCy*Lj[!7BrTC^z:07C=icY}+t4vkJ4' );
define( 'SECURE_AUTH_KEY',  '7qtRzvULLWU&4ACxGpW@gDy_eb=,J{!^I)jQ.p^,ftI}>!zCdd8?|SB0MPx9%t)`' );
define( 'LOGGED_IN_KEY',    'b~i1*8q]#2rlaOUw )n$)qI3Jy10ZJt=4a.C*Om]!@Y?@u8UINb)?oCCnqf&kltN' );
define( 'NONCE_KEY',        'b[5/z4}[#pBx=D>)yF6}UnQ2G}cCn&~Uxr^| _(USVs8eUHJ {5eGb.jXV{~0?_d' );
define( 'AUTH_SALT',        'QUldr5DRzGfx5h?3?,B?)1(Bc.>+ QppOf,@jX@&+#C_QvxW=!+PBseX1L``]oLF' );
define( 'SECURE_AUTH_SALT', 'X`5b[YV ~RMb|.K%y,aYm=8Domd#qB60uh&pQHeJ>e|u<8?(P1D.7t`76{Mkb+a]' );
define( 'LOGGED_IN_SALT',   'VC%g8W(=<J$]NG?]&;)^c6}asrDgSd{3DhoX>?qdd4+p12Wu{F~3L:W;fBL *r-Z' );
define( 'NONCE_SALT',       'd>yx3F$e%r}pJO_pi%|d&/ T<bV3^)mK9VK~NJ<NBX1h:5fF@(36QDPC2FrRrQl9' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
