<?php

add_filter( 'spine_child_theme_version', 'commercialization_theme_version' );
add_action( 'init', 'commercialization_register_footer_menu' );

/**
 * Provides a theme version for use in cache busting.
 *
 * @since 0.0.1
 *
 * @return string
 */
function commercialization_theme_version() {
	return '0.0.1';
}

/**
 * Registers the menu location for the site footer.
 *
 * @since 0.0.1
 */
function commercialization_register_footer_menu() {
	register_nav_menu( 'footer', 'Footer' );
}
