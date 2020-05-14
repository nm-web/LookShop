<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

add_action('header-parts','lookshop_header_top',10);

function lookshop_header_top() {
    get_template_part('template-parts/header/header-top');
}

add_action('header-parts','lookshop_header_down',20);

function lookshop_header_down (){
    get_template_part('template-parts/header/header-down');
}
add_action('header-parts','lookshop_header_cart',30);

function lookshop_header_cart() {
    get_template_part('template-parts/header/cart');
}

add_action('header-slider','lookshop_header_slider',40);

function lookshop_header_slider() {
    get_template_part('template-parts/header/header-slider');
}
?>
