<?php
/**
 * Template Name: FAQs Page
 *
 * @package _s
 */

get_header(); ?>

  <div id="content" class="site-content">

    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <div class="container">
          <div class="row center">
            <div class="col-xs-12 col-sm-10 center">

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

                      /* FAQ Sections */
                      if ( have_rows( 'faq_sections' ) ) :
                        // loop through sections
                        while ( have_rows( 'faq_sections' ) ) : the_row(); ?>

                          <!-- Section -->
                          <div class="page-section faq-section mt3 mb4">
                            <div class="text-area faq-section__text-area">
                              <?php
                              /* Title */
                              if ( get_sub_field( 'section_title' ) ) { ?>
                                <h2 class="section-title faqs-section__title mb2 color-link"><?php echo strtolower( get_sub_field( 'section_title' ) ); ?></h2>
                              <?php }

                              /* Text */
                              if ( get_sub_field( 'section_text' ) ) { ?>
                                <div class="section-text faqs-section__text mb3">
                                  <?php echo wpautop( get_sub_field( 'section_text' ) ); ?>
                                </div>
                              <?php } ?>
                            </div>

                            <?php /* FAQs */
                            if ( have_rows( 'faqs' ) ) {
                              // loop through FAQs
                              while ( have_rows( 'faqs' ) ) : the_row(); ?>
                                <div class="faq-item faq-section__faq mt0 mb2">
                                  <?php
                                  /* Question */
                                  if ( get_sub_field( 'question' ) ) { ?>
                                    <h3 class="faq-question faq-item__question mt0 mb1 fw-600"><?php the_sub_field( 'question' ); ?></h3>
                                  <?php }

                                  /* Answer */
                                  if ( get_sub_field( 'answer' ) ) { ?>
                                    <div class="faq-answer faq-item__answer">
                                      <?php echo wpautop( get_sub_field( 'answer' ) ); ?>
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
