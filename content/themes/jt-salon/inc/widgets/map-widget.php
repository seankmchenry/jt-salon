<?php
/**
 * Map Widget
 *
 * @package _s
 */

class Map_Widget extends WP_Widget {
  /**
   * Constructor
   */
  public function __construct() {
    $widget_args = array(
      'classname' => 'map-widget',
      'description' => __( 'Jessica Todd map widget.', '_s' )
    );
    parent::__construct( 'map_widget', __( 'JTS Map Widget', '_s' ), $widget_args );
  }

  /**
   * Display
   */
  public function widget( $args, $instance ) {
    // get the widget ID
    // @link https://goo.gl/X1HGhg
    $wid = 'widget_' . $args['widget_id']; ?>

    <section class="widget map-widget">
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
function _s_register_map_widget() {
  register_widget( 'Map_Widget' );
}
add_action( 'widgets_init', '_s_register_map_widget' );
