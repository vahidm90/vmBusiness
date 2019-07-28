<?php

/**
 * Enqueues style sheets and javascript files.
 */
function vmbwpt_load_css_js() {
	global $vmbwpt_lang, $vmbwpt_supported_lang;

	$path    = empty( $vmbwpt_supported_lang[ $vmbwpt_lang ]['assets_dir'] ) ?
		get_template_directory_uri() . '/assets' : $vmbwpt_supported_lang[ $vmbwpt_lang ]['assets_dir'];
	$css_dep = array();
	$js_dep  = array();

	wp_deregister_script( 'jquery' );
	if ( ! is_admin() ) :
		wp_deregister_style( 'wp-block-library' );
	endif;
//TODO: Use CDNs.

//  Reset styles
	wp_enqueue_style( 'vmbwpt-normalize', "$path/css/animateSlider/normalize-8.0.1{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.css", array(), '8.0.1' );
	array_push( $css_dep, 'vmbwpt-normalize' );

//  WordPress icons
	wp_enqueue_style( 'dashicons' );

//  Bootstrap CSS
	if ( 'rtl' === $vmbwpt_supported_lang[ $vmbwpt_lang ]['direction'] ) :
		wp_enqueue_style( 'vmbwpt-bootstrap-rtl', "$path/css/bootstrap/rtl/bootstrap{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.css", array(), '4.2.1' );
		array_push( $css_dep, 'vmbwpt-bootstrap-rtl' );
	else :
		wp_enqueue_style( 'vmbwpt-bootstrap', "$path/css/bootstrap/bootstrap{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.css", array(), '4.3.1' );
		array_push( $css_dep, 'vmbwpt-bootstrap' );
	endif;

//	jQuery Mobile CSS
	wp_enqueue_style( 'vmbwpt-jquery-mobile-theme', "$path/css/jQuery/pnj{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.css", $css_dep, '1.4.5' );
	array_push( $css_dep, 'vmbwpt-jquery-mobile-theme' );
	wp_enqueue_style( 'vmbwpt-jquery-mobile-structure', "$path/css/jQuery/jquery.mobile.structure-1.4.5{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.css", $css_dep, '1.4.5' );
	array_push( $css_dep, 'vmbwpt-jquery-mobile-structure' );

//	jQueryUI CSS
	wp_enqueue_style( 'vmbwpt-jqueryUI', "$path/css/jQuery/jquery-ui{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.css", $css_dep, '1.12.1' );
	array_push( $css_dep, 'vmbwpt-jqueryUI' );

//	Template CSS
	wp_enqueue_style( 'vmbwpt-basic', "$path/css/templates/basic{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.css", $css_dep, '1.0' );
	array_push( $css_dep, 'vmbwpt-basic' );

//  jQuery JS
	wp_enqueue_script( 'vmbwpt-jquery-js', "$path/js/jQuery/jquery-1.12.4{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.js", array(), '1.12.4', true );
	array_push( $js_dep, 'vmbwpt-jquery-js' );
	wp_enqueue_script( 'vmbwpt-jqueryUI-js', "$path/js/jQuery/jquery-ui-1.12.1{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.js", array(), '1.12.1', true );
	array_push( $js_dep, 'vmbwpt-jqueryUI-js' );
	wp_enqueue_script( 'vmbwpt-basic-js', "$path/js/templates/basic{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.js", array(), '1.0', true );
	array_push( $js_dep, 'vmbwpt-basic-js' );
	wp_enqueue_script( 'vmbwpt-jquery-mobile-js', "$path/js/jQuery/jquery.mobile-1.4.5{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.js", array(), '1.4.5', true );
	array_push( $js_dep, 'vmbwpt-jquery-mobile-js' );

//	Bootstrap JS
	if ( 'rtl' === $vmbwpt_supported_lang[ $vmbwpt_lang ]['direction'] ) :
		wp_enqueue_script( 'vmbwpt-bootstrap-rtl-js', "$path/js/bootstrap/rtl/bootstrap{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.js", $js_dep, '4.3.1', true );
		array_push( $js_dep, 'vmbwpt-bootstrap-rtl-js' );
	else :
		wp_enqueue_script( 'vmbwpt-bootstrap-js', "$path/js/bootstrap/bootstrap{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.js", $js_dep, '4.3.1', true );
		array_push( $js_dep, 'vmbwpt-bootstrap-js' );
	endif;

	wp_enqueue_script( 'vmbwpt-nav-menu-js', "$path/js/templates/nav-menu{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.js", array(), '1.0', true );
	array_push( $js_dep, 'vmbwpt-basic-js' );

	if ( is_front_page() ) :

//      CSS
		wp_enqueue_style( 'vmbwpt-animate-slider', "$path/css/animateSlider/animateSlider{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.css", $css_dep, '1.0.6' );
		array_push( $css_dep, 'vmbwpt-animate-slider' );
		wp_enqueue_style( 'vmbwpt-aos', "$path/css/aos/aos.min.css", $css_dep, '2.3.4' );
		array_push( $css_dep, 'vmbwpt-aos' );
		wp_enqueue_style( 'vmbwpt-front-page', "$path/css/templates/front-page{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.css", $css_dep, '1.0' );

//		JS
		wp_enqueue_script( 'vmbwpt-animate-slider-modernize-js', "$path/js/animate-slider/modernizr{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.js", $js_dep, null, true );
		array_push( $js_dep, 'vmbwpt-animate-slider-modernize-js' );
		wp_enqueue_script( 'vmbwpt-animate-slider-js', "$path/js/animate-slider/animateSlider{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.js", $js_dep, '1.0.6', true );
		array_push( $js_dep, 'vmbwpt-animate-slider-js' );
		wp_enqueue_script( 'vmbwpt-aos-js', "$path/js/aos/aos.min.js", $js_dep, '2.3.4', true );
		array_push( $js_dep, 'vmbwpt-aos-js' );
		wp_add_inline_script( 'vmbwpt-aos-js', 'AOS.init({duration:1000});' );
		wp_enqueue_script( 'vmbwpt-front-page-js', "$path/js/templates/front-page{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.js", $js_dep, null, true );

    elseif ( is_singular( 'page' ) ) :
		wp_enqueue_style( 'vmbwpt-page', "$path/css/templates/page{$vmbwpt_supported_lang[ $vmbwpt_lang ]['minified']}.css", $css_dep, '1.0' );

	endif;

}

add_action( 'wp_enqueue_scripts', 'vmbwpt_load_css_js' );


function vmbwpt_front_page_footer_script() {
	if ( ! is_front_page() || wp_doing_ajax() ) :
		return;
	endif;
	?>
    <script type="text/javascript">
    </script><?php
}

add_action( 'wp_footer', 'vmbwpt_front_page_footer_script' );