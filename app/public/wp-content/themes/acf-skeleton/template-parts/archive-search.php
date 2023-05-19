<?php
/**
 * Search result partial
 *
 * @package Olive_Studio_Starter_Theme
**/

echo '<article class="search-result">';

	echo '<header class="entry-header">';
		echo '<h2 class="entry-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
	echo '</header>';

	echo '<div class="entry-content">';
		$excerpt = get_the_excerpt();
		if( empty( $excerpt ) )
			$excerpt = get_post_meta( get_the_ID(), '_yoast_wpseo_metadesc', true );
		if( !empty( $excerpt ) )
			echo apply_filters( 'the_excerpt', $excerpt );
	echo '</div>';

echo '</article>';
