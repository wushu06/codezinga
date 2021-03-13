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
define( 'DB_NAME', 'lockedgrid' );

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
define( 'AUTH_KEY',         'v8p/>ZONQ#W *]M3my#v4ifyk%6xHp_@MZx<{+TDr#tslY.}MWD=,Kwk|_19hqeu' );
define( 'SECURE_AUTH_KEY',  'C_^W#C>[5o|2SFzO!c{&lLN$t%/ y~{@Q[f+oowfS<9_5~p0t2s=;^m_K%A&A]~[' );
define( 'LOGGED_IN_KEY',    '6c7xJzWuC| ,]*FA$jAQU$R%4(=_lh!6 Ls(QO=6B]HOq3Z!c@7(t%FoG./rvbwc' );
define( 'NONCE_KEY',        '`U)VIXg{U}O@P#GD*f9:6%ecQ,YGmIO&0xBEHRe(tJ_}t6:EOcY;kZL+CaI9al|m' );
define( 'AUTH_SALT',        'Z_ZXGFN_2q,A!h!s<6EmA,f%AyO)#i7JZL.LAqVqlh5]f2i)-OLf;I*t+V>!y)zq' );
define( 'SECURE_AUTH_SALT', 'eS<l%$-^Am,,C r{},b,[5*WClICM?<rv?5x).mq~-~4v<g@NCZ}c.i~um8+498S' );
define( 'LOGGED_IN_SALT',   'IL}Zu1juC/PW|:!}G!ZIyA0xBp:K9cB?=w&;Ibl>ge@A~w/2MA_=H3NUOtv,KV|~' );
define( 'NONCE_SALT',       'e5[,Zev$ObhvIinHn,2dZ:[?vI1I#Q--:Vf)ZNc=8UtLndQWOGr)viE$Qy:lS6i{' );

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
define( 'WP_HOME', 'http://codezinga.localhost' );
define( 'WP_SITEURL', 'http://codezinga.localhost' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
