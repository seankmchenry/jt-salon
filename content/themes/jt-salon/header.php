<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Web fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700|Playfair+Display:400,400i,700" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico">
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php /* Mobile Nav */
get_template_part( 'templates/global/mobile', 'nav' ); ?>

<div id="page" class="site">
  <a class="skip-link sr-only" href="#main"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <nav id="site-navigation" class="main-navigation main-nav" role="navigation">
      <button class="menu-toggle btn btn-primary visible-sm" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', '_s' ); ?></button>
      <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_class' => 'main-nav__menu hidden-sm', 'items_wrap' => _s_nav_wrap() ) ); ?>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->
