<?php
/**
 * Template Name: Salon Page
 *
 * @package _s
 */

get_header(); ?>

  <div id="content" class="site-content">

    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <?php
        while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header sr-only">
              <h1 class="entry-title center"><?php _s_custom_page_title(); ?></h1>
            </header><!-- .entry-header -->

            <div class="entry-content">
              <?php
                /* Bio Area */
                if ( have_rows( 'bio_area' ) ) { ?>
                  <div class="bio-area jt-bio-area salon-page__bio">
                    <?php // loop through rows (there is only 1)
                    while ( have_rows( 'bio_area' ) ): the_row();

                      /* Photos */
                      // check for accent images - these
                      // appear on either side of bio photo
                      $a_gal = get_sub_field( 'accent_images' );
                      var_dump( $a_gal );

                    endwhile; ?>
                  </div>
                <?php }

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
