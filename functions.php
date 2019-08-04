<?php

// Constants
//TODO: Set font urls.
define( 'VMBWPT_TEXT_DOMAIN', 'VMBusinessRep' );
define(
	'VMBWPT_LANGUAGES',
	array(
		'english' => array(
			'direction'  => 'ltr',
			'prefix'     => 'en',
			'url'        => 'http://www.petroneginj.com',
			'native'     => 'English',
			'translated' => _x( 'English', 'Site Language', VMBWPT_TEXT_DOMAIN ),
			'font-url'   => array(),
			'minified'   => '.min',
			'pages'      => array( 'contact' => 5, 'home' => 15, 'product' => 17, 'about' => 13 ),
			'menus'      => array( 'main' => 3, 'footer' => 4 )
		),
		'persian' => array(
			'direction'  => 'rtl',
			'prefix'     => 'fa',
			'url'        => 'http://farsi.petroneginj.com',
			'native'     => 'فارسی',
			'translated' => _x( 'Persian', 'Site Language', VMBWPT_TEXT_DOMAIN ),
			'assets_dir' => 'http://www.petroneginj.com/wp-content/themes/VMBusinessRep/assets',
			'font-url'   => array(),
			'minified'   => '.min',
			'pages'      => array( 'contact' => 5, 'home' => 15, 'product' => 17, 'about' => 13 ),
			'menus'      => array( 'main' => 2, 'footer' => 3 )
		),
		'default' => array(
			'direction'  => 'ltr',
			'prefix'     => 'en',
			'url'        => 'http://mywebsite.test',
			'native'     => 'English',
			'translated' => _x( 'English', 'Site Language', VMBWPT_TEXT_DOMAIN ),
			'font-url'   => array(),
			'minified'   => '',
			'pages'      => array( 'contact' => 5, 'home' => 15, 'product' => 17, 'about' => 13 ),
			'menus'      => array( 'main' => 3, 'footer' => 4 )
		)
	)
);


require_once get_template_directory() . '/inc/init.php';
require_once get_template_directory() . '/inc/markup.php';
require_once get_template_directory() . '/inc/style-script.php';
