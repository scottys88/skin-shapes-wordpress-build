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
define('DB_NAME', 'skin-shapes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'R8^tLl:R/osvzY<iCmfDfHZXINrIdsL64&p:Ib|r2c/r./X<vF&>[h/_;2Xc6&lQ');
define('SECURE_AUTH_KEY',  '/*PLiKSLr&6zAnr/2x-Op}Sp#o7IO5TyJm,efA;0J^UWijYLN=T<c|N<)be%qWU%');
define('LOGGED_IN_KEY',    'k~1Mt+Y.aN8pOS*([{w+3Tx#0L3#Tq xOwx~IPvA~9%|JcT@ Y<K-J8,*ke]u/+~');
define('NONCE_KEY',        'b_B(rEKH18Yg?nE#sbMn^MD5(b|/sG0R#,3u8o(;SI}?Jd-~-J#R<7P50c>_[{f9');
define('AUTH_SALT',        '7d?L/9/eSKZQ~Gq60MQekZ,VlYQux.g#}xri-+gDO-F=`={+_pD?HzGIdB9Rb0x]');
define('SECURE_AUTH_SALT', 'sNW.5psCeh1027RCqPdujwdf;SLG.RuBIhB6Ekwc^KpL:qKH{2,5gkKQP2a_ O~,');
define('LOGGED_IN_SALT',   'A#SeK^&},qY%K-upUT-:JkZQ_K:.5S uJ.:B#n=8@wy#Y-lR}}BC2k&gv}[86_No');
define('NONCE_SALT',       '-9FE/T497?dVkdSDs[w`F%m=-8o2~1]7xx|gNxQ:XcEM@6|GqB`83&LIu:Ttvrh:');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
