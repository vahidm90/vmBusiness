<div class="container-fluid" id="page-footer">
    <div class="row">
        <div class="col">
			<?php
			wp_nav_menu(
				array(
					'menu'       => 4,
					'items_wrap' => '<ul class="%2$s list-unstyled d-sm-flex flex-row justify-content-around my-3 my-sm-5" id="footer-menu">%3$s</ul>'
				)
			)
			?>
        </div>
    </div>
</div>
<?php

get_footer();