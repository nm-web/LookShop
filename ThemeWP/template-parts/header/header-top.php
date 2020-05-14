<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<section class="header-top-wrapper">
    <div class="header-top container">
        <div class="header-top__phone vertical-center">
            <p>custom care:</p>
            <p><?php the_field("telephone",189); ?></p>
        </div>
        <div class="header-top__services">
            <div class="vertical-bar"></div>
            <div class="select-box">
                <select class="select-currency select-style">
                    <option value="dollar">$us</option>
                    <option value="euro">€eur</option>
                    <option value="rub">₽rub</option>
                </select>
            </div>
            <div class="vertical-bar"></div>
            <div class="user vertical-center">
                <div class="user__img">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/content/user.png" alt="user">
                </div>
                <span class="user__name">my account</span>
            </div>
            <div class="vertical-bar"></div>
            <div class="search-box vertical-center">
                <?php get_search_form(); ?>
            </div>
            <div class="vertical-bar"></div>
        </div>
    </div>
</section>

