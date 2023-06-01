<?php
/*
Template Name: Home page
Template Post Type: page
*/
$top_header = get_field('top_banner');
$banner_image = $top_header['banner_image'];
$marquee = $top_header['marquee'];

$about_us = get_field('about_us');

$our_value = get_field('our_value');

$more_activities = get_field('more_activities');

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
            data-background="<?= $banner_image ?>"></div>
    </header>

    <!-- ==================== End Slider ==================== -->


    <!-- ==================== Start marq ==================== -->

    <section class="serv-marq main-colorbg2" style="overflow: hidden;">
        <div class="container-fluid ontop sub-bg rest pt-20 pb-20">
            <div class="row">
                <div class="col-12">
                    <div class="main-marq light-text">
                        <div class="slide-har st1">
                            <?php for ($i = 1; $i < 3; $i++): ?>
                                <div class="box non-strok">
                                    <?php foreach ($marquee as $item): ?>
                                        <div class="item">
                                            <h4 class="d-flex align-items-center"><span>
                                                    <?= $item['title'] ?>
                                                </span>
                                                <span class="fz-50 ml-50 stroke icon">*</span>
                                            </h4>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endfor; ?>
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
                            <img src="<?= $about_us['photo'] ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 valign">
                    <div class="cont sec-lg-head">
                        <h6 class="dot-titl mb-20">About us</h6>
                        <h2 class="d-slideup wow">
                            <span class="sideup-text"><span class="up-text">
                                    <?= $about_us['title'] ?>
                                </span></span>
                        </h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text mt-20">
                                    <p>
                                        <?= $about_us['description'] ?>
                                    </p>
                                </div>
                                <div class="underline">
                                    <a href="<?= $about_us['redirect_link'] ?>" class="mt-30 ls1 sub-title">Read More <i
                                            class="ml-5">
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
        data-background="<?= $about_us['background_image'] ?>" data-overlay-dark="5">
    </div>

    <div class="back-image bg-img hide-pc" style="background-position: bottom; "
        data-background="<?= $about_us['background_image'] ?>" data-overlay-dark="5">
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
                            <h2 class="fz-70 fw-700">
                                <?= $our_value['title'] ?>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="text">
                            <p>
                                <?= $our_value['sub'] ?>
                            </p>
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
                            <?php foreach ($our_value['Values'] as $index => $valueItem): ?>
                                <div id="<?= 'tab-' . $index ?>" class="img bg-img" style="background-position: top;"
                                    data-background="<?= $valueItem['photo'] ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-lg-6 sub-bg right">
                        <?php foreach ($our_value['Values'] as $index => $valueItem): ?>
                            <div class="cont active" data-tab="<?= 'tab-' . $index ?>">
                                <div class="img-hiden">
                                    <img src="<?= $valueItem['photo'] ?>" alt="<?= $valueItem['title'] ?>">
                                </div>
                                <span class="sub-title mb-15">
                                    <?= $valueItem['top_title'] ?>
                                </span>
                                <h2 class="mb-30">
                                    <?= $valueItem['title'] ?>
                                </h2>
                                <div class="row justify-content-center">
                                    <div class="col-md-11">
                                        <p>
                                            <?= $valueItem['description'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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
                            <span><?= $more_activities['title']?></span> <br>
                        </h2>
                        <a href="<?= $more_activities['redirect_link']?>"
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
                            <img src="<?= ASSETS_URL . '/imgs/svg-assets/circle-star.svg' ?>" alt=""
                                class="circle-star">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-pattern bg-img" data-background="<?= ASSETS_URL . '/imgs/patterns/graph.png' ?>"></div>
    </div>
    <!-- ==================== End section ==================== -->

</main>

<?php
get_footer();