<?php
/**
 * Template part for the home hero section
 *
 * @package _s
 */

// set up section variables
$h_img = get_sub_field( 'hero_image' );
$h_txt = get_sub_field( 'hero_text' );

// check for hero image
if ( $h_img ) {
	// set hero image size
	$hero = $h_img['sizes']['hero']; ?>

	<section class="home-section hero-section home-section--hero bg-cover bg-darken p0" style="background-image: url('<?php echo $hero; ?>');">
		<div class="section-inner hero-section__inner center">
      <div class="section-text hero-text hero-section__text p3"><?php echo $h_txt; ?></div>
		</div>
	</section>

<?php }