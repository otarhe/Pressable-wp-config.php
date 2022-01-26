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

/**
 * Database connection information is automatically provided.
 * There is no need to set or change the following database configuration
 * values:
 *   DB_HOST
 *   DB_NAME
 *   DB_USER
 *   DB_PASSWORD
 *   DB_CHARSET
 *   DB_COLLATE
 */

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '9oeq|U,Z65:H]n!RB(f1ez~H{TB;6XlT[m_A)4zr:OZz{92Wv:ja%HCXUUc6n3C0');
define('SECURE_AUTH_KEY',  'kW7MX|]lbanhAd~4;*ptzi.CEJW0o.}zJnT4Zok(1pAx~[8v(4j+WnG0,!)#jY,g');
define('LOGGED_IN_KEY',    'Fp3]Z|:K:Lc8BGSWtKbyR?_;?58gXkdiX<49ZzOVp@nGMHmlqjX1<i:-9kw~a|i~');
define('NONCE_KEY',        'PR3PMwy_KFLEmcP~6v$l>NKOWC3Zrz:Y+8YmCemPiorA2;h.6hJu@cG]M+FpXAHV');
define('AUTH_SALT',        'b:R[bgcb>E_bSnw[}@%+77n}aI88C+tf1^IPamhzHQiP$)!~0ATkH#Y(U-;pam|V');
define('SECURE_AUTH_SALT', 'pG0>phc6U6@lGBBTh(9qv6AWc@jLq89b02UStb)r|ub]=t4f4fZn!jke)~R}wF,I');
define('LOGGED_IN_SALT',   'j[fI+v>_.=(rg.qlJ>KO6twCYp:pk-lRRg%.g>W~m6I3d(].)z4j89#H@0v{k[Kr');
define('NONCE_SALT',       '-UO(T6-lkkNE0*XF.eh-1q@o*.hr#9I.=f~D+~88-5I1$Sn::39<Mg0%|r$;q06d');

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
define('WP_DEBUG', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
