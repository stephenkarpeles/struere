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
define('DB_NAME', 'struere');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'a[}0(pw:_TvAXo5^}zBvq2m&A97 }2ywx!&B_ c2 +_hnIbd+tRQ-8q|Se!<-;xf');
define('SECURE_AUTH_KEY',  '0=-M:c]wNEo7rY;I#(Cm`t^iC!)zm[U2&joIL@AcA/s<jp,o+pnn)Rpx.fHj|;|l');
define('LOGGED_IN_KEY',    '2TSoQ|Lup!xDO@}xViBWNPwdC!16$%m>f;cIM/$X_R!@u>sBWJ8>j!Sb>n_tQ(u?');
define('NONCE_KEY',        'iKXC;d6gAQQ1B39!c7YXBS>N=jd!Ap%|ejYBI{bb2`C,Hk6a=ZPUIu&$4?DTEROR');
define('AUTH_SALT',        'cR2]D3E,]5931]8,70P[lKS.>gWt%ls+f,nW@1KU`$e5c><HZQ&^sa%VA}wAQMWB');
define('SECURE_AUTH_SALT', 'Y#$|.XO;Cr?!{!rN*Uf&K.oE{^v$6:HsL;D8qbBND^f>;PtpS8umcVUIBCNm/qzr');
define('LOGGED_IN_SALT',   '}@`^oT,waGN,`;$&pU(T0KgwD-cK/^=G)q=s03TZAA$X4]srXB3>.{vD-LLkFBMm');
define('NONCE_SALT',       'a1U$V{fQ_1$]#$.~N6}MFH[[&T>_k~e0Q}DjP53GNJ_dj6X%ll*pcy96K=JDaV2^');

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
