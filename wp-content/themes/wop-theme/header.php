<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WOP_VN
 */

$menu_items = get_wop_top_menu();

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>


	<!-- ==================== Start Loading ==================== -->

	<div class="loader-wrap">
		<svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
			<path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
		</svg>

		<div class="loader-wrap-heading">
			<div class="load-text">
				<span>L</span>
				<span>o</span>
				<span>a</span>
				<span>d</span>
				<span>i</span>
				<span>n</span>
				<span>g</span>
			</div>
		</div>
	</div>

	<!-- ==================== End Loading ==================== -->


	<div class="cursor"></div>


	<!-- ==================== Start progress-scroll-button ==================== -->

	<div class="progress-wrap cursor-pointer">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>

	<!-- ==================== End progress-scroll-button ==================== -->


	<!-- ==================== Start Navbar ==================== -->

	<nav class="navbar navbar-expand-lg static main-bg" style="width:100vw">
		<div class="container">

			<!-- Logo -->
			<a class="logo icon-img-100 hide-pc" href="#">
				<img src="assets/wop/logo-wop.png" alt="logo">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar"><i class="fas fa-bars"></i></span>
			</button>


			<!-- navbar links -->
			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<?php foreach ($menu_items as $index => $menu_item):
						?>
						<li class="nav-item">
							<a class="nav-link" href="<?= $menu_item->url ?>"><span class="rolling-text">
									<?= $menu_item->post_title ?>
								</span>
							</a>
						</li>

						<?php if ($index === 2): ?>
							<li class="nav-item hide-mobile">
								<a class="logo icon-img-120" href="/">
									<img src="<?= ASSETS_URL . '/wop/logo-wop.png' ?>" alt="logo">
								</a>
							</li>
						<?php endif; ?>

					<?php endforeach; ?>


				</ul>
			</div>
		</div>
	</nav>


	<!-- ==================== End Navbar ==================== -->