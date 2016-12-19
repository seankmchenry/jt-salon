<?php
/**
 * Template Name: Highlights Page
 *
 * @package _s
 */

get_header(); ?>

  <div id="content" class="site-content">

    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <div class="container">
          <div class="row center">
            <div class="col-xs-12 col-sm-10">

              <?php
              while ( have_posts() ) : the_post(); ?>

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

                      /* Highlight Sections */
                      if ( have_rows( 'highlight_sections' ) ) :
                        // loop through sections
                        while ( have_rows( 'highlight_sections' ) ) : the_row(); ?>

                          <!-- Section -->
                          <div class="page-section highlight-section mt3 mb2 sm-mb3 md-mb4">
                            <div class="text-area highlight-section__text-area mb3">
                              <?php
                              /* Title */
                              if ( get_sub_field( 'section_title' ) ) { ?>
                                <h2 class="section-title highlight-section__title mb2 color-link"><?php the_sub_field( 'section_title' ); ?></h2>
                              <?php }

                              /* Text */
                              if ( get_sub_field( 'section_text' ) ) { ?>
                                <div class="section-text highlight-section__text mb3">
                                  <?php echo wpautop( get_sub_field( 'section_text' ) ); ?>
                                </div>
                              <?php } ?>
                            </div>

                            <?php /* Highlights */
                            if ( have_rows( 'highlights' ) ) {
                              // loop through highlights
                              while ( have_rows( 'highlights' ) ) : the_row(); ?>
                                <div class="highlight-item highlight-section__highlight mt0 mb2">
                                  <?php
                                  /* Question */
                                  if ( get_sub_field( 'highlight_headline' ) ) { ?>
                                    <h3 class="highlight-question highlight-item__headline mt0 mb1 fw-600"><?php the_sub_field( 'highlight_headline' ); ?></h3>
                                  <?php }

                                  /* Answer */
                                  if ( get_sub_field( 'highlight_text' ) ) { ?>
                                    <div class="highlight-answer highlight-item__text">
                                      <?php echo wpautop( get_sub_field( 'highlight_text' ) ); ?>
                                    </div>
                                  <?php } ?>
                                </div>
                              <?php endwhile;
                            } ?>
                          </div>

                        <?php endwhile;
                      endif;

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

              <?php endwhile; // End of the loop.
              ?>

            </div>
          </div><!-- .row -->
        </div><!-- .container -->

      </main><!-- #main -->
    </div><!-- #primary -->

  </div><!-- #content -->

<?php
get_footer();
