<?php
/*
Template Name: Joy Billiards page
Template Post Type: page
*/

$banner = get_field('banner');
$about = get_field('about');
$famously_know = get_field('famously_know');
$top_partner = get_field('top_partner');

get_header();
?>

<main>

    <!-- ==================== Start Slider ==================== -->

    <header class="header-startup full-height valign bord-thin-bottom">
        <div class="container" style="position: absolute; left: 0; right: 0; top: 10%; z-index: 10; bottom: 0;">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="caption text-center mt-50">
                        <div class="sec-lg-head">
                            <h6 class="dot-titl-non mb-15 light-text"
                                style="border: 1px solid rgba(255, 255, 255, 0.5);">Joy Billiard</h6>
                        </div>
                        <h1 class="fw-700 fz-50 light-text">
                            <?= $banner['heading'] ?><span class="sub-font">
                                <?= $banner['sub_heading'] ?>
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow-down main-bg" style="z-index:10;">
            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="svg-for-tablet">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0.835489 6.51022L15.5607 6.51022L10.9081 1.85764C10.5179 1.46747 10.9555 1.24491 11.3626 0.837776C11.7697 0.430646 11.9923 -0.00687319 12.3825 0.383293L18.7406 6.74141C19.1307 7.13158 19.117 7.77791 18.7099 8.18504L12.0753 14.8196C11.6682 15.2267 11.371 14.7053 11.0739 14.4081C10.7767 14.111 10.2553 13.8138 10.6624 13.4067L15.5173 8.55182L0.792051 8.55182L0.835489 6.51022Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <div class="bg-pattern bg-img" style="box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.45);"
            data-background="<?= $banner['banner'] ?>"></div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start intro ==================== -->

    <section class="intro-imgs section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="img1 md-mb50">
                        <img src="<?= $about['first_photo'] ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-4 valign">
                    <div class="md-mb50">
                        <h6 class="mb-15">
                            <?= $about['title'] ?>
                        </h6>
                        <p>
                            <?= $about['description'] ?>
                        </p>

                        <div class="stauts d-flex align-items-center mt-80">
                            <div>
                                <h5>JOY Partner</h5>
                                <h3>
                                    <?= $about['joy_partner'] ?> <span class="fz-14">Countries</span>
                                </h3>
                            </div>
                            <div class="ml-auto">
                                <h5>Participants </h5>
                                <h3>
                                    <?= $about['participants'] ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="img1">
                        <img src="<?= $about['second_photo'] ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End intro ==================== -->



    <!-- ==================== Start marq ==================== -->

    <section class="serv-marq skew ontop" style="overflow: hidden;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="main-marq lrg opacity-4">
                        <div class="slide-har st1 strok">
                            <div class="box">
                                <div class="item">
                                    <h4>WOP BILLIARDS</h4>
                                </div>
                                <div class="item">
                                    <h4>JOY BILLIARDS</h4>
                                </div>
                                <div class="item">
                                    <h4>CHINESE POOL</h4>
                                </div>
                            </div>
                            <div class="box">
                                <div class="item">
                                    <h4>WOP BILLIARDS</h4>
                                </div>
                                <div class="item">
                                    <h4>JOY BILLIARDS</h4>
                                </div>
                                <div class="item">
                                    <h4>CHINESE POOL</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End marq ==================== -->



    <!-- ==================== Start Services ==================== -->

    <section class="services section-padding pb-0 bg-gray1 position-re o-hidden radius-30">
        <div class="container ontop">
            <div class="row">
                <div class="col-lg-4">
                    <h6><span class="fz-14">FAMOUSLY KNOW</h6>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="text">
                        <h3>
                            <?= $famously_know['title'] ?><span class="sub-font">
                                <?= $famously_know['subtitle'] ?>
                            </span>
                        </h3>
                    </div>
                    <div class="row mt-40">
                        <div class="col-md-9 offset-md-2">
                            <p>
                                <?= $famously_know['description'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-feat section-padding ontop">
            <div class="container section-padding pb-0 bord-thin-top bord-dark">
                <div class="row justify-content-around">
                    <div class="col-lg-6">
                        <div class="cont md-mb50">
                            <h6 class="mb-15"><span class="fz-14">Top Partner</h6>
                            <h3 class="mb-30">
                                <?= $top_partner['title'] ?>
                            </h3>
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="text">
                                        <p>
                                            <?= $top_partner['description'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 valign">
                        <div class="bg-img full-width d-flex align-items-center justify-content-center"
                            data-background="<?= $top_partner['video_thumbnail'] ?>">
                            <div>
                                <div class="play-button">
                                    <a href="javascript:void(0)" class="btn" id="video-trigger">
                                        <div class="butn-ply">
                                            <svg width="80px" height="80px" viewBox="0 0 80 80"
                                                preserveAspectRatio="none">
                                                <circle class="circle" cx="40" cy="40" r="38" stroke="#c9f31d"
                                                    stroke-width="2" fill="none"></circle>
                                            </svg>
                                            <i class="fas fa-play"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="process-crev mt-100">
                    <div class="row">
                        <?php foreach ($top_partner['photo_collection'] as $item): ?>
                            <div class=" col-lg-4 col-md-6">
                                <div class="img1 md-mb50">
                                    <img src="<?= $item['photo'] ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-pattern bg-img bg-repeat" data-background="assets/imgs/patterns/bg-pattern.png"></div>
    </section>


    <div id="vidBox">
        <div id="videCont">
            <video id="demo" loop controls>
                <source src="<?= $top_partner['video_url'] ?>" type="video/mp4">
            </video>
        </div>
    </div>

    <!-- ==================== End Services ==================== -->


</main>

<?php
get_footer();