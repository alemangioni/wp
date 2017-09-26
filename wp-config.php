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
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));

/** MySQL database username */
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oh,<j*u?XRa)3KxzeYuCqrg)]I,s+&+a^T`(/A(><g4sD(*xl|Gi:B:d2](-TSJq');
define('SECURE_AUTH_KEY',  'RnoXkqPn&Xk~4a q0SS6dFT!_v9j+;dI%(6{x+Z5:-EM+ySys08hx*pfh3fG1Nkk');
define('LOGGED_IN_KEY',    ':I2,_:%|_oRo!snvt}_c]BR!eqI-jcr@awS%p!f62Wq9llb_Jzp KgFG4P9e{-3;');
define('NONCE_KEY',        '` .[;4QS|0zoS`MC=t/+tAKQMj5gKF;r*-%G`DXza~D@b[#ka+1!%zh<s;zfc~$-');
define('AUTH_SALT',        'ClzmI_u#NOiZ+Bd0:EV3!EsLS-`;Az&AZHJN4QdH9Q[*T-~h<QaJV!4aTz=*! J)');
define('SECURE_AUTH_SALT', 'Y(+%r:NPF$[%=>0kkOP5R/9SKix2Y>SY/XsO]hDwfk#Y@d{N_PhyG&R3/%-$wzOh');
define('LOGGED_IN_SALT',   'y]E:jC0}G*#[H)|?x%d|+dvm(V#.-.sB[w-wXi<LR+~*,z19zI,<]lGe#`a;R2<*');
define('NONCE_SALT',       '@z|*n.i:MLy*vY)Cc0E}=Qr+_R<wTFLRdpPT63o@YGm~b5/?)q,d}+n-rI1#r/5p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
