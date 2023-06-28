<?php
/*
Template Name: Joy Product page
Template Post Type: page
*/

$parent_page = get_field('parent_page');
$title = get_field('title');
$description = get_field('description');
$photo = get_field('photo');
$product_information = get_field('product_information');
$extra_note = get_field('extra_note');
$product_accessories = get_field('product_accessories');

get_header();
?>

<main>
    <!-- ==================== Start Slider ==================== -->

    <header class="land-header sub-bg valign bg-img mt-40 mb-40">
        <div class="container ontop">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="caption text-center">
                        <h1>The business products of JOY</h1>
                        <p class="sub-title mt-15">Your Destination for Exquisite Billiard Tables</p>

                        <div class="product-nav d-flex justify-content-between align-items-center mt-30">
                            <?php var_dump(get_child_of_page($parent_page));?>
                            <?php foreach(get_child_of_page($parent_page) as $child_page):?>
                                <a href="<?= $child_page['url']?>" class="navbar-link"><?= $child_page['title']?></a>
                                <?php endforeach;?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->
    <!-- ==================== Start Services ==================== -->

    <section class="services pb-0 bg-gray1 position-re o-hidden radius-30">
        <div class="container ontop">
            <div class="row">
                <div class="col-lg-4">
                    <h6><span class="fz-14">
                            <?= pll__('JOY Billiards'); ?>
                    </h6>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="text">
                        <h3>JOY Q8 Table Design</h3>
                    </div>
                    <div class="row mt-40">
                        <div class="col-md-9 offset-md-2">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar felis id ligula
                                feugiat, at congue justo gravida. Vestibulum ante ipsum primis in faucibus orci luctus
                                et ultrices posuere cubilia Curae; Proin non lacinia urna.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-30">
            <div class="row">
                <div class="col-lg-12 image-container">
                    <img src="http://localhost:8081/wp-content/uploads/2023/06/z4301647282335_6ba696d2783fff1b05c35bb2bc388b38.jpg"
                        alt="Responsive Image">
                </div>
            </div>
        </div>

        <div class="intro-feat section-padding ontop product-introduction">
            <div class="container section-padding pb-0 bord-thin-top bord-dark">
                <div class="row">
                    <div class="col-lg-10 col-12 offset-lg-1">
                        <h4 class="text-center">Product Information</h4>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Type: Chinese Pool</h6>
                                <p class="card-text"><strong>Inner frame dimensions:</strong> 2540 x 1260 mm</p>
                                <p class="card-text"><strong>Outer frame dimensions:</strong> 2820 x 1540 x 850mm</p>
                                <p class="card-text">Wood-wrapped steel frame, high-quality solid wood diamond-shaped
                                    legs with exquisite gold enamel finish, finely crafted slate. High elasticity rubber
                                    band, the table structure is precisely adjusted and balanced using an electronic
                                    leveling system.</p>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <p class="text-muted">Retail price (excluding VAT and shipping outside of the city):
                                195,000,000 VND</p>
                        </div>
                    </div>
                </div>
                <div class="row  mt-30">
                    <div class="col-lg-10 col-12 offset-lg-1">
                        <h4 class="text-center">Product Accessories</h4>
                        <ul class="accessories-list">
                            <li class="accessories-item">Cloth: Strachan No.10 Tournament Snooker Cloth 6811</li>
                            <li class="accessories-item">Aramith TV Table Ball Set</li>
                            <li class="accessories-item">Break Cue (1)</li>
                            <li class="accessories-item">Chinese Pool Cue (1)</li>
                            <li class="accessories-item">LP 3/4 Cue (2)</li>
                            <li class="accessories-item">8-Cue Rack (1)</li>
                            <li class="accessories-item">Bridge Stick (1)</li>
                            <li class="accessories-item">Billiard Ball Tray (1)</li>
                            <li class="accessories-item">Cue Chalk (1)</li>
                            <li class="accessories-item">Cue Cube (5)</li>
                            <li class="accessories-item">Tip Shaper (5)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="bg-pattern bg-img bg-repeat" data-background="assets/imgs/patterns/bg-pattern.png"></div>
    </section>
</main>

<?php
get_footer();