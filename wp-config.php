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
define( 'DB_NAME', 'the-review-orchard' );

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
define( 'AUTH_KEY',         'N1Wtsr`|nV{($ibe_s6:l#g-kobip#?4p#WCt.V{r0]^hE2iWZ:n<mW$L(E/+]B,' );
define( 'SECURE_AUTH_KEY',  '(OZBnZ2=s+]^+C+;D+H& ;|Tw-=X;nN:Jj75=G7fP-]42>|gb zVf{yBVlo,gW~U' );
define( 'LOGGED_IN_KEY',    '+e0MWUi{scNv+;=SvxbVZ=d%z@DHnX8GxQE7J0}clJAQzhs:C,+0!w.__~[#NRAL' );
define( 'NONCE_KEY',        '|%CcZB(0(;)A9MhJpk*]1:8/N$ MmLa3<KO|3/tk=H#SpxIgi%d<%>g{!RCbz!XE' );
define( 'AUTH_SALT',        'PO=U)LDE<RtVMUZL-HJ(uRc1*#(#>v]^pAA,G,zL#ke@Sb$ke>FtC&~cwD4^s&!n' );
define( 'SECURE_AUTH_SALT', '3X6-SG@08]oe`E4B+fW#aJ+_})vCx?+#R ,39|`*B SOT^*1OmQ+PixG3OF^(!((' );
define( 'LOGGED_IN_SALT',   'X1P+qJQItpOl48|4{PAHL^OFC}xdJ^.lUKhwTNHF;Ajw0f{B=]~(eFWtPWini=g(' );
define( 'NONCE_SALT',       's3sK0F6M-=cXvHv~RG0}`vo#8 UE:sey4GCLb4F/;m<Jq(b#9j|GWp6rm:,5c[ls' );

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
