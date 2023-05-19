<?php
/**
 * Class Name: Social_Links
 * Description: A custom social links menu.
 * Version: 1.0.0
 * Author: Olive Studio
 * Author URI: https://www.olivestudio.net/
 */
class Social_Links extends WP_Widget {

	/**
	 * The class constructor. Calls the parent constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$widget_ops = array(
			'classname' => 'social-links-wrapper',
			'description' => 'Social Links',
		);
		parent::__construct( 'social_links', 'Social Links', $widget_ops );
	}

	/**
	 * Output the widget content on the front-end
	 *
	 * @since 1.0.0
	 */
	public function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title', $instance['title'] );
		$social_links = get_social_links_array();


		echo $before_widget;
		echo '<div class="social-links-widget">';

		if ( ! empty( $title ) ) {
			echo $before_title . $title . $after_title;
		}

		echo '<div class="social-links-wrapper">';
		foreach ( $social_links as $social_link ) {
			$social_link_url = get_theme_mod($social_link . '_link');
			
			if ( $social_link_url != '' ) {
				if( $social_link == 'linkedin') {
						$social_icon = '<i class="fa-brands fa-linkedin-in fa-2x" aria-label="' . $social_link . '"></i>';
				} else {
						$social_icon = '<i class="fa-brands fa-' . $social_link . ' fa-2x" aria-label="' . $social_link . '"></i>';
				}

				echo '<a class="social-link" href="' . $social_link_url . '" target="_blank" aria-label="' . $social_link . __(' (New Window)', 'os-theme') . '">';
					echo $social_icon;
				echo '</a>';
			}


		}
		echo '</div>';

		echo '</div>';
		echo $after_widget;
	}

	/**
	 * Output the option form field in admin Widgets screen
	 *
	 * @since 1.0.0
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

	/**
	 * Save options
	 *
	 * @since 1.0.0
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}
