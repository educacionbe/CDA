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
define('DB_NAME', 'casadelaguila');

/** MySQL database username */
define('DB_USER', 'casadelaguila');

/** MySQL database password */
define('DB_PASSWORD', 'cda2017siste');

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
define('AUTH_KEY',         'j<y4lbY&}G,f!So}BL:~6^MJ#&CbK*waKW<Gn!4/zIY[L,&;qQ5+`mS6+w-rjjM.');
define('SECURE_AUTH_KEY',  '5D4Q&r9]Ohi/8>Y4a@Pc3|KJMsp>Ke-EocnqN~6kLz!+Rn}5.<{1MK5$N~)wzhL|');
define('LOGGED_IN_KEY',    'h;.[#VaYx~Ep>gnxujo1H-5I>dP[ ZG08iBK.Qg=HWE%**}Dtu6+iA<8HYy)JiCq');
define('NONCE_KEY',        ':}j9TVW(UK4uq@j:2;OKULz c%M2f0xHU^/N15x$;.;J,}C*u9Q3`a_mY)F~v<$z');
define('AUTH_SALT',        '2nZbC@Vp[y2_/({/.]u0wKUhnfWqSt>7os9E@5<7t6-~< ~-)9+j%=Oj<o;/1DOy');
define('SECURE_AUTH_SALT', '<H?/K?WM+m=Zg0UO~.fclkKKOe[SCHxZ=q*NFj0ttu[)u~2s$.m+l=FGgaLs@Q|y');
define('LOGGED_IN_SALT',   '-ei6[apE}ze1T+B& KL)F=mk~nzx,37gSC1`Q>_f#q/7PcIi~<DKp,nO[;pB)>&0');
define('NONCE_SALT',       '|tRD+!(Q{4]qCJn0F?X_BmkS:n]!tww{ w/)iW q:%w{M$Xn@zyvuBInD8%t;d9D');

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
