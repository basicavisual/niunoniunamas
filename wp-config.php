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
define('DB_NAME', 'niunoniunamas');

/** MySQL database username */
define('DB_USER', 'irma');

/** MySQL database password */
define('DB_PASSWORD', 'n1n1a+');

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
define('AUTH_KEY',         ' WRr|[D/]4iq8x%Uqr2bQE{sz(Mb&0.6e|_g?WKo,Dpn_;e$@zOeE3Z5>eCN3]@|');
define('SECURE_AUTH_KEY',  '$|n!0{d/ucEvUp{)BV<o}?PDG<R8zqTG|s~tUL6IT-$]nL8LeN#r`yo~yu?8v{v$');
define('LOGGED_IN_KEY',    '_t|H3n?|Fv7G0|BS0$/8O^O->7hr#i?Iw%v(_2N[]?(-CD]F#P_?RNpS|SZL~pJo');
define('NONCE_KEY',        'a=SF?t#a=:-8G>}VU4Eny-ajh:Ua[c@1k *I?Ui|[VFZ-6s]w$jA%hTKjme_(`Zg');
define('AUTH_SALT',        'o9aUR>?ccP]i-BXZ1|>&R}c/k2T887,bn-4xWOH*jHiF_&B.m5oeF!lC).{d? bk');
define('SECURE_AUTH_SALT', 'K~soU3`>sk]h8sK$;:q#)[dtnW#?qg#nQf:yY+|.c]%F&/G+i%Y*0b(}].|P8&aG');
define('LOGGED_IN_SALT',   'd+:n7~>>d07fD+MwWWxaJi?P-O+xx=|x+zAJcslVrA!|>lLw)gn_=]`m[a@JX#ea');
define('NONCE_SALT',       'E@0c7mjsF;N@D&(;GOL~a /!]Q%!3i2yW[OPhmnMH,j7.2,od`OSi|NR}{29g+O,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'p0p_';

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

