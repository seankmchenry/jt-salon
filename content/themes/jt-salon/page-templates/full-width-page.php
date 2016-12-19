<?php
/**
 * Template Name: Full-Width Page
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
              while ( have_posts() ) : the_post();

                get_template_part( 'templates/content', 'page' );

              endwhile; // End of the loop.
              ?>

            </div>
          </div><!-- .row -->
        </div><!-- .container -->

      </main><!-- #main -->
    </div><!-- #primary -->

  </div><!-- #content -->

<?php
get_footer();
