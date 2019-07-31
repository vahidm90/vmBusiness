<?php get_header(); ?>
<meta name="description"
      content="<?php esc_attr_e( get_bloginfo( 'description' ) ); ?>" />
<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<?php
//get_template_part( 'animateSlideTest/index');
//die;
global $vmbwpt_lang, $vmbwpt_comma, $vmbwpt_12;

$path = empty( VMBWPT_LANGUAGES[ $vmbwpt_lang ]['assets_dir'] ) ?
	get_template_directory_uri() . '/assets' : VMBWPT_LANGUAGES[ $vmbwpt_lang ]['assets_dir'];

$logo_alt = _x( 'Logo', 'Image alt text', VMBWPT_TEXT_DOMAIN );
$s_name   = get_bloginfo();
$s_url = home_url();
$brand    = <<<html
        <a class='navbar-brand p-0' href='$s_url' title='Home'>
            <img src='$path/images/welcome_img.png' alt='$logo_alt' id='top-bar-logo' />$s_name
        </a>
html;
$btn      = <<<'html'
        <button class='navbar-toggler m-0' type='button' id="toggle-top-bar">
            <span class='navbar-toggler-icon'></span>
        </button>
html;

//TODO: Add page links

?>
<nav class="navbar fixed-top w-100 p-0" id="top-bar">
	<?php

	printf( $vmbwpt_12, $brand, $btn );

	wp_nav_menu(
		array(
			'menu'        => 3,
			'container'   => '',
			'fallback_cb' => false,
			'walker'      => new Walker_Nav_Menu(),
			'items_wrap'  => '<ul class="%2$s list-group list-group-flush" id="top-bar-items">%3$s</ul>'
		)
	);
	?>
</nav>

