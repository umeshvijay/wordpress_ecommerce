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
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'rh%cymQKb)(.p{f/a,~K13fH]z#<n@{2]O1z.8%g43?;],,LLo7Ob~[0or1VK*C,' );
define( 'SECURE_AUTH_KEY',  'LP|Oq>cg:=e^1Le8iU1i>WCtdhdazwA_IFoOD`>w=L)XgU=()/t^T@A;Cr=H<rA:' );
define( 'LOGGED_IN_KEY',    '<OF|gD5E$h^@Q2tYf!.)2T;~]?VY9TOZ~t6ck>QZ%?8GhGKQk#m@^tq8i]~Wus}R' );
define( 'NONCE_KEY',        'vi19/F$NBZvuHuTFr3As5wCN:,/:t5O)fc[iS5-P_qj!ZxcX_,D}mMhKQJ+<TxK;' );
define( 'AUTH_SALT',        '`%4By0O|l)cJj69|heB<A.m~s&]~|C~}pyg+h;w(jmc|.Apg7k*Es(ApEvX)-wkW' );
define( 'SECURE_AUTH_SALT', 'y`0~[koD!Kbc+:ixh*Lu  G(T$n@1@^|T;mm.Cn:Q^JHxn4m[`~Rs1LfH+sJLj`i' );
define( 'LOGGED_IN_SALT',   'mG`7rcl~%VeQqI`A][/UBFgajtgD_Ko.jJ^A91-OvyRE&Xj.f[t{(<{#B;y5-C#v' );
define( 'NONCE_SALT',       'ag<`I6_j40,5 hjMByuOaP3N@lJuQVm=&>/+wO)Uo*@:rt:F%Pm%0wyc+bBovTz5' );

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
