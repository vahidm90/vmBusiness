<?php

load_theme_textdomain( 'vmbwpt-en', get_template_directory() . '/languages' );

//TODO: Set font urls.
$vmbwpt_lang  = '';
$vmbwpt_1_2   = '%1$s %2$s';
$vmbwpt_2_1   = '%2$s %1$s';
$vmbwpt_12    = '%1$s%2$s';
$vmbwpt_21    = '%2$s%1$s';
$vmbwpt_dir_r = 'right';
$vmbwpt_dir   = 'left';
if ( is_rtl() ) :
	$vmbwpt_1_2   = '%2$s %1$s';
	$vmbwpt_2_1   = '%1$s %2$s';
	$vmbwpt_12    = '%2$s%1$s';
	$vmbwpt_21    = '%1$s%2$s';
	$vmbwpt_dir_r = 'left';
	$vmbwpt_dir   = 'right';
endif;
$vmbwpt_supported_lang = array(
	'english' => array(
		'direction'  => 'ltr',
		'prefix'     => 'en',
		'url'        => 'http://www.petroneginj.com',
		'native'     => 'English',
		'translated' => _x( 'English', 'Site Language', 'vmbwpt-en' ),
		'font-url'   => array(),
		'minified'   => '.min',
		'pages'      => array( 'contact' => 5, 'home' => 15, 'product' => 17, 'about' => 13 )
	),
	'persian' => array(
		'direction'  => 'rtl',
		'prefix'     => 'fa',
		'url'        => 'http://farsi.petroneginj.com',
		'native'     => 'فارسی',
		'translated' => _x( 'Persian', 'Site Language', 'vmbwpt-en' ),
		'assets_dir' => 'http://www.petroneginj.com/wp-content/themes/VMBusinessRep/assets',
		'font-url'   => array(),
		'minified'   => '.min'
	),
	'default' => array(
		'direction'  => 'ltr',
		'prefix'     => 'en',
		'url'        => 'http://mywebsite.test',
		'native'     => 'English',
		'translated' => _x( 'English', 'Site Language', 'vmbwpt-en' ),
		'font-url'   => array(),
		'minified'   => '',
		'pages'      => array( 'contact' => 5, 'home' => 15, 'product' => 17, 'about' => 13 )
	)
);

/**
 * Creates basic theme features
 */
function vmbwpt_setup_theme() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
	add_theme_support( 'html5', array( 'caption' ) );

	register_nav_menus(
		array(
			'main-nav'    => _x( 'Main Navigation', 'Menu location description', 'vmbwpt-en' ),
			'footer-menu' => _x( 'Footer Menu', 'Menu location description', 'vmbwpt-en' )
		)
	);
}

add_action( 'after_setup_theme', 'vmbwpt_setup_theme' );

/**
 * Sets site locale based on current sub-domain/user-set locale.
 *
 * @param $loc string Locale ID
 *
 * @return     string Modified locale
 */
function vmbwpt_set_lang( $loc ) {
	global $vmbwpt_lang, $vmbwpt_supported_lang;

	if ( isset( $vmbwpt_supported_lang[ $vmbwpt_lang ]) ) :
		return $loc;
	endif;

	if ( false === strpos( $_SERVER['SERVER_NAME'], 'petroneginj' ) ) :
		$vmbwpt_lang = 'default';
	elseif ( 'fa_IR' === $loc ) :
		$vmbwpt_lang = 'persian';
	else :
		$vmbwpt_lang = 'english';
	endif;

	return $loc;
}

add_filter( 'locale', 'vmbwpt_set_lang' );
