<?php

add_action( 'init', 'commercialization_register_footer_menu' );

/**
 * Registers the menu location for the site footer.
 *
 * @since 0.0.1
 */
function commercialization_register_footer_menu() {
	register_nav_menu( 'footer', 'Footer' );
}
