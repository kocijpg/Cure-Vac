<?php
/**
 * WordPress Cleanup
 *
 * @package Olive_Studio_Starter_Theme
**/

 /**
  * Dont Update the Theme
  *
  * If there is a theme in the repo with the same name, this prevents WP from prompting an update.
  *
  * @since  1.0.0
  * @author Bill Erickson
  * @link   http://www.billerickson.net/excluding-theme-from-updates
  * @param  array $r Existing request arguments
  * @param  string $url Request URL
  * @return array Amended request arguments
  */
 function os_dont_update_theme( $r, $url ) {
 	if ( 0 !== strpos( $url, 'https://api.wordpress.org/themes/update-check/1.1/' ) )
  		return $r; // Not a theme update request. Bail immediately.
  	$themes = json_decode( $r['body']['themes'] );
  	$child = get_option( 'stylesheet' );
 	unset( $themes->themes->$child );
  	$r['body']['themes'] = json_encode( $themes );
  	return $r;
  }
 add_filter( 'http_request_args', 'os_dont_update_theme', 5, 2 );

/**
 * Dequeue jQuery Migrate
 *
 */
function os_dequeue_jquery_migrate( &$scripts ){
	if( !is_admin() ) {
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
	}
}
add_filter( 'wp_default_scripts', 'os_dequeue_jquery_migrate' );

/**
 * Clean Nav Menu Classes
 *
 */
function os_clean_nav_menu_classes( $classes ) {
	if( ! is_array( $classes ) )
		return $classes;

	foreach( $classes as $i => $class ) {

		// Remove class with menu item id
		$id = strtok( $class, 'menu-item-' );
		if( 0 < intval( $id ) )
			unset( $classes[ $i ] );

		// Remove menu-item-type-*
		if( false !== strpos( $class, 'menu-item-type-' ) )
			unset( $classes[ $i ] );

		// Remove menu-item-object-*
		if( false !== strpos( $class, 'menu-item-object-' ) )
			unset( $classes[ $i ] );

		// Change page ancestor to menu ancestor
		if( 'current-page-ancestor' == $class ) {
			$classes[] = 'current-menu-ancestor';
			unset( $classes[ $i ] );
		}
	}

	// Remove submenu class if depth is limited
	if( isset( $args->depth ) && 1 === $args->depth ) {
		$classes = array_diff( $classes, array( 'menu-item-has-children' ) );
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'os_clean_nav_menu_classes', 5 );

/**
 * Clean Post Classes
 *
 */
function os_clean_post_classes( $classes ) {

	if( ! is_array( $classes ) )
		return $classes;

	$allowed_classes = array(
  		'hentry',
  		'type-' . get_post_type(),
   	);

	return array_intersect( $classes, $allowed_classes );
}
add_filter( 'post_class', 'os_clean_post_classes', 5 );

/**
 * Staff comment class
 *
 */
function os_staff_comment_class( $classes, $class, $comment_id, $comment, $post_id ) {
	if( empty( $comment->user_id ) )
		return $classes;
	$staff_roles = array( 'comment_manager', 'author', 'editor', 'administrator' );
	$staff_roles = apply_filters( 'os_staff_roles', $staff_roles );
	$user = get_userdata( $comment->user_id );
	if( !empty( array_intersect( $user->roles, $staff_roles ) ) )
		$classes[] = 'staff';
	return $classes;
}
add_filter( 'comment_class', 'os_staff_comment_class', 10, 5 );

/**
 * Remove avatars from comment list
 *
 */
function os_remove_avatars_from_comments( $avatar ) {
	global $in_comment_loop;
	return $in_comment_loop ? '' : $avatar;
}
add_filter( 'get_avatar', 'os_remove_avatars_from_comments' );

/**
 * Comment form, button class
 *
 */
function os_comment_form_button_class( $args ) {
	$args['class_submit'] = 'submit wp-block-button__link';
	return $args;
}
add_filter( 'comment_form_defaults', 'os_comment_form_button_class' );

/**
 * Excerpt More
 *
 */
function os_excerpt_more() {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'os_excerpt_more' );