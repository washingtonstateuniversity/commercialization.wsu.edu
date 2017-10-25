<?php

add_filter( 'spine_child_theme_version', 'commercialization_theme_version' );
add_action( 'init', 'commercialization_register_footer_menu' );
add_filter( 'nav_menu_css_class', 'commercialization_menu_classes', 11, 3 );

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

/**
 * Removes the `active` class from the item representing the Posts page
 * for Document post type archive views.
 *
 * Oddly, the value returned by `get_post_type_archive_link( 'document' )`
 * doesn't seem to match the URL that actually provides the archive view,
 * but as long as a Custom Link is used for the Documents menu item,
 * it should already have the `active` class anyway.
 *
 * @param array    $classes Current list of nav menu classes.
 * @param WP_Post  $item    Post object representing the menu item.
 * @param stdClass $args    Arguments used to create the menu.
 *
 * @return array Modified list of nav menu classes.
 */
function commercialization_menu_classes( $classes, $item, $args ) {
	if ( 'site' !== $args->menu || ! is_post_type_archive( 'document' ) ) {
		return $classes;
	}

	if ( get_permalink( get_option( 'page_for_posts' ) ) === $item->url ) {
		$classes = array();
	}

	return $classes;
}
