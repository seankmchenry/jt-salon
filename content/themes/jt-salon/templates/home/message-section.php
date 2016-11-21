<?php
/**
 * Template part for the home message section
 *
 * @package _s
 */

// set up section variables
$m_txt = get_sub_field( 'message_text' );

// check for message text
if ( $m_txt ) { ?>

  <section class="home-section home-message home-section--message">
    <div class="section-inner message-section__inner center">

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-10 col-lg-8">

            <div class="section-text message-text message-section__text"><?php echo $m_txt; ?></div>

          </div>
        </div><!-- .row -->
      </div><!-- .container -->

    </div>
  </section>

<?php }