<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php global $redux_data; ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscore' ); ?></a>



	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<!-- Site Info -->
			<!-- If Have Top Header -->
			<?php if ($redux_data['top-header-chk'] == 1): ?>
				<div class="top-header">
					<div class="row align-center">
						<div class="large-3 medium-4">
							<p>Location</p>
						</div>
						<div class="large-3 medium-4">
							<p>Contact No.</p>
						</div>
						<div class="large-3 medium-4">
							<p>Telephone No.</p>
						</div>
					</div>
				</div>
			<?php endif ?>
			<!-- End If Have Top Header -->
			<!-- Mid Header -->
			<div class="mid-header">
				<div class="row">
					<!-- Site Logo -->
					<div class="large-6 columns">
						<h1 class="site-logo">380 x 80</h1>
						<!-- redux site-logo -->
						<!-- <img src="<?php echo $redux_data['opt-site-logo']['url']; ?>"> -->
					</div>

					<!-- site-navigation menu -->

					<div class="large-6 columns site-navigation">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'underscore' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div><!-- .site-branding -->
<!-- End If Have Top Header -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
