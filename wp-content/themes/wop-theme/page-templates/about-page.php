<?php
/*
Template Name: About page
Template Post Type: page
*/

$about_us = get_field('about_us');
$our_story = get_field('our_story');
$our_mission = get_field('our_mission');
$partners = get_field('partners');
$about_products = get_field('about_products');


get_header();
?>
<main>

    <!-- ==================== Start Slider ==================== -->

    <header class="page-header section-padding pb-0">
        <div class="container mt-80">
            <div class="row">
                <div class="col-lg-8">
                    <div class="caption">
                        <h6 class="sub-title">Who We Are ?</h6>
                        <h1 class="fz-55">
                            <?= $about_us['heading'] ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 offset-lg-4">
                    <div class="text mt-30">
                        <p>
                            <?= $about_us['small_text'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="main-marq xlrg section-padding pb-0">
            <div class="slide-har st1">
                <div class="box">
                    <div class="item">
                        <h4>About Us</h4>
                    </div>
                    <div class="item">
                        <h4>About Us</h4>
                    </div>
                    <div class="item">
                        <h4>About Us</h4>
                    </div>
                    <div class="item">
                        <h4>About Us</h4>
                    </div>
                    <div class="item">
                        <h4>About Us</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="item">
                        <h4>About Us</h4>
                    </div>
                    <div class="item">
                        <h4>About Us</h4>
                    </div>
                    <div class="item">
                        <h4>About Us</h4>
                    </div>
                    <div class="item">
                        <h4>About Us</h4>
                    </div>
                    <div class="item">
                        <h4>About Us</h4>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start About ==================== -->

    <section class="pg-about section-padding sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="bg-img radius-10 md-mb50" data-background="<?= $our_story['first_photo'] ?>">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bg-img radius-10" data-background="<?= $our_story['second_photo'] ?>"></div>
                </div>
                <div class="col-lg-4">
                    <div class="sec-head mt-80">
                        <h6 class="sub-title">Our Story.</h6>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cont mt-80">
                        <h4>
                            <?= $our_story['description'] ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End About ==================== -->


    <!-- ==================== Start about ==================== -->

    <section class="intro-corp pb-30 pt-30">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-5 valign md-mb50">
                    <div class="imgs mb-80">
                        <div class="img1">
                            <img src="<?= $our_mission['first_photo'] ?>" alt="" class="radius-10">
                        </div>
                        <div class="img2">
                            <img src="<?= $our_mission['second_photo'] ?>" alt="" class="radius-10">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 valign">
                    <div class="cont">
                        <div class="text">
                            <h2 class="d-slideup wow">
                                <span class="sideup-text">
                                    <span class="up-text">OUR MISSION</span>
                                </span>
                            </h2>
                        </div>
                        <div class="accordion bord mt-40">
                            
                            <?php foreach ($our_mission['missions'] as $index => $item_mission): ?>

                                <div class="item mb-15 wow fadeInUp <?= $index === 0 ? 'active' : '' ?>"
                                    data-wow-delay="<?= sprintf('.%ss', $index) ?>">
                                    <div class="title">
                                        <h6 class="fz-18">
                                            <?= $item_mission['title'] ?>
                                        </h6>
                                        <span class="ico"></span>
                                    </div>
                                    <div class="accordion-info" style="<?= $index === 0 ? 'display: block;' : 'display: none;' ?>">
                                        <p class="fz-14">
                                            <?= $item_mission['description'] ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->

    <!-- ==================== Start team ==================== -->

    <!-- <section class="team-crev pt-30 pb-3">
    <div class="container-fluid rest">
        <div class="row">
            <div class="col-12">
                <div class="sec-head-lg text-center text-u mb-80" id="sticky_item">
                    <h2>Team</h2>
                </div>
                <div class="container">
                    <div class="row md-marg">
                        <div class="col-lg-4">
                            <div class="item md-mb50">
                                <div class="img">
                                    <img src="assets/wop/people-1.jpg" alt="">
                                </div>
                                <div class="info d-flex align-items-center">
                                    <div>
                                        <div class="circle-50">
                                            <img src="assets/imgs/team/1.jpg" alt="" class="circle-img">
                                        </div>
                                    </div>
                                    <div class="cont ml-20">
                                        <span class="fz-12 opacity-8">Co-Founder</span>
                                        <h6 class="fz-16">Nguyen Van A</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item md-mb50">
                                <div class="img">
                                    <img src="assets/wop/people-2.jpg" alt="">
                                </div>
                                <div class="info d-flex align-items-center">
                                    <div>
                                        <div class="circle-50">
                                            <img src="assets/imgs/team/2.jpg" alt="" class="circle-img">
                                        </div>
                                    </div>
                                    <div class="cont ml-20">
                                        <span class="fz-12 opacity-8">CEO</span>
                                        <h6 class="fz-16">Nguyen Van B</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/wop/people-3.jpg" alt="">
                                </div>
                                <div class="info d-flex align-items-center">
                                    <div>
                                        <div class="circle-50">
                                            <img src="assets/imgs/team/3.jpg" alt="" class="circle-img">
                                        </div>
                                    </div>
                                    <div class="cont ml-20">
                                        <span class="fz-12 opacity-8">Co-Founder</span>
                                        <h6 class="fz-16">Nguyen Van C</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section> -->

    <!-- ==================== End team ==================== -->



    <!-- ==================== Start clients ==================== -->

    <div class="clients section-padding pb-100 position-re">
        <div class="container">
            <div class="row justify-content-center mb-80">
                <div class="col-lg-6 text-center">
                    <div class="text">
                        <h3>We Strategic Partners</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row md-marg">
                        <?php foreach ($partners as $index => $item_partner): ?>
                            <?php if ($index < 3): ?>
                                <div class="col-md-4 col-6 brand box-bg pb-30">
                                    <div class="item wow fadeIn h-100" data-wow-delay=".6s">
                                        <div class="img">
                                            <img src="<?= $item_partner['photo'] ?>" alt="">
                                        </div>
                                        <a href="<?= $item_partner['redirect_link'] ?>" class="link" data-splitting><?= $item_partner['name'] ?></a>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="col-md-3 col-6 brand box-bg pb-30">
                                    <div class="item wow fadeIn h-100" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="<?= $item_partner['photo'] ?>" alt="">
                                        </div>
                                        <a href="<?= $item_partner['redirect_link'] ?>" class="link" data-splitting><?= $item_partner['name'] ?></a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== End clients ==================== -->

</main>

<!-- ==================== Start call to action ==================== -->

<section class="call-action-img">
    <div class="container">
        <div class="sec-lg-head section-padding">
            <div class="row ontop">
                <div class="col-11 d-flex align-items-center">
                    <div class="valign">
                        <h2 class="fz-50 d-rotate wow">
                            <span class="rotate-text"><?= $about_products['title']?></span>
                            <span class="rotate-text">Let’s <span class="sub-font">Learn about
                                    products</span>.</span>
                        </h2>
                    </div>
                    <div class="ml-auto">
                        <a href="<?= $about_products['redirect_link']?>" class="butn-circle d-flex align-items-center text-center m-auto">
                            <div class="full-width">
                                <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                            fill="currentColor"></path>
                                    </svg></span>
                                <span class="full-width">Learn about products</span>
                            </div>
                            <img src="assets/imgs/svg-assets/circle-star.svg" alt="" class="circle-star">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();