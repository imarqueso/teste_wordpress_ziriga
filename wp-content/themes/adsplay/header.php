<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="header-container col-12" id="header-container">
		<section class="header-content-top col-12">
			<div class="header-content container row position-relative">
				<div id="hamburger-box" class="d-flex d-lg-none">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/menu_hamburger.svg" alt="Icon Menu">
				</div>
				<a href="<?php echo get_site_url(); ?>" class="logo text-decoration-none col-4 d-flex justify-content-start align-items-center">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/adsplay/assets/images/logo_adsplay.svg" alt="ADSPLAY">
				</a>
				<div class="icons-header col-7 d-none d-lg-flex align-items-center justify-content-end">
				<?php
					$socialHeader = get_field('social-header');
					echo $socialHeader;
            	?>
				</div>
				<?php if ( function_exists( 'pll_the_languages' ) ) : ?>
					<div class="polylang-languages">
						<?php pll_the_languages( array( 'show_flags' => 1, 'show_names' => 1 ) ); ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
		<section class="header-menu-content container" id="header-menu-content">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'Header'
				));
				?>
		</section>
		<section class="breadcrumbs-content container" id="breadcrumbs-content">
			<?php if ( function_exists('bcn_display') ) : ?>
					<?php bcn_display(); ?>
			<?php endif; ?>
		</section>
	</header>

	<script>
		var BreadcrumbLink = document.querySelector("a.home");

		if (BreadcrumbLink) {
			var SpanElement = BreadcrumbLink.querySelector("span");
		}

		if (SpanElement) {
			SpanElement.textContent = "Home";
		} else {
			var BreadcrumbSpan = document.querySelector("span.home");
			BreadcrumbSpan.textContent = "Home";
		}
	</script>
	<script>
		const scrollBreadcrumb = document.getElementById('breadcrumbs-content');
		
		window.addEventListener('scroll', function() {
			if (window.scrollY > 0) {
			scrollBreadcrumb.classList.add('breadcrumb-visible');
			} else {
			scrollBreadcrumb.classList.remove('breadcrumb-visible');
			}
		});
	</script>
	<script>
		const menuDropIcon = document.getElementById('hamburger-box');
		const menuDrop = document.getElementById('header-menu-content');

		menuDropIcon.addEventListener('click', function() {
			menuDrop.classList.toggle('menu-aberto');
		});
	</script>
