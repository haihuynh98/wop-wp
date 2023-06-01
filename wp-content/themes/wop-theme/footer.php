<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WOP_VN
 */
$template_file = get_post_meta(get_the_ID(), '_wp_page_template', true);
?>

<?php if ('page-templates/contact-page.php' != $template_file): ?>
	<!-- ==================== Start Footer ==================== -->
	<footer>
		<div class="footer-container">
			<div class="container pb-80 pt-80 ontop">
				<div class="row">
					<div class="col-lg-6">
						<div class="colum md-mb50">
							<div class="text">
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d582.6569895255674!2d106.66297541234898!3d10.762711729199118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f0ea2b56043%3A0xe462540cd2cb2c59!2sCLB%20Bida%20L%E1%BB%97%20World%20Of%20Pool%20Qu%E1%BA%ADn%2010!5e0!3m2!1svi!2s!4v1684768294459!5m2!1svi!2s"
									style="width: 100%;" height="450" style="border:0;" allowfullscreen="" loading="lazy"
									referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div>
					</div>
					<div class="col-lg-6 d-flex align-items-center">
						<div class="colum md-mb50">
							<div class="tit mb-20">
								<h6>Address</h6>
							</div>
							<div class="text">
								<p class="mb-10">18 Nguyen Lam Street, Ward 6, District 10, Ho Chi Minh City, Vietnam
								</p>
							</div>
							<div class="text">
								<p class="mb-10">
									<a href="mailto:info@wop.vn">info@wop.vn</a>
								</p>
								<h5>
									<a href="tel:0707977779">0707 977 779</a>
								</h5>
							</div>
							<ul class="rest social-text d-flex">
								<li class="mr-30">
									<a href="https://www.facebook.com/profile.php?id=100085218084193"
										class="hover-this"><span class="hover-anim fz-30"><i
												class="fab fa-facebook"></i></span></a>
								</li>
								<li class="mr-30">
									<a href="#0" class="hover-this"><span class="hover-anim fz-30"><i
												class="fab fa-youtube"></i></span></a>
								</li>
								<li class="mr-30">
									<a href="https://www.tiktok.com/@wopbilliards?_t=8cd0Z5Gakgk&_r=1"
										class="hover-this"><span class="hover-anim fz-30"><i
												class="fab fa-tiktok"></i></span></a>
								</li>
							</ul>
							<?php
							if (function_exists('pll_the_languages')) {
								$languages = pll_the_languages(array('raw' => 1)); // Lấy danh sách các ngôn ngữ
						
								if ($languages) {
									echo '<ul class="language-switcher"><li><b>'.__('Language').':</b></li>';
									foreach ($languages as $language) {
										echo '<li>';
										echo '<a href="' . esc_url($language['url']) . '">';
										echo esc_html($language['name']);
										echo '</a>';
										echo '</li>';
									}
									echo '</ul>';
								}
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="sub-footer pt-30 pb-30 bord-thin-top ontop">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="logo icon-img-120">
								<a href="/">
									<img src="<?= ASSETS_URL . '/wop/logo-wop.png' ?>" alt="logo">
								</a>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="copyright d-flex">
								<div class="ml-auto">
									<p class="fz-13">© 2023 WOP.VN, Powered by Tigergentlemen</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- ==================== End Footer ==================== -->
<?php endif ?>
<?php wp_footer(); ?>

</body>

</html>