<?php
/**
 * CTA Widget
 *
 * @package _s
 */

class CTA_Widget extends WP_Widget {
  /**
   * Constructor
   */
  public function __construct() {
    $widget_args = array(
      'classname' => 'cta-widget',
      'description' => __( 'Jessica Todd CTA widget.', '_s' )
    );
    parent::__construct( 'cta_widget', __( 'JTS CTA Widget', '_s' ), $widget_args );
  }

  /**
   * Display
   */
  public function widget( $args, $instance ) {
    // get the widget ID
    // @link https://goo.gl/X1HGhg
    $wid = 'widget_' . $args['widget_id']; ?>

    <section class="widget cta-widget">
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
function _s_register_cta_widget() {
  register_widget( 'CTA_Widget' );
}
add_action( 'widgets_init', '_s_register_cta_widget' );
