<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

    <section class="header-down container vertical-center">
        <div class="logo">
            <?php the_custom_logo(); ?>
        </div>

        <?php
        wp_nav_menu( array(
            'theme_location'  => 'header-menu',
            'container'       => 'nav',
            'menu_class'      => 'menu-header',
            'container_class' => 'menu-header-wrapper',

        ) ); ?>


