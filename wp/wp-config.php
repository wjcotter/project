<?php

// ===========================================
// wp-config.php
// ===========================================

if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {

    // Local Environment
    define('WP_ENV', 'local');
    define('WP_DEBUG', true);

    require( 'wp-config-local.php' );

} elseif ( file_exists( dirname( __FILE__ ) . '/wp-config-playground.php' ) ) {

    // Playground Environment
    define('WP_ENV', 'playground');
    define('WP_DEBUG', true);

    require( 'wp-config-playground.php' );

} elseif ( file_exists( dirname( __FILE__ ) . '/wp-config-production.php' ) ) {

    // Production Environment
    define('WP_ENV', 'production');
    define('WP_DEBUG', false);

    require( 'wp-config-production.php' );
}

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'p6B<B<eR05:a.tQMUGTp)eD[ju3H7DH0&[/<;Q|w# fd#)D~q]-10Y<)50B;pcLq');
define('SECURE_AUTH_KEY',  ':>RNMik-Y,O^[c^8;GXtT}`z> 0kD2j$0)|8SxJ;l*QJ?Kp^G^%4-X}yFw(I4{8z');
define('LOGGED_IN_KEY',    '53K:%*0eLAD6nk4wny%*t=0iV;tMe|W?EzeIOs|%MG=AH=jp 0=HbPI9ls7?-%]n');
define('NONCE_KEY',        'yh{dx1)rh(B@[7^:R{298UO5gYnE~3!<0RVfan%FYx?6++Pk;(laqdwj,.;_I|w+');
define('AUTH_SALT',        '%Diti[pIjlcy+Ctu WA MvZ#L3seTfCN&x7On!-OAC/oU*hGX_{:s4y%lZb7)<9P');
define('SECURE_AUTH_SALT', 'U3(V<mP/:~--=~lO|sFdlxUN}z5R7F~Ed@%_Z|Ix/&H9a;e2nlT}zR%*Na5{evx4');
define('LOGGED_IN_SALT',   'X!/u+i(2o2`w*kk-o7OC+XV*}V!)UXe2->Y(rj*SsP)+iX5X{/oNSN]HBF:- s#7');
define('NONCE_SALT',       '^]$!=->5CsN2>@f)v+a`bGJ`$Wo*,`:FuUW?th&6tPUaAYY]%sl-V|a~EqNo_E_:');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// =========================================
// That's all, stop editing! Happy blogging. 
// =========================================

// =========================================
// Absolute path to the WordPress directory.
// =========================================
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

// =========================================
// Sets up WordPress vars and included files.
// =========================================
require_once(ABSPATH . 'wp-settings.php');

//==================================
//Bypass FTP connection credentials:
//==================================
define('FS_METHOD','direct');
