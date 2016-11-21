<?php
/**
 * Social Widget
 *
 * @package _s
 */

class Social_Widget extends WP_Widget {
  /**
   * Constructor
   */
  public function __construct() {
    $widget_args = array(
      'classname' => 'social-widget',
      'description' => __( 'Jessica Todd social widget.', '_s' )
    );
    parent::__construct( 'social_widget', __( 'JTS Social Widget', '_s' ), $widget_args );
  }

  /**
   * Display
   */
  public function widget( $args, $instance ) {
    // get the widget ID
    // @link https://goo.gl/X1HGhg
    $wid = 'widget_' . $args['widget_id']; ?>

    <section class="widget social-widget">
      <?php
      ?>
    </section>
  <?php }

  /**
   * Form
   */
  public function form( $instance ) {}
}

/**
 * Register
 */
function _s_register_social_widget() {
  register_widget( 'Social_Widget' );
}
add_action( 'widgets_init', '_s_register_social_widget' );
