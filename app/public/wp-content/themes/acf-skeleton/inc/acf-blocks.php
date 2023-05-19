<?php 
add_action( 'init', 'os_theme_register_acf_blocks' );
function os_theme_register_acf_blocks() {
  $blocks_directories = array_filter(glob(get_template_directory() . '/blocks/*'), 'is_dir');
  if( !empty( $blocks_directories ) ) {
    foreach( $blocks_directories as $dir ) {
      register_block_type( $dir );
    }
  }
}