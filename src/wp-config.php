<?php

require( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . 'autoload.php' );
//echo '<pre>' . print_r($_ENV, true) . '</pre>';
//die;

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
define('DB_NAME', $_ENV['MYSQL_DATABASE']);

/** MySQL database username */
define('DB_USER', $_ENV['MYSQL_USER']);

/** MySQL database password */
define('DB_PASSWORD', $_ENV['MYSQL_PASSWORD']);

/** MySQL hostname */
define('DB_HOST', $_ENV['MYSQL_HOST']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', $_ENV['DB_CHARSET']);

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', $_ENV['DB_COLLATE']);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_(3W&I.B-6w=lX0K?|+x0?S)y}}n(YU?txl5lnJ9?Y7dL1s~s xY%Qo7D~?PM1iY');
define('SECURE_AUTH_KEY',  'Uh*+W;goS>8MGnIgv`C!-BwJ4-huwvQR5,*b8kzh_eq|(Br^Ah_K5+;O6Z]NJQ/Q');
define('LOGGED_IN_KEY',    'jqDSta_eF0a^!>r&RNcFnM=PuO?s5M[udGyA)2Hc z!PqZ~&3X,x:V2TIv$-$Nmp');
define('NONCE_KEY',        'Ejc[zC(50fy gCPmtsO7Xs%[w.-WTXnt?Gi5nMoHG=t;@@>2)71K1jJ(APIy]H+#');
define('AUTH_SALT',        'C+I`4c}$Xm|6H2*(bko +$~ZUu-R^Ng?~w_WZWc0j($M|4H`Nj-6`;+f(^ F*:~_');
define('SECURE_AUTH_SALT', ')!@;lG{PNg86*c-}45Q!Ag2k}}UC?%UY6g6pdPdu)4--wXL^Vo;c[WLa}&Nzbyo|');
define('LOGGED_IN_SALT',   ']eq:y!Zdtgt35+o?CQc(o-&.;buY05<VL|u(r.Vtr?1IHneiPYx}W725wK8t-ALc');
define('NONCE_SALT',       'h59*9%+?^w:ngC`0ai@E ,H)h4@q*l<B~<pqViyR/%Ps{=n 2Nlv3 ]b|><,7i, ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = $_ENV['TABLE_PREFIX'];

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
define('WP_DEBUG', $_ENV['WP_DEBUG']);

/**
* PATH TO WP_CONTENT
*/
// PATH to wp-content
define('WP_CONTENT_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'wp-content');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
