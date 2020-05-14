<?php
if ( ! defined( 'ABSPATH' ) ) {
exit; // Exit if accessed directly.
}
?>

<div class="cart-box">
    <div class="cart-box__item cart-filling">
        <span>your cart</span>
        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/content/arrow.png" alt="arrow">
    </div>
    <div class="cart-box__item cart-total">
        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/content/cart.png" alt="basket">
        <p>
            <?php lookshop_woocommerce_cart_link(); ?>
        </p>
    </div>
    <div class="widget-basket">
        <?php the_widget('WC_Widget_Cart','title=');?>
    </div>
</div>

</section> <!--header-down-->
<section class="mobile-menu-wrap vertical-center">
    <span>menu</span>
    <div class="mobile-menu">
      <div class="mobile-menu__line"></div>
      <div class="mobile-menu__line"></div>
      <div class="mobile-menu__line"></div>
    </div>
    <div class="mobile-menu-header"><?php
        wp_nav_menu( array(
            'theme_location'  => 'header-menu',
            'container'       => 'nav',
            'menu_class'      => 'menu-header',
            'container_class' => 'menu-header-wrapper',

        ) ); ?>
    </div>
</section>
