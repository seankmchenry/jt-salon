<?php
/**
 * Template Name: Gallery Page
 *
 * @package _s
 */

get_header(); ?>

  <div id="content" class="site-content">

    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <div class="container">
          <div class="row">
            <div class="col-xs-12">

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

                      /* Gallery */
                      if ( have_rows( 'gallery_tabs' ) ) { ?>
                        <div class="gallery-area gallery-tabs">

                          <!-- Tab Nav -->
                          <ul class="gallery-nav gallery-tabs__nav list-reset mt3 mb2 center">
                            <?php // loop through tabs
                            while ( have_rows( 'gallery_tabs' ) ): the_row();
                              // Tab title
                              if ( get_sub_field( 'tab_title' ) ) { ?>
                                <li class="tab gallery-nav__tab inline-block"><a href="#<?php echo _s_get_ID_slug( get_sub_field( 'tab_title' ) ); ?>"><?php the_sub_field( 'tab_title' ); ?></a></li>
                              <?php }
                            endwhile; ?>
                          </ul>

                          <?php
                          /* Tabs */
                          // set a counter for numbered galleries
                          $count = 1;

                          // loop through gallery tabs
                          while ( have_rows( 'gallery_tabs' ) ): the_row(); ?>

                            <!-- Tab Content -->
                            <div id="<?php echo _s_get_ID_slug( get_sub_field( 'tab_title' ) ); ?>" class="gallery-tab gallery-area__tab">
                              <?php /* Images */
                              $images = get_sub_field( 'images' );

                              // check for images
                              if ( $images ) { ?>
                                <div class="gallery-content gallery-tab__content">
                                  <div class="row">
                                    <?php // loop through images
                                    foreach ( $images as $image ) { ?>
                                      <div class="col-xs-6 col-sm-4 col-lg-3 p0">
                                        <a class="gallery-image gallery-content__image bg-cover block" href="<?php echo $image['url'];?>" data-lightbox="gallery-<?php echo $count; ?>" style="background-image: url('<?php echo $image['sizes']['medium'];?>');">
                                        </a>
                                      </div>
                                    <?php } ?>
                                  </div>
                                </div>
                              <?php } ?>
                            </div>

                          <?php
                          // increment counter
                          $count++;

                          // end the loop
                          endwhile; ?>
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

            </div>
          </div><!-- .row -->
        </div><!-- .container -->

      </main><!-- #main -->
    </div><!-- #primary -->

  </div><!-- #content -->

<?php
get_footer();
