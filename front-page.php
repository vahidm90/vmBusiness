<?php

global $vmbwpt_supported_lang, $vmbwpt_lang;

$path = empty( $vmbwpt_supported_lang[ $vmbwpt_lang ]['assets_dir'] ) ?
	get_template_directory_uri() . '/assets' : $vmbwpt_supported_lang[ $vmbwpt_lang ]['assets_dir'];

get_header( 'front-page' );

?>
<div id="wrap">
	<?php get_template_part( 'template-parts/front-page/slider' ); ?>
    <div class="container-fluid py-5" id="lvl-2" style="background-image:url(<?php echo $path; ?>/images/train.jpg)">
        <div class="row">
            <div class="col-sm-4">
                <a href="<?php echo get_permalink($vmbwpt_supported_lang[$vmbwpt_lang]['pages']['about'] ); ?>">
                    <div class="circle position-relative" data-aos="flip-left" style="background-image:url(<?php echo $path; ?>/images/welcome_img.png)">
                        <p class="position-absolute w-100 text-center">
				            <?php _ex('Who are we?', 'About Circle', 'vmbwpt-en' ); ?>
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="<?php echo get_permalink($vmbwpt_supported_lang[$vmbwpt_lang]['pages']['product'] ); ?>">
                    <div class="circle position-relative" data-aos="flip-left" style="background-image:url(<?php echo $path; ?>/images/grade.jpg)">
                        <p class="position-absolute w-100 text-center">
				            <?php _ex('Our Products', 'Products Circle', 'vmbwpt-en' ); ?>
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="<?php echo get_permalink($vmbwpt_supported_lang[$vmbwpt_lang]['pages']['contact'] ); ?>">
                    <div class="circle position-relative" data-aos="flip-left" style="background-image:url(<?php echo $path; ?>/images/phone.jpg)">
                        <p class="position-absolute w-100 text-center">
				            <?php _ex('Get in touch!', 'Contact Circle', 'vmbwpt-en' ); ?>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="lvl-3">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-5">
                    <?php _ex( 'Our Mission', 'Home page content heading', 'vmbwpt-en' ); ?>
                </h2>
            </div>
            <div class="col-12">
                <div class="content">
	                <?php echo get_post( $vmbwpt_supported_lang[$vmbwpt_lang]['pages']['home'], 'OBJECT', 'display' )->post_content; ?>
                </div>
            </div>
        </div>
    </div>
<?php

get_footer( 'front-page' );