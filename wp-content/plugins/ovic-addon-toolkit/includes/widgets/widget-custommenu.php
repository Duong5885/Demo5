<?php
if ( !defined( 'ABSPATH' ) ) {
	die( '-1' );
}
/**
 * Ovic Custom Menu
 *
 * Displays Custom Menu widget.
 *
 * @author   Khanh
 * @category Widgets
 * @package  Ovic/Widgets
 * @version  1.0.0
 * @extends  OVIC_Widget
 */
if ( !class_exists( 'Ovic_Custom_Menu_Widget' ) ) {
	class Ovic_Custom_Menu_Widget extends WP_Widget
	{
		/**
		 * Sets up a new Navigation Menu widget instance.
		 *
		 * @since 3.0.0
		 */
		public function __construct()
		{
			$widget_ops = array(
				'description'                 => esc_html__( 'Add a navigation menu to your sidebar.' ),
				'customize_selective_refresh' => true,
			);
			parent::__construct( 'ovic_nav_menu', esc_html__( 'Ovic: Custom Menu' ), $widget_ops );
		}

		/**
		 * Outputs the content for the current Navigation Menu widget instance.
		 *
		 * @param array $args Display arguments including 'before_title', 'after_title',
		 *                        'before_widget', and 'after_widget'.
		 * @param array $instance Settings for the current Navigation Menu widget instance.
		 *
		 * @since 3.0.0
		 *
		 */
		public function widget( $args, $instance )
		{
			// Get menu
			$nav_menu = !empty( $instance['nav_menu'] ) ? wp_get_nav_menu_object( $instance['nav_menu'] ) : false;
			if ( !$nav_menu ) {
				return;
			}
			$title = !empty( $instance['title'] ) ? $instance['title'] : '';
			/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
			$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
			echo $args['before_widget'];
			if ( $title ) {
				echo $args['before_title'] . $title . $args['after_title'];
			}
			$nav_menu_args = array(
				'fallback_cb' => '',
				'menu'        => $nav_menu,
			);
			/**
			 * Filters the arguments for the Navigation Menu widget.
			 *
			 * @param array        $nav_menu_args {
			 *     An array of arguments passed to wp_nav_menu() to retrieve a navigation menu.
			 *
			 * @type callable|bool $fallback_cb Callback to fire if the menu doesn't exist. Default empty.
			 * @type mixed         $menu Menu ID, slug, or name.
			 * }
			 *
			 * @param WP_Term      $nav_menu Nav menu object for the current menu.
			 * @param array        $args Display arguments for the current widget.
			 * @param array        $instance Array of settings for the current widget.
			 *
			 * @since 4.2.0
			 * @since 4.4.0 Added the `$instance` parameter.
			 *
			 */
			wp_nav_menu( apply_filters( 'widget_nav_menu_args', $nav_menu_args, $nav_menu, $args, $instance ) );
			echo $args['after_widget'];
		}

		/**
		 * Handles updating settings for the current Navigation Menu widget instance.
		 *
		 * @param array $new_instance New settings for this instance as input by the user via
		 *                            WP_Widget::form().
		 * @param array $old_instance Old settings for this instance.
		 *
		 * @return array Updated settings to save.
		 * @since 3.0.0
		 *
		 */
		public function update( $new_instance, $old_instance )
		{
			$instance = array();
			if ( !empty( $new_instance['title'] ) ) {
				$instance['title'] = sanitize_text_field( $new_instance['title'] );
			}
			if ( !empty( $new_instance['nav_menu'] ) ) {
				$instance['nav_menu'] = $new_instance['nav_menu'];
			}

			return $instance;
		}

		/**
		 * Outputs the settings form for the Navigation Menu widget.
		 *
		 * @param array                 $instance Current settings.
		 *
		 * @since 3.0.0
		 *
		 * @global WP_Customize_Manager $wp_customize
		 */
		public function form( $instance )
		{
			global $wp_customize;
			$title    = isset( $instance['title'] ) ? $instance['title'] : '';
			$nav_menu = isset( $instance['nav_menu'] ) ? $instance['nav_menu'] : '';
			// Get menus
			$menus = wp_get_nav_menus();
			// If no menus exists, direct the user to go and create some.
			?>
            <p class="nav-menu-widget-no-menus-message" <?php if ( !empty( $menus ) ) {
				echo ' style="display:none" ';
			} ?>>
				<?php
				if ( $wp_customize instanceof WP_Customize_Manager ) {
					$url = 'javascript: wp.customize.panel( "nav_menus" ).focus();';
				} else {
					$url = admin_url( 'nav-menus.php' );
				}
				?>
				<?php echo sprintf( __( 'No menus have been created yet. <a href="%s">Create some</a>.' ), esc_attr( $url ) ); ?>
            </p>
            <div class="nav-menu-widget-form-controls" <?php if ( empty( $menus ) ) {
				echo ' style="display:none" ';
			} ?>>
                <p>
                    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'ovic-addon-toolkit' ) ?></label>
                    <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                           name="<?php echo $this->get_field_name( 'title' ); ?>"
                           value="<?php echo esc_attr( $title ); ?>"/>
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id( 'nav_menu' ); ?>"><?php esc_html_e( 'Select Menu:', 'ovic-addon-toolkit' ); ?></label>
                    <select id="<?php echo $this->get_field_id( 'nav_menu' ); ?>"
                            name="<?php echo $this->get_field_name( 'nav_menu' ); ?>">
                        <option value="0"><?php esc_html_e( '&mdash; Select &mdash;', 'ovic-addon-toolkit' ); ?></option>
						<?php foreach ( $menus as $menu ) : ?>
                            <option value="<?php echo esc_attr( $menu->slug ); ?>" <?php selected( $nav_menu, $menu->slug ); ?>>
								<?php echo esc_html( $menu->name ); ?>
                            </option>
						<?php endforeach; ?>
                    </select>
                </p>
				<?php if ( $wp_customize instanceof WP_Customize_Manager ) : ?>
                    <p class="edit-selected-nav-menu" style="<?php if ( !$nav_menu ) {
						echo 'display: none;';
					} ?>">
                        <button type="button"
                                class="button"><?php esc_html_e( 'Edit Menu', 'ovic-addon-toolkit' ) ?></button>
                    </p>
				<?php endif; ?>
            </div>
			<?php
		}
	}

	/**
	 * Register Widgets.
	 *
	 * @since 2.3.0
	 */
	add_action( 'widgets_init',
		function () {
			register_widget( 'Ovic_Custom_Menu_Widget' );
		}
	);
}
