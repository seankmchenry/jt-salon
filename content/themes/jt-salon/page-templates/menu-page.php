<?php
/**
 * Template Name: Menu Page
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

                    <div class="row center">
                      <div class="col-xs-12 col-sm-10">

                        <?php
                          /* Featured image */
                          if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'large' );
                          }

                          the_content();
                        ?>
                      </div>
                    </div>

                    <?php
                    /* Menu */
                    if ( have_rows( 'services' ) ) { ?>
                      <div class="menu-area service-items mt3">

                        <table class="services-table service-items__table mx-auto">
                          <tr>
                            <th>Stylist Levels</th>
                            <th><div class="rounded"><span>Entry<span></th>
                            <th><div class="rounded"><span>1</span></th>
                            <th><div class="rounded"><span>2</span></th>
                            <th><div class="rounded"><span>3</span></th>
                            <th><div class="rounded"><span>4</span></th>
                            <th><div class="rounded"><span>5</span></th>
                            <th><div class="rounded"><span>6</span></th>
                          </tr>

                          <?php // loop through menu items
                          while ( have_rows( 'services' ) ): the_row();
                            // set level variables
                            $lev_e = get_sub_field( 'entry_level_price' );
                            $lev_1 = get_sub_field( 'level_1_price' );
                            $lev_2 = get_sub_field( 'level_2_price' );
                            $lev_3 = get_sub_field( 'level_3_price' );
                            $lev_4 = get_sub_field( 'level_4_price' );
                            $lev_5 = get_sub_field( 'level_5_price' );
                            $lev_6 = get_sub_field( 'level_6_price' );
                            ?>

                            <tr>
                              <?php
                              /* Service Title */
                              if ( get_sub_field( 'service_title' ) ) { ?>
                                <td><?php the_sub_field( 'service_title' ); ?></td>
                              <?php } ?>

                              <!-- Entry level price -->
                              <td><?php echo _s_menu_item_price( $lev_e ); ?></td>

                              <!-- Level 1 price -->
                              <td><?php echo _s_menu_item_price( $lev_1 ); ?></td>

                              <!-- Level 2 price -->
                              <td><?php echo _s_menu_item_price( $lev_2 ); ?></td>

                              <!-- Level 3 price -->
                              <td><?php echo _s_menu_item_price( $lev_3 ); ?></td>

                              <!-- Level 4 price -->
                              <td><?php echo _s_menu_item_price( $lev_4 ); ?></td>

                              <!-- Level 5 price -->
                              <td><?php echo _s_menu_item_price( $lev_5 ); ?></td>

                              <!-- Level 6 price -->
                              <td><?php echo _s_menu_item_price( $lev_6 ); ?></td>
                            </tr>
                          <?php endwhile; ?>

                        </table>

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
