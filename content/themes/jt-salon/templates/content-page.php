<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="entry-title center"><?php _s_custom_page_title(); ?></h1>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php
      /* Featured image */
      if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'large' );
      }

      the_content();

      /* Text CTA */
      if ( get_field( 'text_cta' ) ) {
        get_template_part( 'templates/global/text', 'cta' );
      }

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-## -->
