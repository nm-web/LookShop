<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<section class="slider">
    <div class="header-slider">
        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/content/slider.jpg" alt="slider">
        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/content/slider.jpg" alt="slider">
        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/content/slider.jpg" alt="slider">
        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/content/slider.jpg" alt="slider">
    </div>
    <div class="slider-text">
        <div class="slider-text__subtitle text-around-line">Crazy</div>
        <div class="slider-text__title">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="380" height="180" viewBox="0 0 380 180">
                <pattern id="pattern" patternUnits="userSpaceOnUse" width="380" height="85" viewBox="0 0 380 85">
                    <image xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/content/fon_text.png"></image>
                </pattern>
                <text x="35" y="75" stroke="none" fill="url(#pattern)">Crazy</text>
                <text x="10" y="160" stroke="none" fill="url(#pattern)">Summer</text>
            </svg>
        </div>
        <div class="line slider-text__line_thick"></div>
        <div class="line slider-text__line_thin"></div>
        <div class="slider-text__collection">woman collection</div>
        <a href="<?php echo get_page_link( 10 ); ?>" class="slider-btn btn-shop btn-shop_after">
            <span>shop now
                <img class="btn-shop__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/content/arrow_btn.png" alt="arrow">
            </span>
        </a>
    </div>
    <div class="slider-line"></div>
</section>
