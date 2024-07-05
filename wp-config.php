<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thprsnchz' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y|7UgB6g|ocI=hqk4B<OmFFycvY<F,_5d.mL].j{^QTv,j4UXIHv$30}b&M(Sl3g' );
define( 'SECURE_AUTH_KEY',  '+55{fq[rG0+g5,0_#>10r`l5%C=/^t@ID^ f9dt>MWQ5$Y,3@^<zwslqm~.VNZ)[' );
define( 'LOGGED_IN_KEY',    'o:QoKxXx:HXP-3x2`zLlEM87`g:PPy+mQa5AySk]vMnuwhs6P^4f[fdE2NYZ?eZa' );
define( 'NONCE_KEY',        't<oqZ|S18XBOaN&^{`7o>b-Y|MHG<W/u{pyL4W_:S$1LaX-m@FXT4Mu3vV*pdspM' );
define( 'AUTH_SALT',        'd@i2C]JPR;V0_q[C1Hd;<lmW$x-pKSF8ncag3ebb@ mVUU~Xf `D3b>Q2sq19Mzs' );
define( 'SECURE_AUTH_SALT', '2!n*S!xftmTyVVF/}#bJbz^,6?ciP[m*^zNKk>f9ux%+j.xpO_(~2Kr8Vq5m_c=z' );
define( 'LOGGED_IN_SALT',   'fE!.|7g=foydIJ[(V[hCxC/M=B;-9wtq6[rP(:=TGy6|Pw.cL*JwhX1),w>*1i.{' );
define( 'NONCE_SALT',       '#dmV$sKDa_2a8K,u(~:,5Wi.hASU{R!nycf{z>TDr,H#IU31f57B,R,{WPl,}$rI' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
