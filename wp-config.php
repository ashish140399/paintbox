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
define( 'DB_NAME', 'paintbox' );

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
define( 'AUTH_KEY',         'Xl%:Z1?A[1#dsu.jzJw 9Ds.^3GCN<%}G~{P]n,*3 0sd1`Q-~G&}:lp*bBTDVbo' );
define( 'SECURE_AUTH_KEY',  '{tYME:Ym49`?@{,EQh^xai9JV&0lS_,a6|D`h_[Hgm%iNi*:T41SbD{0CFF@9$w<' );
define( 'LOGGED_IN_KEY',    'AoYah+K~kbB !.YD^U3)`M_(~rp]% /@(2i f;$:>+sWe6xZ/Ul4cjf6cs6dBU;E' );
define( 'NONCE_KEY',        '7%iZ_Q1XjEuU}w}+{*~Td&nKSX;%-Y<.=TvCOY>i}Yj^;PXa/Ga,%U=?Q?ywJtHz' );
define( 'AUTH_SALT',        'MG8I*u:!q:VY9&@mB;Nq^[eFAV%L*<nk!K^fz1XBt;7wnt7^~,9v#;v`G~mH4&?B' );
define( 'SECURE_AUTH_SALT', 'j1~,LbCoUn^=g5[.O<xU(YuZLeBz}X:qB7 Oi:!]:Fsj&W|.#v4m`m)a!j(l$Mr=' );
define( 'LOGGED_IN_SALT',   'v*+V)`!u1<SO*6m!cbZyC| 9tS,7y7(.QH;n`])h),^>au+$FWl;sg,+.K.B+4kx' );
define( 'NONCE_SALT',       'tE=2@AAh[s;c-g[EQAWDXFEFbEx4]CK-~E5tT`hBY)kB0HdMz]q |k_!)vm5^sQv' );

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
