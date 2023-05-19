<?php
/**
 * Helper Functions
**/

/**
 * Get the first term attached to post
 *
 * @param string $taxonomy
 * @param string/int $field, pass false to return object
 * @param int $post_id
 * @return string/object
 */
function os_first_term( $taxonomy = 'category', $field = false, $post_id = false ) {

	$post_id = $post_id ? $post_id : get_the_ID();
	$term = false;

	// Use WP SEO Primary Term
	// from https://github.com/Yoast/wordpress-seo/issues/4038
	if( class_exists( 'WPSEO_Primary_Term' ) ) {
		$term = get_term( ( new WPSEO_Primary_Term( $taxonomy,  $post_id ) )->get_primary_term(), $taxonomy );
	}

	// Fallback on term with highest post count
	if( ! $term || is_wp_error( $term ) ) {

		$terms = get_the_terms( $post_id, $taxonomy );

		if( empty( $terms ) || is_wp_error( $terms ) )
			return false;

		// If there's only one term, use that
		if( 1 == count( $terms ) ) {
			$term = array_shift( $terms );

		// If there's more than one...
		} else {

			// Sort by term order if available
			// @uses WP Term Order plugin
			if( isset( $terms[0]->order ) ) {
				$list = array();
				foreach( $terms as $term )
					$list[$term->order] = $term;
				ksort( $list, SORT_NUMERIC );

			// Or sort by post count
			} else {
				$list = array();
				foreach( $terms as $term )
					$list[$term->count] = $term;
				ksort( $list, SORT_NUMERIC );
				$list = array_reverse( $list );
			}

			$term = array_shift( $list );
		}
	}

	// Output
	if( $field && isset( $term->$field ) )
		return $term->$field;

	else
		return $term;
}

/**
 *  Get template as html
 *
 * @param string $template
 * @param array $data
 * @return string $output
 */
function render_template( $template, $data = array() ) {
	extract( $data );
	ob_start();
	include( $template );
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}

 /**
 * Prints site logo html
 */
function html_site_logo() {
	global $site_logo_url;
	$html = '';

	$site_logo_attr = array(
		'class' => 'site-logo',
	);

	if ($site_logo_url) {
		$site_logo_id = attachment_url_to_postid($site_logo_url);
		$image_alt = get_post_meta($site_logo_id, '_wp_attachment_image_alt', true);
		$site_title = get_bloginfo('name', 'display');
		if (empty($image_alt)) {
			$site_logo_attr['alt'] = $site_title;
		}

		$site_logo_elem = wp_get_attachment_image($site_logo_id, 'full', false, $site_logo_attr);

		$html = sprintf(
			'<a href="%1$s" class="site-logo-link" rel="home" title="%2$s">%3$s</a>',
			esc_url(home_url('/')),
			$site_title,
			$site_logo_elem
		);
	}

	echo $html;
}
