<?php
/**
 * Template part for the home CTA section
 *
 * @package _s
 */

// set up section variables
$cta_hdl = get_sub_field( 'cta_headline' );
$cta_txt = get_sub_field( 'cta_text' );

// check for CTA headline and text
if ( $cta_hdl && cta_text ) { ?>

  <section class="home-section home-cta home-section--cta">
    <div class="section-inner cta-section__inner center">

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-10 col-lg-8">

            <!-- Headline -->
            <h2 class="section-headline cta-headline cta-section__headline"><?php echo $cta_hdl; ?></h2>

            <!-- Text -->
            <div class="section-text cta-text cta-section__text"><?php echo $cta_txt; ?></div>

            <?php /* Links */
            if ( get_sub_field( 'cta_links' ) ) { ?>

              <div class="section-links cta-links cta-section__links">
                <?php // loop through links
                while ( have_rows( 'cta_links' ) ): the_row();
                  // set link fields to variables
                  $l_txt = get_sub_field( 'link_text' );
                  $l_page = get_sub_field( 'link_page' );

                  // check for text and page
                  if ( $l_txt && $l_page ) { ?>

                    <!-- Link -->
                    <a class="cta-link cta-section__link inline-block" href="<?php echo get_permalink( $l_page ); ?>"><?php echo $l_txt; ?></a>

                  <?php }

                endwhile; ?>
              </div>

            <?php } ?>

          </div>
        </div><!-- .row -->
      </div><!-- .container -->

    </div>
  </section>

<?php }