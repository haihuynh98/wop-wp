<?php
/*
Template Name: Joy Product page
Template Post Type: page
*/
$current_page_id = get_the_ID();
$parent_page = get_field('parent_page');
$title = get_field('title');
$description = get_field('description');
$photo = get_field('photo');
$product_information = get_field('product_information');
$extra_note = get_field('extra_note');
$product_accessories = get_field('product_accessories');

get_header();
?>

<main class="sub-bg">
    <!-- ==================== Start Slider ==================== -->

    <header class="land-header sub-bg valign bg-img pt-40 pb-20">
        <div class="container ontop">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="caption text-center">
                        <h2>
                            <?= pll__('The business products of JOY') ?>
                        </h2>
                        <p class="sub-title mt-15">
                            <?= pll__('Your Destination for Exquisite Billiard Tables') ?>
                        </p>

                        <div class="product-nav d-flex justify-content-between align-items-center mt-30">
                            <?php foreach (get_child_of_page($parent_page) as $child_page):
                                $is_active = $current_page_id == $child_page['id'];
                                ?>
                                <a href="<?= $child_page['url'] ?>"
                                    class="navbar-link <?= $is_active ? 'active' : '' ?>"><?= $child_page['title'] ?></a>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->
    <!-- ==================== Start Services ==================== -->

    <section class="services pb-0 position-re o-hidden sub-bg">
        <div class="container ontop bord-thin-top bord-dark  pt-3">
            <div class="row">
                <div class="col-12 text-center">
                    <h6><span class="fz-14">
                            <?= pll__('JOY Billiards'); ?>
                        </span>
                    </h6>
                </div>
                <div class="col-12 text-center">
                    <div class="text">
                        <h3>
                            <?= $title ?>
                        </h3>
                    </div>
                    <div class="col-12 text-center">
                            <p>
                                <?= $description ?>
                            </p>
                        </div>
                </div>
            </div>
        </div>
        <div class="container mt-30">
            <div class="row">
                <div class="col-lg-12 image-container">
                    <img src="<?= $photo ?>" alt="<?= $title ?>">
                </div>
            </div>
        </div>

        <div class="intro-feat section-padding ontop product-introduction">
            <div class="container section-padding pb-0 bord-thin-top bord-dark">
                <div class="row">
                    <div class="col-lg-10 col-12 offset-lg-1">
                        <h4 class="text-center">
                            <?= pll__('Product Information'); ?>
                        </h4>
                        <div class="card">
                            <div class="card-body">
                                <?= $product_information ?>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <p class="text-muted">
                                <?= $extra_note ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row  mt-30">
                    <div class="col-lg-10 col-12 offset-lg-1">
                        <h4 class="text-center">
                            <?= pll__('Product Accessories'); ?>
                        </h4>
                        <ul class="accessories-list">
                            <?php foreach ($product_accessories as $item): ?>
                                <li class="accessories-item">
                                    <?= $item['content'] ?>
                                </li>
                            <?php endforeach; ?>
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