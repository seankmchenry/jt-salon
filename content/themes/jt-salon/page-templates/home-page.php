<?php
/**
 * Template Name: Home Page
 *
 * @package _s
 */

get_header(); ?>

  <div id="content" class="site-content p0">

    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <?php
        while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
              <?php
              /* Sections */
              if ( have_rows( 'home_sections' ) ):
                while ( have_rows( 'home_sections' ) ): the_row();

                  /* Hero */
                  if ( get_row_layout() == 'hero_section' ) {
                    get_template_part( 'templates/home/hero', 'section' );
                  }

                  /* Message */
                  if ( get_row_layout() == 'message_section' ) {
                    get_template_part( 'templates/home/message', 'section' );
                  }

                  /* CTA */
                  if ( get_row_layout() == 'cta_section' ) {
                    get_template_part( 'templates/home/cta', 'section' );
                  }

                endwhile;
              endif;

                wp_link_pages( array(
                  'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
                  'after'  => '</div>',
                ) );
              ?>
            </div><!-- .entry-content -->
          </article><!-- #post-## -->

        <?php endwhile; // End of the loop.
        ?>

      </main><!-- #main -->
    </div><!-- #primary -->

  </div><!-- #content -->

<?php
get_footer();
