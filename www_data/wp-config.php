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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', '172.23.0.3' );

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
define( 'AUTH_KEY',         'BS{Trif1k?Y#8j0e7LqL8Uk;/kEc4$}n(,iz,<mR%*&9fg~_RUs};pK/f[IiXUV)' );
define( 'SECURE_AUTH_KEY',  'x`y>WbY~5Kq?+aNr1g6kNMQ~| 3mcOp|,LNk5>Fu;D<r@$xsSK^Mn|@t4!/C{v$r' );
define( 'LOGGED_IN_KEY',    'L&s(z4$,WY}j0W47s]Id9weIMWLfG`vor2<Z{)]gn7-%[:[3q-2$.[F>F=b&Aw!3' );
define( 'NONCE_KEY',        'nhP~9okP?V<ow:5<jNIdjbVG@`#C4e!_%$&-i^D{u(I2hs)<D|QxQ)p=eMc}ZB1*' );
define( 'AUTH_SALT',        'ZgxWR|@,<?>r&:X@sj+`FvjC&@`=e5D/:GAJ&G{Zu2StP/OwA/9!vbl~S7$stq_C' );
define( 'SECURE_AUTH_SALT', '/Ph]31L.U?_H{i*mht51y/mzMjW]3WhnBHYI`9{<84]JGoZeaEnA*(AlEz/6;__X' );
define( 'LOGGED_IN_SALT',   'zK}5 `;2?RDN mJa+%H4LpxQY7y1VCK/`H-y;sJcK-m/;X{[VbcB@RwE2W:P$lOK' );
define( 'NONCE_SALT',       '#G>1[^EO6:FaAWPj.WkU5<)B) k9^}JUo]2$FgDlID:$jJs.Hcv{kf6gTvxa%vS;' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
