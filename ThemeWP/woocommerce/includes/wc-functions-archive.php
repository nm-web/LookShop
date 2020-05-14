<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action('woocommerce_before_main_content','lookshop_start_slider',21);


function lookshop_start_slider(){
if ( is_shop() || is_product_category()) {?>
    <div class="slider-products" data-url="<?php echo get_template_directory_uri(); ?>">
        <?php
        $loop = new WP_Query( array(
            'post_type' => 'product',  // указываем, что выводить нужно именно товары
            'posts_per_page' => 5, // количество товаров для отображения
            'orderby' => 'date', // тип сортировки (в данном случае по дате)
             // указываем слаг нужной категории
        ));
        while ( $loop->have_posts() ): $loop->the_post(); ?>
            <div class="slider-products__item">
                <div class="slider-products__photo">
                    <a href="<?php the_permalink(); ?>">
                        <?php global $product;
                            $attachment_ids = $product->get_gallery_attachment_ids();
                            $result = count($attachment_ids);
                        if ($result == 0) {
                            the_post_thumbnail('slider-mini');}
                        else {
                            echo wp_get_attachment_image( $attachment_ids[0] ,'slider-mini');}
                         ?>
                    </a>
                    <?php if ($result >= 0) {?>
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            echo wp_get_attachment_image( $attachment_ids[1],'slider-mini' );
                            ?>
                        </a>
                     <?php }?>
                </div>
                <div class="slider-products__text">
                    <div class="description-products">
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="description-products__title"><?php the_title(); ?></h2>
                        </a>
                        <p class="description-products__price"> <?php woocommerce_template_loop_price(); ?></p>
                        <p class="description-products__text">
                            <?php the_excerpt(); ?>
                        </p>
                        <p class="description-products__btn "><?php woocommerce_template_loop_add_to_cart(); ?></p>

                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <?php }
}

add_action('woocommerce_before_main_content','lookshop_start_wraper',35);
function lookshop_start_wraper(){
    if (! is_product()) {?>
       <section class="products-content-wrapper">

    <?php }
}

add_action('woocommerce_before_main_content','lookshop_start_archive_wraper',40);
function lookshop_start_archive_wraper(){
 if (! is_product()) {?>
     <section class="products-content">
 <?php }
}

add_action('woocommerce_after_main_content','lookshop_end_archive_wraper',20);
function lookshop_end_archive_wraper(){
 if (! is_product()) {?>
   </section> <!--products-content  -->
    <?php }
}


add_action('woocommerce_after_main_content','lookshop_end_wraper',32);
function lookshop_end_wraper(){
    if (! is_product()) {?>
    </section> <!--products-content-wrapper -->
   <?php }
}

add_filter('woocommerce_show_page_title','lookshop_remove_title_page');
function lookshop_remove_title_page($hide){
    if (is_shop()) {
        $hide = false;
    }
    return $hide;
}

add_action('woocommerce_before_shop_loop','lookshop_start_wrapper_archive_description',9);
function lookshop_start_wrapper_archive_description() {
     if (is_shop() || is_product_category()) { ?>
    <div class="block-options">
        <p class="pagination-top"><?php woocommerce_pagination(); ?></p>
    <?php
    }
}

add_action('woocommerce_before_shop_loop','lookshop_end_wrapper_archive_description',35);
function lookshop_end_wrapper_archive_description() {
    if (is_shop() || is_product_category()) { ?>
         </div>
     <?php }
}

remove_action('woocommerce_before_shop_loop','woocommerce_output_all_notices',10);
remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20);
remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering',30);
add_action('woocommerce_before_shop_loop','lookshop_add_sort',20);
add_action('woocommerce_before_shop_loop','lookshop_add_navigation',30);
function lookshop_add_sort() {
     if (is_shop() || is_product_category()) { ?>
    <div class="sort"><span>Sort by</span>
            <?php
                woocommerce_catalog_ordering();
             ?>
     </div>
<?php }
}
function lookshop_add_navigation() {
     if (is_shop() || is_product_category()) { ?>
    <div class="navigation">
         <?php
         woocommerce_result_count();

         ?>
    </div>
 <?php }
}


add_action('woocommerce_before_shop_loop_item','lookshop_add_wraper_start',5);
function lookshop_add_wraper_start() {
    ?>

    <div class="product-card ">
        <?php
}
add_action('woocommerce_after_shop_loop_item','lookshop_end_wraper_start',12);
function lookshop_end_wraper_start() {
?>
    </div><!--product-card product-card_hover-->
        <?php if (!is_shop() && !is_product_category()) { ?>
        <a class="shop-link" href="<?php echo get_page_link( 10 ); ?>">
            <span>Shop It</span>
            <svg class="svg-sprite-icon icon-bag">
                <use xlink:href="<?php get_template_directory(); ?>/assets/images/svg/symbol/sprite.svg#bag"></use>
            </svg>
        </a>
    <?php }
}

add_action('woocommerce_shop_loop_item_title','lookshop_start_description_wrap',9);
function lookshop_start_description_wrap(){
    ?>
        <div id="description" class="product-card__description ">
    <?php
}
add_action('woocommerce_after_shop_loop_item','lookshop_end_description_wrap',11);
function lookshop_end_description_wrap(){
    ?>
        </div> <!--product-card__description description-->
    <?php
}

remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating',5);

add_filter('woocommerce_loop_add_to_cart_args','lookshop_change_add_to_cart');
function lookshop_change_add_to_cart($args){
    $args['class'] = $args['class'] . ' btn-shop btn-shop_after btn-card';
    return $args;
}

add_filter('woocommerce_sale_flash', 'lookshop_custom_sale_flash', 10, 3);
function lookshop_custom_sale_flash($text, $post, $_product) {
    return '
        <span class="onsale"> sale </span>
    ';
}


add_filter( 'woocommerce_product_single_add_to_cart_text', 'lookshop_custom_cart_button_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'lookshop_custom_cart_button_text' );
function lookshop_custom_cart_button_text() {
    return __( 'add to cart +', 'woocommerce' );
}


?>

