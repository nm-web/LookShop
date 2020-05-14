<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);
remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);

add_filter( 'woocommerce_breadcrumb_defaults', 'my_breadcrumbs_delimiter');
function my_breadcrumbs_delimiter($args) {
    $args['delimiter'] = ' > ';
    $args['home'] = 'home';
    return $args;
}

add_action('woocommerce_before_main_content','lookshop_breadcrumb',20);
function lookshop_breadcrumb(){
    ?>
    <div class="content container">
        <section class="wrapper_line-top-dottom">
            <?php woocommerce_breadcrumb();?>
        </section>
    <?php
}

add_action('woocommerce_before_main_content','lookshop_add_sidebar_only_archive',40);
function lookshop_add_sidebar_only_archive() {
 if (! is_product()) {
     woocommerce_get_sidebar();
 }
}

add_filter('woocommerce_product_tabs','lookshop_product_tabs',10);
function lookshop_product_tabs($tabs) {
    if ( ! empty( $tabs ) ) : ?>
        <div class="woocommerce-tabs wc-tabs-wrapper tabs-description">
            <ul class="tabs wc-tabs" role="tablist">
                <?php foreach ( $tabs as $key => $product_tab ) : ?>
                    <li class="<?php echo esc_attr( $key ); ?>_tab tabs-description__item" id="tab-title-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
                        <div class="tabs-title">
                            <div class="tabs-arrow">
                                <svg class="svg-sprite-icon icon-tabs-arrow">
                                    <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#tabs-arrow"></use>
                                </svg>
                            </div>
                            <span>
                                <a href="#tab-<?php echo esc_attr( $key ); ?>">
                                    <?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
                                </a>
                            </span>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php foreach ( $tabs as $key => $product_tab ) : ?>
                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> panel entry-content wc-tab tabs-description__content" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
                    <?php
                    if ( isset( $product_tab['callback'] ) ) {
                        call_user_func( $product_tab['callback'], $key, $product_tab );
                    }
                    ?>
                </div>
            <?php endforeach; ?>

            <?php do_action( 'woocommerce_product_after_tabs' ); ?>
        </div>

    <?php endif;
}
add_filter('woocommerce_review_gravatar_size','lookshop_resize_gravatar');
function lookshop_resize_gravatar(){
    return '80';
}

remove_action('woocommerce_review_before_comment_meta','woocommerce_review_display_rating',10);
add_action('woocommerce_review_meta','woocommerce_review_display_rating',10);


?>
