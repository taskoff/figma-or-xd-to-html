<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
	
	<header class="site-header <?php if (is_front_page()) : echo ("home-page-header") ?> <?php endif; ?> ">
		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar" >
			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
			<nav id="main-nav" class="navbar navbar-expand-lg section-wrapper" aria-labelledby="main-nav-label">
				<div class="site-logo">
					<img src="<?php echo get_template_directory_uri() . '../img/logo.svg' ?>" alt="">
				</div>
				<h3 class="center" >EDUCATION</h3>
				<!-- The WordPress Menu goes here -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon">Menu</span>
				</button>
				<?php
				wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
				);
				?>

			</nav><!-- .site-navigation -->
			<div class="home-page-title-wrapper">
				<h1 class="home-title">Knowledge is power</h1>
				<p class="home-title-under">Any succesfull career starts with good education</p>
				<button class=" button button--primary">Learn more</button>
				<div class="bullet-wrapper">
					<div class="bullet"></div>
					<div class="bullet"></div>
					<div class="bullet"></div>
					<div class="bullet"></div>
				</div>
			</div>
		</div><!-- #wrapper-navbar end -->
	</header>

