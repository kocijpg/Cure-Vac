<?php
require get_stylesheet_directory() . '/inc/custom-widgets/social-links.php';

function os_theme_child_widgets_init() {
    register_widget( 'Social_Links' );
 }
 add_action( 'widgets_init', 'os_theme_child_widgets_init' );