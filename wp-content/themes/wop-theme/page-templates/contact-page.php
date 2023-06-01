<?php
/*
Template Name: Contact page
Template Post Type: page
*/

$title = get_field('title');
$description = get_field('description');
$address = get_field('address');
$phone_number = get_field('phone_number');
$email = get_field('email');

get_header();
?>


<main>

    <!-- ==================== Start Slider ==================== -->

    <header class="page-header section-padding sub-bg">
        <div class="container mt-80">
            <div class="row">
                <div class="col-lg-7">
                    <div class="caption">
                        <h6 class="sub-title">Contact Us</h6>
                        <h1 class="fz-55">
                            <?= $title ?>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-5 valign">
                    <div class="text">
                        <p>
                            <?= $description ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

    <!-- ==================== Start Contact ==================== -->

    <section class="contact-crev section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sec-lg-head mb-80">
                        <h6 class="dot-titl-non mb-10">Get In Touch</h6>
                        <h2 class="fz-50">Let's get in <br> touch with us.</h2>
                        <p class="fz-15 mt-10">If you would like to work with us or just want to get in
                            touch, we’d love to hear from you!</p>
                        <div class="address fz-20 fw-600 mt-30">
                            <p>Address:
                            <address>
                                <?= $address ?>
                            </address>
                            </p>
                        </div>
                        <div class="phone fz-30 fw-600 mt-30 underline">
                            <a href="tel:<?= str_replace(' ', '', $phone_number) ?>"><?= $phone_number ?></a>
                        </div>
                        <div class="email fz-30 fw-600 mt-30 underline">
                            <a href="mailto:<?= $email ?>"><?= $email ?></a>
                        </div>
                        <ul class="rest social-text d-flex mt-60">
                            <li class="mr-30">
                                <a href="https://www.facebook.com/profile.php?id=100085218084193">Facebook</a>
                            </li>
                            <li class="mr-30">
                                <a href="#0">Youtube</a>
                            </li>
                            <li class="mr-30">
                                <a href="https://www.tiktok.com/@wopbilliards?_t=8cd0Z5Gakgk&_r=1">Tiktok</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 valign">
                    <div class="full-width">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d582.6569895255674!2d106.66297541234898!3d10.762711729199118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f0ea2b56043%3A0xe462540cd2cb2c59!2sCLB%20Bida%20L%E1%BB%97%20World%20Of%20Pool%20Qu%E1%BA%ADn%2010!5e0!3m2!1svi!2s!4v1684768294459!5m2!1svi!2s"
                            style="border:0;width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Contact ==================== -->

</main>

<?php
get_footer();