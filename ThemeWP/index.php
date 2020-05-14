<?php
/**
Template Name: home
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="subscribe-wrapper">
            <div class="container subscribe">
                <form class="subscribe-form" method="get"><span>Stay updated</span>
                    <input id="subscribe-form__email" type="email" placeholder="Your email address">
                    <button class="btn-shop btn-shop_after subscribe-form__btn" type="submit">
                        <img class="btn-shop__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/general/plus.png" alt="plus">
                    </button>
                </form>
                <div class="social-box">
                    <span>Find us here</span>
                    <ul class="socials">
                        <li class="socials__item">
                            <a class="socials__link" href="<?php the_field( "facebook", 189); ?>">
                                <svg class="svg-sprite-icon icon-facebook">
                                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#facebook"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="socials__item">
                            <a class="socials__link" href="<?php the_field( "twitter", 189 ); ?>">
                                <svg class="svg-sprite-icon icon-twitter">
                                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#twitter"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="socials__item">
                            <a class="socials__link" href="<?php the_field( "pinteress", 189 ); ?>">
                                <svg class="svg-sprite-icon icon-pinteress">
                                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#pinteress"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="collection-link container">
            <div class="collection-wrapper">
                <div class="collection__img">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/content/box1.png" alt="men">
                    <a class="collection__link" href="#">
                        <div class="collection__text text-photo_big">
                            <p>best</p>
                            <p>outfits</p>
                            <p class="collection__text_line text-around-line">&</p>
                            <p>looks</p>
                        </div>
                    </a>
                </div>
                <div class="collection-box_right collection-wrapper">
                    <div class="collection__img">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/content/box2.png" alt="summer">
                        <a class="collection__link" href="#">
                            <div class="collection__text box__circle">
                                <div class="box__circle_inner">
                                    <p>Summer</p>
                                    <p>party</p>
                                    <p>collection</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="collection-wrapper">
                        <div class="collection__img">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/content/box3.png" alt="women">
                            <a class="collection__link" href="#">
                                <div class="collection__text text_bottom">
                                    <p>best sellers
                                        <svg class="svg-sprite-icon icon-arrow_right">
                                            <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#arrow_right"></use>
                                        </svg>
                                    </p>
                                </div></a></div>
                        <div class="collection__img">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/content/box4.png" alt="men">
                            <div class="collection__text collection__text_right">
                                <p>fall</p>leather
                                <a href="<?php echo get_page_link( 10 ); ?>" class="btn-shop btn-collection">
                                    <span>shop now
                                        <img class="btn-shop__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/content/arrow_btn.png" alt="arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tabs-wrapper">
            <div class="container">
                <ul class="tabs-nav">
                    <li class="tabs-nav__item tabs-nav__item_active" data-tab-name="tab-1">what’s hot?</li>
                    <li class="tabs-nav__item" data-tab-name="tab-2">desiners</li>
                    <li class="tabs-nav__item" data-tab-name="tab-3">featured</li>
                    <li class="tabs-nav__item" data-tab-name="tab-4">latest</li>
                </ul>
            </div>
            <div class="tabs-content">
                <div class="tabs-content__item tab-1 tabs-content__item_active">
                    <div class="tab-slider-tab-1 tab-slider_min-screen">
                        <div class="slider-content">
                            <?php echo do_shortcode("[wcps id='186']"); ?>
                            <div class="show-product-mini">
                                <?php echo do_shortcode("[products category='all' columns=2 limit=2 paginate=true top_rated]"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-content__item tab-2">
                    <div class="tab-slider-tab-2 tab-slider_min-screen">
                        <div class="slider-content">
                            <?php echo do_shortcode("[wcps id='183']"); ?>
                            <div class="show-product-mini">
                                <?php echo do_shortcode("[products category='designers' columns=2 limit=2 paginate=true orderby=rand]"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-content__item tab-3">
                    <div class="tab-slider-tab-3 tab-slider_min-screen">
                        <div class="slider-content">
                            <?php echo do_shortcode("[wcps id='178']"); ?>
                            <div class="show-product-mini">
                                <?php echo do_shortcode("[featured_products columns=2 limit=2 paginate=true]"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-content__item tab-4">
                    <div class="tab-slider-tab-4 tab-slider_min-screen">
                        <div class="slider-content">
                            <?php echo do_shortcode("[wcps id='187']"); ?>
                            <div class="show-product-mini">
                                <?php echo do_shortcode("[recent_products columns=2 limit=2 paginate=true]"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="stamp-wraper">
                <div class="stamp text-around-line stamp_line">
                    <div class="stamp__icon">
                        <svg class="svg-sprite-icon icon-shape">
                            <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#shape"></use>
                        </svg>
                        <svg class="svg-sprite-icon icon-shape_inner">
                            <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#shape_inner"></use>
                        </svg>
                    </div>
                    <div class="stamp__text">clearance
                        <p>50<span>%<span>off</span></span></p>
                    </div>
                </div>
            </div>
            <div class="products-wraper">
                <div class="products-wrapper_screen">
                    <?php echo do_shortcode("[recent_products columns=4 limit=4 orderby=rand]"); ?>
                </div>
                <div class="show-product-mini">
                    <?php echo do_shortcode("[recent_products columns=2 limit=2 paginate=true orderby=rand]"); ?>
                </div>
            </div>
        </section>
        <section class="brands-wrapper">
        <div class="brands-title text-around-line">favourite brands</div>
        <div class="container">
            <div class="brands">
                <svg class="svg-sprite-icon icon-brand1">
                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#brand1"></use>
                </svg>
                <svg class="svg-sprite-icon icon-brand2">
                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#brand2"></use>
                </svg>
                <svg class="svg-sprite-icon icon-brand3">
                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#brand3"></use>
                </svg>
                <svg class="svg-sprite-icon icon-brand4">
                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#brand4"></use>
                </svg>
                <svg class="svg-sprite-icon icon-brand5">
                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#brand5"></use>
                </svg>
                <svg class="svg-sprite-icon icon-brand6">
                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#brand6"></use>
                </svg>
                <svg class="svg-sprite-icon icon-brand7">
                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#brand7"></use>
                </svg>
                <svg class="svg-sprite-icon icon-brand8">
                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#brand8"></use>
                </svg>
            </div>
        </div>
    </section>
        <section class="container">
            <?php
            $page = new WP_Query( 'page_id=171' );
            if ( $page->have_posts() ) {
                    $page->the_post();
                    ?>
                    <div class="about">
                        <div class="about__title"><?php the_title(); ?></div>
                        <div class="about__text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php
            }; ?>
        </section>
<?php

get_footer();
