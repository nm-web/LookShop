<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LookShop
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <section class="accept">
            <p>We accept
                <img class="pay-card" src="<?php bloginfo( 'template_url' ); ?>/assets/images/general/paycard1.png" alt="pay-card">
            </p>
        </section>
        <section class="footer-menu">
            <div class="container footer-menu-wrapper">
                <div class="footer-menu__box">
                    <div class="menu-footer">
                        <div class="menu-footer__title">Customer Service</div>
                        <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'footer-menu1',
                            'container'       => 'nav',
                            'menu_class'      => 'menu-footer__body',
                        ) ); ?>
                    </div>
                    <div class="menu-footer">
                        <div class="menu-footer__title">Information</div>
                        <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'footer-menu2',
                            'container'       => 'nav',
                            'menu_class'      => 'menu-footer__body',
                        ) ); ?>
                    </div>
                    <div class="menu-footer">
                        <div class="menu-footer__title">Campaigns</div>
                        <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'footer-menu3',
                            'container'       => 'nav',
                            'menu_class'      => 'menu-footer__body',
                        ) ); ?>
                    </div>
                    <div class="menu-footer">
                        <div class="menu-footer__title">Stores</div>
                        <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'footer-menu4',
                            'container'       => 'nav',
                            'menu_class'      => 'menu-footer__body',
                        ) ); ?>
                    </div>
                </div>
                <div class="menu-footer">

                    <div class="menu-footer__title">Social</div>
                    <nav>
                        <ul class="menu-footer-social">
                            <li><a href="#">
                                    <svg class="svg-sprite-icon icon-twitter-footer">
                                        <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#twitter-footer"></use>
                                    </svg></a></li>
                            <li><a href="#">
                                    <svg class="svg-sprite-icon icon-pinteress-footer">
                                        <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#pinteress-footer"></use>
                                    </svg></a></li>
                            <li><a href="#">
                                    <svg class="svg-sprite-icon icon-facebook-footer">
                                        <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#facebook-footer"></use>
                                    </svg></a></li>
                            <li><a href="#">
                                    <svg class="svg-sprite-icon icon-google-plus">
                                        <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#google-plus"></use>
                                    </svg></a></li>
                            <li><a href="#">
                                    <svg class="svg-sprite-icon icon-t-footer">
                                        <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#t-footer"></use>
                                    </svg></a></li>
                            <li><a href="#">
                                    <svg class="svg-sprite-icon icon-v-footer">
                                        <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#v-footer"></use>
                                    </svg></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="stamp-footer">
                    <div class="stamp-footer__icon">
                        <svg class="svg-sprite-icon icon-stamp-footer">
                            <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#stamp-footer"></use>
                        </svg>
                    </div>
                    <div class="stamp-footer__text">100%
                        <p>secured</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="subfooter-wrapper">
            <div class="container subfooter">
                <?php
                wp_nav_menu( array(
                    'theme_location'  => 'subfooter',
                    'container'       => 'nav',
                    'menu_class'      => 'subfooter__menu',
                ) ); ?>
                <div class="mobile-menu-footer">
                        <div class="mobile-menu">
                          <div class="mobile-menu__line"></div>
                          <div class="mobile-menu__line"></div>
                          <div class="mobile-menu__line"></div>
                        </div>
                </div>
                <div class="subfooter__right">© LookShop.com
                    <p>All Rights Reserved</p>
                </div>
            </div>
        </section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
