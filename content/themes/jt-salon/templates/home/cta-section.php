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
                while ( have_rows( 'cta_links' ) ): the_row(); ?>

                <?php endwhile; ?>
              </div>

            <?php } ?>

          </div>
        </div><!-- .row -->
      </div><!-- .container -->

    </div>
  </section>

<?php }