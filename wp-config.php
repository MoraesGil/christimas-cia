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
define('DB_NAME', 'ciadonatal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'gilberto');

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
define('AUTH_KEY',         'E%V|j)rP*lVH<&f~,i^IgJt?^*GZDBlW4`a!-ht/<mcS5xi;lSZ`mW*%u4vVkj,P');
define('SECURE_AUTH_KEY',  'ctZr@Wy|(=((fl>%Hpq]ULG$oVBY=>h8JO%#P#x:4Ow}fxjf+|mxXO}KXCC<af#~');
define('LOGGED_IN_KEY',    '4^[&FB0aL:&mm2~5vuiwkN/H@9v$Pk:pb_mC;<^)@w[e92$!wvi``3YjfKRUEmJ^');
define('NONCE_KEY',        'ZrL{,C5W^QT033sX}VM14*c4c;T}DFXxtn {_&6A:o#1>,M)+4y*Dx,vkK7VaWQ5');
define('AUTH_SALT',        'AwQgEk&}@/d(TG>7m3]`F_&5DQ(SD+vQWEn3:Vze~)L2h,noW;ZiHpUM_pFxK(Ru');
define('SECURE_AUTH_SALT', 'E$Vtw,D}Q|Wypx,|V9/i%2Eci-WhaL!.y!B 7ZBx pAcH:lcv8v>/lv>S_Ipj1c@');
define('LOGGED_IN_SALT',   ')RJ1vr~Cb>QBbWU7OUTq{wFukA B_!Qf/ViYa>U.ZD+4jRr0V)C5Y^~)KIysi&8i');
define('NONCE_SALT',       '8e9g}=/a?xf~n,=bM,p/rgb[1t?,bu<gfQkRk6`Dy&U/Xc={`Fx0J8?f^H9Zr?x]');

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
