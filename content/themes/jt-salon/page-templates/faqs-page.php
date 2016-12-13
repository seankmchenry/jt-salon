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

                      /* FAQs */
                      if ( have_rows( 'faqs' ) ) { ?>
                        <div class="faq-section faq-area mt3 mb4">

                          <?php /* Title */
                          if ( get_field( 'faqs_section_title' ) ) { ?>
                            <h2 class="section-title faqs-section__title color-link"><?php the_field( 'faqs_section_title' ); ?></h2>
                          <?php }

                          // loop through rows
                          while ( have_rows( 'faqs' ) ): the_row(); ?>

                            <div class="faq-item faq-section__item mb2">
                              <?php
                              /* Question */
                              if ( get_sub_field( 'question' ) ) { ?>
                                <h3 class="faq-question faq-item__question fw-600"><?php the_sub_field( 'question' ); ?></h3>
                              <?php }

                              /* Answer */
                              if ( get_sub_field( 'answer' ) ) { ?>
                                <div class="faq-answer faq-item__answer">
                                  <?php echo wpautop( get_sub_field( 'answer' ) ); ?>
                                </div>
                              <?php } ?>
                            </div>

                          <?php endwhile; ?>

                        </div>
                      <?php }

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

      </main><!-- #main -->
    </div><!-- #primary -->

  </div><!-- #content -->

<?php
get_footer();
