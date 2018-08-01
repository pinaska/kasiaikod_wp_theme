<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kasiaikod
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if ( ! kasiaikod_is_amp() ) : ?>
		<script>document.documentElement.classList.remove("no-js");</script>
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kasiaikod' ); ?></a>
		<header id="masthead" class="site-header">
		<?php the_custom_logo(); ?>
			<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main menu', 'kasiaikod' ); ?>"
				<?php if ( kasiaikod_is_amp() ) : ?>
					[class]=" siteNavigationMenu.expanded ? 'main-navigation toggled-on' : 'main-navigation' "
				<?php endif; ?>

				<?php if ( kasiaikod_is_amp() ) : ?>
					<amp-state id="siteNavigationMenu">
						<script type="application/json">
							{
								"expanded": false
							}
						</script>
					</amp-state>
				<?php endif; ?>
				<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"></h1>
						<?php else : ?>
							<p class="site-title"></p>
						<?php endif; ?>

				<button class="menu-toggle" aria-label="<?php esc_attr_e( 'Open menu', 'kasiaikod' ); ?>" aria-controls="primary-menu" aria-expanded="false"
					<?php if ( kasiaikod_is_amp() ) : ?>
						on="tap:AMP.setState( { siteNavigationMenu: { expanded: ! siteNavigationMenu.expanded } } )"
						[aria-expanded]="siteNavigationMenu.expanded ? 'true' : 'false'"
					<?php endif; ?>
				>
					<?php esc_html_e( 'Kasia i kod', 'kasiaikod' ); ?>
				</button>

				<div class="primary-menu-container">
					<?php

					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'container'      => 'ul',
						)
					);

					?>
				</div>
				<div class="social-menu-container">
					<ul class="social-icons">
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-github"></i></a></li>
						<li><a href="#"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
					<?php

					wp_nav_menu(
						array(
							'theme_location' => 'social',
							'menu_class'  => 'social-links-menu',
						)
					);
					?>
				</div>
			</nav><!-- #site-navigation -->
			<div class="site-branding">
				<div class="gradient-placer">
					<div class="first"></div>
					<div class="second"></div>
					<div class="third"></div>
					<div class="txt">
						<?php $kasiaikod_description = get_bloginfo( 'description', 'display' ); ?>
						<?php if ( $kasiaikod_description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $kasiaikod_description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
					</div><!--.txt-->
				</div><!--.gradient-placer-->
			</div><!-- .site-branding -->



		</header><!-- #masthead -->
