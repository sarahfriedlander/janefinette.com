<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db529764123');

/** MySQL database username */
define('DB_USER', 'dbo529764123');

/** MySQL database password */
define('DB_PASSWORD', '6730004');

/** MySQL hostname */
define('DB_HOST', 'db529764123.db.1and1.com');

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
define('AUTH_KEY',         '$-kjrWrbGT9$;++!e7$7-9m&}B4c#%|8rEbAW%A6@vIuIB?FvH^g-94ey7kX2$8!');
define('SECURE_AUTH_KEY',  '<:auP}8j]?^#pXp/cC{1d?M+o_(S3X+N3#[ 9MY)-Q-YCv2}(+Yap*6)3 3iFGU+');
define('LOGGED_IN_KEY',    'd)I^r-K;X3EYhUGeYH|Zf|U)R}-Flv?.H=k1DmOpC(KH+04-ZIyAT(2/4m)eO4*>');
define('NONCE_KEY',        'Q4[)Drn+Q5?RACeYHu4o{@ryEW 4pZ)GiY0l+0e{/`=Vo>1c?a|Jy7WWP4(Yy[Z]');
define('AUTH_SALT',        'TdA<TW/75Dr||o_mL[l*FTG:IW858F]n&6*m>,Uob0mY8d<+#&&mB9,|x2ruVZGk');
define('SECURE_AUTH_SALT', 'vQ%.X2Lag-,ShAp~nVBDbV7W%~(ibWlusqFdNP)DY-W_uJ0Z>yu}A*I9g-bOqT-c');
define('LOGGED_IN_SALT',   'x1_3-@Ne@5i`u$2A9`^axrH9QW?dcJid!i+LhN)K@#N|`{jcNQ9}~:U>6*,_n8-Q');
define('NONCE_SALT',       'VN`8AVmxG<Xb+f@NInS*uw&VOtCL)YgH?)/:@BY50Qs9OMEkA_voZk%C+$A+xp{V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
