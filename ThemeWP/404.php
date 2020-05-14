<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    	<link rel="profile" href="https://gmpg.org/xfn/11">-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="primary" class="content-middle">
		<main id="main" class="site-main">
            <div class="logo">
                <p>Not found, return to the store</p>
                <?php the_custom_logo(); ?>
            </div>
            <div class="block-error">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="500" height="180" viewBox="0 0 500 180">
                    <pattern id="pattern" patternUnits="userSpaceOnUse" width="500" height="150" viewBox="0 0 500 150">
                        <image xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/content/fon_text.png"></image>
                    </pattern>
                    <text x="65" y="150" stroke="none" fill="url(#pattern)">404</text>

                </svg>

            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_footer();
