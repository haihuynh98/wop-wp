<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WOP_VN
 */

get_header();
?>

<main class="main-bg position-re">


	<!-- ==================== Start Slider ==================== -->

	<header class="header-creative">
		<div class="container ontop">
			<div class="row justify-content-center full-height">
				<div class="col-lg-3 d-flex align-items-end">
				</div>
				<div class="col-lg-6 valign">
					<div class="caption text-center full-width md-mb50">
						<div class="mb-30">
							<svg class="svg-animation star" width="100" height="100" viewBox="0 0 100 100" fill="none"
								xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
								<line y1="50" x2="100" y2="50" vector-effect="non-scaling-stroke" stroke="currentColor"
									style="--index: 1; --transform: 30deg;"></line>
								<line y1="50" x2="100" y2="50" vector-effect="non-scaling-stroke" stroke="currentColor"
									style="--index: 2; --transform: 60deg;"></line>
								<line y1="50" x2="100" y2="50" vector-effect="non-scaling-stroke" stroke="currentColor"
									style="--index: 3; --transform: 90deg;"></line>
								<line y1="50" x2="100" y2="50" vector-effect="non-scaling-stroke" stroke="currentColor"
									style="--index: 4; --transform: 120deg;"></line>
								<line y1="50" x2="100" y2="50" vector-effect="non-scaling-stroke" stroke="currentColor"
									style="--index: 5; --transform: 150deg;"></line>
								<line y1="50" x2="100" y2="50" vector-effect="non-scaling-stroke" stroke="currentColor"
									style="--index: 6; --transform: 180deg;"></line>
							</svg>
						</div>
						<h4 class="fw-300 mb-15">World Of Pool</h4>
						<h1 class="fw-600 d-rotate wow">
							<span class="rotate-text">ENTERTAINMENT</span>
							<span class="rotate-text primary-text-color">FOR YOUTH</span>
						</h1>
					</div>
				</div>
				<div class="col-lg-3">

				</div>
			</div>
		</div>
		<div class="bg-pattern bg-img" data-overlay-light="3" style="background-position: top;"
			data-background="<?= ASSETS_URL . '/wop/z4360886136350_10e675e3e508174073faa84b3a1b96d5.jpg'?>"></div>
	</header>

	<!-- ==================== End Slider ==================== -->


	<!-- ==================== Start marq ==================== -->

	<section class="serv-marq main-colorbg2" style="overflow: hidden;" >
		<div class="container-fluid ontop sub-bg rest pt-20 pb-20">
			<div class="row">
				<div class="col-12">
					<div class="main-marq light-text">
						<div class="slide-har st1">
							<div class="box non-strok">
								<div class="item">
									<h4 class="d-flex align-items-center"><span>WOP Shop</span> <span
											class="fz-50 ml-50 stroke icon">*</span></h4>
								</div>
								<div class="item">
									<h4 class="d-flex align-items-center"><span>JOY Billiards</span> <span
											class="fz-50 ml-50 stroke icon">*</span></h4>
								</div>
								<div class="item">
									<h4 class="d-flex align-items-center"><span>Wop Billiard Clubs</span> <span
											class="fz-50 ml-50 stroke icon">*</span></h4>
								</div>
								<div class="item">
									<h4 class="d-flex align-items-center"><span>Wop Academy</span> <span
											class="fz-50 ml-50 stroke icon">*</span></h4>
								</div>
							</div>
							<div class="box non-strok">
								<div class="item">
									<h4 class="d-flex align-items-center"><span>WOP Shop</span> <span
											class="fz-50 ml-50 stroke icon">*</span></h4>
								</div>
								<div class="item">
									<h4 class="d-flex align-items-center"><span>JOY Billiards</span> <span
											class="fz-50 ml-50 stroke icon">*</span></h4>
								</div>
								<div class="item">
									<h4 class="d-flex align-items-center"><span>Wop Billiard Clubs</span> <span
											class="fz-50 ml-50 stroke icon">*</span></h4>
								</div>
								<div class="item">
									<h4 class="d-flex align-items-center"><span>Wop Academy</span> <span
											class="fz-50 ml-50 stroke icon">*</span></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==================== End marq ==================== -->


	<!-- ==================== Start intro ==================== -->

	<section class="about section-padding main-bg">
		<div class="container ontop">
			<div class="row">
				<div class="col-lg-5 valign">
					<div class="about-circle-crev md-hide">
						<div class="circle-button">
							<div class="rotate-circle fz-16 ls1 text-u">
								<svg class="textcircle" viewBox="0 0 500 500">
									<defs>
										<path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
										</path>
									</defs>
									<text>
										<textPath xlink:href="#textcircle" textLength="900"> Entertainment For Youth
											- World Of Pool -
										</textPath>
									</text>
								</svg>
							</div>
						</div>
						<div class="half-circle-img">
							<img src="<?= ASSETS_URL . '/wop/FB_IMG_1683092823690.jpg'?>" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-7 valign">
					<div class="cont sec-lg-head">
						<h6 class="dot-titl mb-20">About us</h6>
						<h2 class="d-slideup wow">
							<span class="sideup-text"><span class="up-text">E4Y Company - Entertainment For
									Youth</span></span>
						</h2>
						<div class="row">
							<div class="col-lg-12">
								<div class="text mt-20">
									<p>We was established in October 2022, to provide billiards entertainment
										services for young people with the first establishment being World Of Pool
										(WOP) Billia rds Clu b where located in 18 Nguyen Lam, 6 ward, District 10,
										HCMC.</p>
								</div>
								<div class="underline">
									<a href="page-about.html" class="mt-30 ls1 sub-title">Read More <i class="ml-5">
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
													fill="currentColor"></path>
											</svg>
										</i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row md-marg mt-100 justify-content-center">
			<div class="col-lg-4 col-md-6">
				<div class="item-serv md-mb50">
					<div class="d-flex align-items-center pb-20 mb-30 bord-thin-bottom">
						<div class="mr-30">
							<div class="icon-img-50">
								<img src="assets/imgs/serv-icons/01-dark.svg" alt="">
							</div>
						</div>
						<div>
							<h6>Quality Products</h6>
						</div>
					</div>
					<p class="fz-14">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
						consectetur, adipisci velit...</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="item-serv md-mb50">
					<div class="d-flex align-items-center pb-20 mb-30 bord-thin-bottom">
						<div class="mr-30">
							<div class="icon-img-50">
								<img src="assets/imgs/serv-icons/03-dark.svg" alt="">
							</div>
						</div>
						<div>
							<h6>Good Service</h6>
						</div>
					</div>
					<p class="fz-14">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
						consectetur, adipisci velit...</p>

				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="item-serv">
					<div class="d-flex align-items-center pb-20 mb-30 bord-thin-bottom">
						<div class="mr-30">
							<div class="icon-img-50">
								<img src="assets/imgs/serv-icons/02-dark.svg" alt="">
							</div>
						</div>
						<div>
							<h6>Good Price</h6>
						</div>
					</div>
					<p class="fz-14">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
						consectetur, adipisci velit...</p>
				</div>
			</div>
		</div> -->
		</div>
	</section>

	<!-- ==================== End intro ==================== -->


	<!-- ==================== Start section image ==================== -->

	<div class="back-image bg-img parallaxie hide-mobile" style="background-position: bottom;"
		data-background="<?= ASSETS_URL . '/wop/FB_IMG_1683092883173_crop.jpg'?>" data-overlay-dark="5">
	</div>

	<div class="back-image bg-img hide-pc" style="background-position: bottom; "
		data-background="<?= ASSETS_URL . '/wop/FB_IMG_1683092883173_crop.jpg'?>" data-overlay-dark="5">
	</div>

	<!-- ==================== End section image ==================== -->

	<!-- ==================== Start Portfolio ==================== -->

	<section class="portfolio" style="padding-top: 120px;">
		<div class="container ontop">
			<div class="sec-lg-head mb-80">
				<div class="row">
					<div class="col-lg-8">
						<div class="position-re">
							<h6 class="dot-titl mb-10">Our Value</h6>
							<h2 class="fz-70 fw-700">Value Of WOP</h2>
						</div>
					</div>
					<div class="col-lg-4 d-flex align-items-center">
						<div class="text">
							<p>The club is a combination of entertainment services and professional competitive
								training.</p>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- ==================== Start Services ==================== -->

		<section class="portfolio-fixed">
			<div class="container-fluid rest">
				<div class="row">
					<div class="col-lg-6 rest">
						<div class="left" id="sticky_item">
							<div id="tab-1" class="img bg-img" style="background-position: top;"
								data-background="<?= ASSETS_URL . '/wop/FB_IMG_1674292531544.jpg'?>">
							</div>
							<div id="tab-2" class="img bg-img" style="background-position: top;"
								data-background="<?= ASSETS_URL . '/wop/IMG_20230322_111731.jpg'?>">
							</div>
							<div id="tab-3" class="img bg-img" style="background-position: top;"
								data-background="<?= ASSETS_URL . '/wop/b4b7af_61989d02a39e4e2580f51c9e719b909d~mv2.webp'?>">
							</div>
						</div>
					</div>
					<div class="col-lg-6 sub-bg right">
						<div class="cont active" data-tab="tab-1">
							<div class="img-hiden">
								<img src="<?= ASSETS_URL . '/wop/FB_IMG_1674292531544.jpg'?>" alt="">
							</div>
							<span class="sub-title mb-15">WOP Academy</span>
							<h2 class="mb-30">PROFESSIONAL TRAINING AND COMPETITIONS</h2>
							<div class="row justify-content-center">
								<div class="col-md-11">
									<p>The club is a combination of entertainment services and professional
										competitive training, specializing in training professional athletes for
										domestic and international competitions. Our comprehensive training programs
										are designed to develop athletes' skills, enhance their physical fitness,
										and nurture their mental resilience.</p>
								</div>
							</div>
						</div>
						<div class="cont" data-tab="tab-2">
							<div class="img-hiden">
								<img src="<?= ASSETS_URL . '/wop/IMG_20230322_111731.jpg'?>" alt="">
							</div>
							<span class="sub-title mb-15">WOP Billiard Clubs</span>
							<h2 class="mb-30">BILLIARD SPORTS ENTERTAINMENT</h2>
							<div class="row justify-content-center">
								<div class="col-md-11">
									<p>Providing billiards entertainment for pool enthusiasts with World of
										Pool. Our club is dedicated to creating a vibrant and engaging
										environment for all lovers of the game. With our state-of-the-art
										pool facilities and expertly designed playing spaces, we offer an
										exceptional experience for players of all skill levels.</p>
								</div>
							</div>
						</div>
						<div class="cont" data-tab="tab-3">
							<div class="img-hiden">
								<img src="<?= ASSETS_URL . '/wop/b4b7af_61989d02a39e4e2580f51c9e719b909d~mv2.webp'?>" alt="">
							</div>
							<span class="sub-title mb-15">WOP Shop & JOY</span>
							<h2 class="mb-30">BILLIARD TABLE DISTRIBUTION</h2>
							<div class="row justify-content-center">
								<div class="col-md-11">
									<p>We take pride in partnering with you in the distribution of high-end pool
										tables and equipment from global brands. With a diverse and extensive
										portfolio, we are committed to providing the highest quality products to
										meet the needs of both professional billiard players and enthusiasts.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ==================== End Services ==================== -->
	</section>

	<!-- ==================== End Portfolio ==================== -->

	<!-- ==================== Start section ==================== -->

	<div class="call-action-center sub-bg" style="position: relative;">
		<div class="container pt-60">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="sec-lg-head text-center">
						<h6 class="dot-titl mb-10">More activities</h6>
						<h2 class="fz-70 fw-700">
							<span>Discover more standout activities of ours!</span> <br>
						</h2>
						<a href="https://www.facebook.com/profile.php?id=100085218084193"
							class="butn-circle colorbg-2 d-flex align-items-center text-center mt-50 m-auto">
							<div class="full-width">
								<span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
											fill="currentColor"></path>
									</svg></span>
								<span class="full-width">Get In Touch</span>
							</div>
							<img src="<?= ASSETS_URL . '/imgs/svg-assets/circle-star.svg'?>" alt="" class="circle-star">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-pattern bg-img" data-background="<?= ASSETS_URL . '/imgs/patterns/graph.png'?>"></div>
	</div>
	<!-- ==================== End section ==================== -->

</main>

<?php
get_footer();