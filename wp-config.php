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
define('DB_NAME', 'wp-vi-2-02');

/** MySQL database username */
define('DB_USER', 'wp-vi-2-02');

/** MySQL database password */
define('DB_PASSWORD', 'zavlad12');

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
define('AUTH_KEY',         'g+v3RA%A^#yz_07+TgfkfL5>|S#0y YX0.+(-uZkJ?:4xhp7DFyKh {Q#gpD(BKy');
define('SECURE_AUTH_KEY',  'KZnh)>Kh4GFL!G(1%Frk:,/Uo/&#Wz|B@M,_K{et7]UbQm]^(z-qEk&aQLiw?9%-');
define('LOGGED_IN_KEY',    'K&>,slx<8I]buZr;%3QIl_y3LpdZu|#LXvO;*JZy u4He7<ok>|&R1O]CO^ J_pq');
define('NONCE_KEY',        '5)){yID<9 bbDF0Kgph.w4N 2et+ !s{S }##Gcvstz!iF-I*;,![2|t+,|Anl=p');
define('AUTH_SALT',        ' E6@^t4=E>Dc~{`|c@zyGQ(7:pMsiT=2YG?jqw=2[W!4j{E*^q&tUVRP>SjATc$E');
define('SECURE_AUTH_SALT', '#Qzs<tJQQK]AtZIBPPzgJgh8@_X> sPT;9;k6r)c=D2Bx,tRcfz;u<AjF@WW,SKv');
define('LOGGED_IN_SALT',   '$S2qVbV6?FS;QX5&t92HxcgW^cviO-c+D$T.<$f|33*|${RNPr0iZIt%mgW!EMV$');
define('NONCE_SALT',       '[p7+0huS$>HnH#+eItOBj6pitOwVVvOFD,}NxaT([Kg})Br|,AmPB~0C;Lx2u,jE');

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
