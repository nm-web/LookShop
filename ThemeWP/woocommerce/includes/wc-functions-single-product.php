<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

//remove_action('woocommerce_before_main_content','lookshop_start_wraper',35);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta',40);
add_action('woocommerce_before_single_product_summary','lookshop_before_show_product',9);
function lookshop_before_show_product(){
    ?>
    <section class="product-view-wrapper">

    <?php
}
add_action('woocommerce_before_single_product_summary','lookshop_before_show_product_photo',15);
function lookshop_before_show_product_photo(){
    ?>
        <div class="product-photo">
    <?php
}
add_action('woocommerce_before_single_product_summary','lookshop_end_show_product_photo',21);
function lookshop_end_show_product_photo(){
    ?>
        </div>
        <div class="product-description">
    <?php
}

add_action('woocommerce_single_product_summary','lookshop_start_show_price_rating',9);
function lookshop_start_show_price_rating(){
    ?>
        <div class="product-description__block-price">
    <?php
}
add_action('woocommerce_single_product_summary','lookshop_end_show_price_rating',11);
function lookshop_end_show_price_rating(){
    ?>
      </div>
    <?php
}


add_action('woocommerce_after_single_product_summary','lookshop_end_show_product',5);
function lookshop_end_show_product(){
    ?>
        </div>
        </section>
        <section class="wrapper_line-top-dottom social-product"><a href="#">
                <svg class="svg-sprite-icon icon-facebook">
                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#facebook"></use>
                </svg><span>share on facebook</span></a><a href="#">
                <svg class="svg-sprite-icon icon-pinteress">
                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#pinteress"></use>
                </svg><span>pin this product</span></a><a href="#">
                <svg class="svg-sprite-icon icon-twitter">
                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#twitter"></use>
                </svg><span>tweet this product</span></a><a href="#">
                <svg class="svg-sprite-icon icon-Email">
                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#Email"></use>
                </svg><span>email a friend</span></a>
        </section>
    <?php
}
?>
