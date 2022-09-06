<?php
/**
 * Class to create a widget ( I selected one from codex - only there I could find with coding standarts )
 */
class Archive_Widget extends WP_Widget {
	/**
	 * Construct Magic Method IDK
	 */
	public function __construct() {

		parent::__construct(
			'archive-widget',  // Base ID.
			'Archive Widget'   // Name.
		);

		add_action(
			'widgets_init',
			function() {
				register_widget( 'Archive_Widget' );
			}
		);

	}
	/**
	 * Construct Magic Method IDK
	 *
	 * @var $args
	 */
	public $args = array(
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div></div>',
	);

	/**
	 * Construct Magic Method IDK
	 */
	public function widget( $args, $instance ) {

		$countries = get_terms( 'country' );
		$positions = get_terms( 'position' );

		echo $args['before_widget'];

		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		} ?>

		<div>

			<label for="" class="speakers-select-label">
				<?php esc_html_e( 'Countries', 'twenty-twenty-child' ); ?>
			</label>
			<select class="country-terms select_filter" name="countries[]" multiple="multiple" data-tax="positions">
				<?php foreach ( $countries as $country ) : ?>
					<option class="country-term" data-slug="<?php echo esc_html( $country->slug ); ?>" value="<?php echo esc_html( $country->slug ); ?>">
						<?php echo esc_html( $country->name ); ?>
					</option>
				<?php endforeach; ?>
			</select>

			<label for="" class="speakers-select-label">
				<?php esc_html_e( 'Positions', 'twenty-twenty-child' ); ?>
			</label>
			<select class="position-terms select_filter" name="positions[]" multiple="multiple" data-tax="countries">	
				<?php foreach ( $positions as $position ) : ?>
					<option class="country-term" data-slug="<?php echo esc_html( $position->slug ); ?>" value="<?php echo esc_html( $position->slug ); ?>">
						<?php echo esc_html( $position->name ); ?>
					</option>
				<?php endforeach; ?>
			</select>

		</div>

		<?php
		echo $args['after_widget'];
	}

	public function form( $instance ) {

		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Default Title', 'twenty-twenty-child' );
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'twenty-twenty-child' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php

	}

	public function update( $new_instance, $old_instance ) {

		$instance = array();

		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}

}
$archive_widget = new Archive_Widget();
?>
