<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vine_&_Dine_Events_Catering
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/03b84c63fb.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'vine-dine-events-catering'); ?></a>

		<header id="masthead" class="site-header">

			<!-- Logo -->
			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$vine_dine_events_catering_description = get_bloginfo('description', 'display');
				if ($vine_dine_events_catering_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $vine_dine_events_catering_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			</div>
			<!-- Logo END -->


			<!-- Nav bar  -->
			<nav id="site-navigation" class="main-navigation">
				<button id="menu-nav-btn" class="menu-toggle menu-nav-icon" aria-controls="primary-menu" aria-expanded="false"><svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none">
  <path id="icon-knife" d="M35.6081 6C34.3108 6 34.3108 7.2973 34.3108 7.2973V29.3514H34.3432C33.9703 33.0649 33.5 35.5784 33.5 37.1351C33.5 38.4324 33.5 39.7297 34.7973 41.027C36.0946 42.3243 36.0946 42.3243 37.3919 41.027C38.6892 39.7297 38.6892 38.4324 38.6892 37.1351C38.6892 35.3432 38.073 32.3108 37.6838 27.6081C38.6811 25.1676 39.5 22.0703 39.5 18.973C39.5 15.0811 37.4081 7.81622 35.6081 6Z" fill="#616161"/>
  <path id="icon-spoon" d="M27.6017 8.27982C26.6286 6.82008 25.3087 6 23.9324 6C22.5562 6 21.2363 6.82008 20.2631 8.27982C19.29 9.73956 18.7432 11.7194 18.7432 13.7838C18.7434 15.5071 19.1248 17.1816 19.8277 18.5448C20.5305 19.9079 21.5151 20.8827 22.627 21.3162C22.5378 29.7486 21.3378 34.6378 21.3378 37.1351C21.3378 38.4324 21.3378 39.7297 22.6351 41.027C23.9324 42.3243 23.9324 42.3243 25.2297 41.027C26.527 39.7297 26.527 38.4324 26.527 37.1351C26.527 34.6378 25.327 29.7486 25.2378 21.3081C26.3489 20.8749 27.3328 19.9014 28.0355 18.5399C28.7383 17.1783 29.1203 15.5057 29.1216 13.7838C29.1216 11.7194 28.5749 9.73956 27.6017 8.27982Z" fill="#616161"/>
  <path id="icon-fork" d="M15.2838 17.6757V6H13.8243V13.7838H12.1216V6H10.6622V13.7838H8.95946V6H7.5V17.6757C7.5 18.973 10.0946 20.2703 10.0946 20.2703C10.0946 29.3514 8.7973 34.5405 8.7973 37.1351C8.7973 38.4324 8.7973 39.7297 10.0946 41.027C11.3919 42.3243 11.3919 42.3243 12.6892 41.027C13.9865 39.7297 13.9865 38.4324 13.9865 37.1351C13.9865 34.5405 12.6892 29.3514 12.6892 20.2703C12.6892 20.2703 15.2838 18.973 15.2838 17.6757Z" fill="#616161"/>
</svg></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>

			<!-- Navbar Request Button -->
			<script>
				const btnRequestABrochure = document.getElementById('menu-item-188');
				btnRequestABrochure.classList.add('custom-cta-btn');
			</script>
			<!-- Nav Bar END -->
		</header><!-- #masthead -->

		

