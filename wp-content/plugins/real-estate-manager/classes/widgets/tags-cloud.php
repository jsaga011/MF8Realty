<?php
/**
 * Adds REM_Tags_Cloud_W widget.
 */
class REM_Tags_Cloud_W extends WP_Widget {

	/**
	 * Register rem_tags_cloud_widget widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'rem_tags_cloud_widget', // Base ID
			__( 'REM - Tags Cloud', 'real-estate-manager' ), // Name
			array( 'description' => __( 'Displays Properties Tags Cloud', 'real-estate-manager' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {

		extract($instance);
		echo '<div class="rem-tag-cloud">';
		if ( isset($instance['title']) ) {
			echo wp_kses_post($args['before_title']) . apply_filters( 'widget_title', $instance['title'] ) . wp_kses_post($args['after_title']);
		}
		$cloud_args = array('taxonomy' => 'rem_property_tag');
		wp_tag_cloud( $cloud_args );
		echo '</div>';
	}

	public function form( $instance ) {
		extract($instance);
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title','real-estate-manager' ); ?></label> 
			<input
				class="widefat"
				id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
				name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
				type="text" value="<?php echo (isset($instance['title'])) ? esc_attr($instance['title']) : '' ; ?>"
			>
		</p>
		<?php 
	}

	public function update( $new_instance, $old_instance ) {

		return $new_instance;
	}

}

if (! function_exists ( 'rem_tags_cloud_widget' )) :
	function rem_tags_cloud_widget() {
	    register_widget( 'REM_Tags_Cloud_W' );
	}
endif;
add_action( 'widgets_init', 'rem_tags_cloud_widget' );

?>