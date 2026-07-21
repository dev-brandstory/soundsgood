<?php
/**
 * The base configuration for WordPress
 *
 * @package WordPress
 */

// ** Database settings — Laragon defaults ** //
define( 'DB_NAME', 'soundsgood_db' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' ); // Laragon root has NO password — leave empty
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 */
define('AUTH_KEY',         'R3_YXdhuTx35$+R`?[jx&/!2GUek,^1I]#huOb;%|P6,g!0gmQsh!9%AoZfpv7>F');
define('SECURE_AUTH_KEY',  'tO#(WSB$-Ir9d9q?]ygtfb): QA-h2/KR+qRy #Yxf~LBx3v1Ljr|(NK,|R_gnQt');
define('LOGGED_IN_KEY',    'r~Y5:+skq0 m *J*n5-{QR6c4W/+tK5|,>?v*^x3*IS5%pe*bsuQ!q8z]?lJk8If');
define('NONCE_KEY',        'wpbCOT).~N2p{bL!]%=gci{?@+rzT6W^hwUk]j$:yI7$R|Q&HR=E{^Z<@{sd~|{Q');
define('AUTH_SALT',        'Jad;=n[=x&*m6VH*WP,Z3ACLOA3?+j[bk]K:xwF<]crYsbj>q]b%%Oe{)4=B,]|&');
define('SECURE_AUTH_SALT', '-AZpGRh:q.*O]9Z|?kB>5M~X2Kxu#k(o=TN&@kO@w_BFfl}wE+-(_)8+8|gcNR?T');
define('LOGGED_IN_SALT',   'T.)|]HVgF:XRKBSopL)_v&%@S):W$%It%+kwKQ4h?-7=|X?A=1:kU>(w5(_Niy+j');
define('NONCE_SALT',       '9}r|/L)cET}T|) Z?!a`{,<{~po7OGL0|we+WB#yb#w 5RcC7N2+;Mr}a4-{M]X[');
/**#@-*/

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
