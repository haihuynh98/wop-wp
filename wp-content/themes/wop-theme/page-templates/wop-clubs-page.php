<?php
/*
Template Name: Wop Clubs page
Template Post Type: page
*/

$banner = get_field('banner');
$about = get_field('about');
$end_section = get_field('end_section');


get_header();
?>

<main class="main-bg">


    <!-- ==================== Start Slider ==================== -->

    <header class="proj-header2 bg-img valign" data-background="<?= $banner['banner'] ?>" data-overlay-dark="5">
        <div class="container mt-80">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="caption text-center">
                        <h1>
                            <?= $banner['heading'] ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start section ==================== -->

    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="cont">
                        <h3 class="mb-15">
                            <?= $about['title'] ?>
                        </h3>
                        <p>
                            <?= $about['description'] ?>
                        </p>

                        <div class="info d-flex mt-50">
                            <?php foreach ($about['block'] as $item): ?>
                                <div class="item mr-50">
                                    <h6 class="fz-16">
                                        <?= $item['title'] ?>
                                    </h6>
                                    <span class="sub-title ls1">
                                        <?= $item['subtitle'] ?>
                                    </span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="back-image bg-img mt-100" style="background-position: center"
            data-background="<?= $about['background_image'] ?>"></div>
    </section>

    <!-- ==================== End About ==================== -->



    <!-- ==================== Start section ==================== -->

    <div class="pt-30 pb-30">
        <div class="container-fluid rest">
            <div class="swiper4" data-carousel="swiper" data-items="4" data-loop="true" data-space="80"
                data-center="true" data-speed="1000">
                <div id="content-carousel-container-unq-img" class="swiper-container" data-swiper="container">
                    <div class="swiper-wrapper">
                        <?php foreach ($about['image_collection'] as $item): ?>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= $item['photo'] ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-100">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h5 class="fw-300"><?= $about['center_content']?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== End section ==================== -->

    <!-- ==================== Start section ==================== -->

    <section class="pb-80">
        <div class="container">
            <div class="row mt-50">
                <div class="col-lg-4">
                    <div class="img md-mb50">
                        <img src="<?= $end_section['photo']?>" alt="">
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1 valign">
                    <div class="text">
                        <h5 class="fw-200"><?= $end_section['description']?></h5>
                        <ul class="rest list-arrow mt-50">
                        <?php foreach ($end_section['featured_content'] as $item): ?>
                            <li>
                                <h6 class="inline fz-18"> <span class="icon">
                                        <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                fill="#1d1d1d"></path>
                                        </svg>
                                    </span><?= $item['title']?></h6>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End section ==================== -->


</main>


<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
            <a href="tel:0707977779" class="pps-btn-img">
                <img src="assets/imgs/icon-call-nh.png" alt="Calling to we" width="50">
            </a>
        </div>
    </div>
    <div class="hotline-bar">
        <a href="tel:0707977779">
            <span class="text-hotline d-block">0707 977 779</span>
        </a>
    </div>
</div>
<?php
get_footer();