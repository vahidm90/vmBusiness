<?php

// Constants
//TODO: Set font urls.
$vmbwpt_is_dev = ( false === strpos( $_SERVER['SERVER_NAME'],'petroneginj.com'  ) ? true : false );
define( 'VMBWPT_TEXT_DOMAIN', 'VMBusinessRep' );
define(
	'VMBWPT_LANGUAGES',
	array(
		'english' => array(
			'direction'  => 'ltr',
			'prefix'     => 'en',
			'native'     => 'English',
			'translated' => _x( 'English', 'Site Language', VMBWPT_TEXT_DOMAIN ),
			'font-url'   => array(),
			'pages'      => array( 'contact' => 5, 'home' => 15, 'product' => 17, 'about' => 13 ),
			'menus'      => array( 'main' => 3, 'footer' => 4 )
		),
		'persian' => array(
			'direction'  => 'rtl',
			'prefix'     => 'fa',
			'native'     => 'فارسی',
			'translated' => _x( 'Persian', 'Site Language', VMBWPT_TEXT_DOMAIN ),
			'assets-dir' => $vmbwpt_is_dev ? '' : 'http://www.petroneginj.com/wp-content/themes/VMBusinessRep/assets',
			'font-url'   => array(),
			'pages'      => array( 'contact' => 5, 'home' => 15, 'product' => 17, 'about' => 13 ),
			'menus'      => array( 'main' => 2, 'footer' => 3 )
		)
	)
);


require_once get_template_directory() . '/inc/init.php';
require_once get_template_directory() . '/inc/markup.php';
require_once get_template_directory() . '/inc/style-script.php';
