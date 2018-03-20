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
define('DB_NAME', 'wpblog');

/** MySQL database username */
define('DB_USER', 'projetweb');

/** MySQL database password */
define('DB_PASSWORD', 'ProWeb');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'S8m:Q[2Ob}-z[$YUK?`-pioTaq=KA]] %y6]D08_Ax1?]&Q*Z1yz7+7,{}D8 8+C');
define('SECURE_AUTH_KEY',  '<d3h5i3+(iz4ey1+/__m9>dxoiLAyDfCm?H0_0^8L_Nn$`qv+#Jwb=_M)4f,koaL');
define('LOGGED_IN_KEY',    ',N72 U`E]U8};;Zo|rvip{_(3F/0i*i*(}FP:c#^9QNIl`BRxS{3>gVyo?-IFs:O');
define('NONCE_KEY',        '!)yi(j[N!1Z56okU6$JmR@V<{+KzSQ>TU6Zn3/nd>rr;VUHjWUMt#)j:bRW{W6jg');
define('AUTH_SALT',        'L&n<lM!48@!^^*+5Cfm%D+^b3@L};u_IX0RE;*v*c@VZ?n6rOtl` J5f&FMYcYB|');
define('SECURE_AUTH_SALT', '`R!9%NxwlVd;lo/:v},&0&>d`U`x,],iNs|zj5hvER-`a71~FIvCzZ LVEt}o%0q');
define('LOGGED_IN_SALT',   'Qz4*D<TQou`Y)/SA{`XFXluW#;*|XrKMLbLaq0-+!1h#=:Djs:`l^J8/A[Z4of4P');
define('NONCE_SALT',       'i<5c56qmO)eU|gIq%hr^])X?^o=2Dd2Bzd!0 `8/pDW__?6RK1 _v*SQdtm_]D$N');

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
