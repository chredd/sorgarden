<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package sorgarden
 * @since sorgarden 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="row-fluid top-bar">
	<nav role="navigation" class="top-navigation">
		Här har vi lite text
	</nav>
</div>

<div id="page" class="hfeed site container-fluid">

	 <div class="row-fluid">
		<div class="span12">
			<?php do_action( 'before' ); ?>
			<header id="masthead" class="site-header" role="banner">

				<hgroup>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sorgarden-logo-2000.png" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" width="1000" />
						</a>
					</h1>
				</hgroup>

				<nav role="navigation" class="site-navigation main-navigation">
					<h1 class="assistive-text"><?php _e( 'Menu', 'sorgarden' ); ?></h1>
					<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'sorgarden' ); ?>"><?php _e( 'Skip to content', 'sorgarden' ); ?></a></div>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-primary', 'walker' =>  new ParentWalker() ) ); ?>
				</nav><!-- .site-navigation .main-navigation -->
			</header><!-- #masthead .site-header -->
		</div><!-- .span12 -->
	</div> <!-- .row-fluid -->

	<div id="main" class="row-fluid">

