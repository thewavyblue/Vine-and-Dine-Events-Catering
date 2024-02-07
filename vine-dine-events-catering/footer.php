<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vine_&_Dine_Events_Catering
 */

?>
<footer id="colophon" class="site-footer">

	<div class="row justify-content-center">
		<div class="col col-sm-10 col-md-10 col-lg-12 col-xxl-8">
			<!-- Nav bar  -->
			<nav id="footer-site-navigation" class="footer-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'footer-nav-menu',
					)
				);
				?>
			</nav>
			<!-- Nav Bar END -->
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col col-sm-10 col-md-10 col-lg-12 col-xxl-8">
			<div class="site-info">
				<span><span class="footer-logo"><?php the_custom_logo(); ?></span>
					<span>© All rights reserved, <span id="current-year"></span>.</span></span>
				<span>Web design by Ben Hoath</span>
				<ul class="nav-menu footer-menu">
					<li><a href="#">Cookies</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms & Conditions</a></li>
				</ul>
			</div><!-- .site-info -->
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/03b84c63fb.js" crossorigin="anonymous"></script>
<script>
	const currentDate = new Date();
	const currentYear = currentDate.getFullYear();
	document.getElementById("current-year").textContent = currentYear;
</script>
</body>

</html>