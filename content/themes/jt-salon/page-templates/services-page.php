<?php
/**
 * Template Name: Services Overview Page
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
                the_content();

                /* Services */
                if ( have_rows( 'services' ) ) { ?>
                  <div class="service-items service-area mt3 mb3">

                    <div class="container">
                      <div class="row">

                        <?php // loop through services
                        while ( have_rows( 'services' ) ): the_row();

                          // set service link variable
                          $s_pobj = get_sub_field( 'service_link' );
                          $s_url = get_permalink( $s_pobj->ID );
                          ?>

                          <div class="col-xs-12 col-sm-6">
                            <div class="service-item service-area__item mb3 center">
                              <?php
                              /* Image */
                              if ( get_sub_field( 'service_photo' ) ) {
                                $img = get_sub_field( 'service_photo' );

                                // check for link
                                if ( $s_url ) { ?>
                                  <a href="<?php echo $s_url; ?>">
                                    <img class="service-image service-item__image block br50 mx-auto hover-lighten" src="<?php echo $img['sizes']['thumbnail']; ?>" alt="<?php echo $img['alt']; ?>" />
                                  </a>
                                <?php } else { ?>
                                  <img class="service-image service-item__image block br50 mx-auto" src="<?php echo $img['sizes']['thumbnail']; ?>" alt="<?php echo $img['alt']; ?>" />
                                <?php }
                              }

                              /* Name */
                              if ( get_sub_field( 'service_name' ) ) {
                                // check for link
                                if ( $s_url ) { ?>
                                  <h2 class="service-name service-item__name h5 inline-block px2">
                                    <a href="<?php echo $s_url; ?>"><?php the_sub_field( 'service_name' ); ?></a>
                                  </h2>
                                <?php } else { ?>
                                  <h2 class="service-name service-item__name h5 inline-block px2"><?php the_sub_field( 'service_name' ); ?></h2>
                                <?php }
                              } ?>
                            </div>
                          </div>

                        <?php endwhile; ?>

                      </div><!-- .row -->
                    </div><!-- .container -->

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
