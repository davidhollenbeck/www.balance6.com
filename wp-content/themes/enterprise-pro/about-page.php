<?php
/**
 * This file adds the Services Page
 *
 * @author StudioPress
 * @package Enterprise Pro
 * @subpackage Customizations
 */

/*
Template Name: About
*/

function enterprise_add_body_class( $classes ) {
    $classes[] = 'enterprise-pro-about';
    return $classes;

}

function hero() {
    $hero = get_field('hero');
    b6_hero($hero);
}

add_action('genesis_before_content_sidebar_wrap', 'hero', 10);

function about_content() {
    // vars
    $wys1 = get_field('page_content_1');
    $wys2 = get_field( 'page_content_2');
    $wys3 = get_field('page_content_3');
    $wys4 = get_field( 'page_content_4');
    $footer = get_field( 'footer');


    b6_wys($wys1);
    b6_wys($wys2);
    balance_boxes();
    b6_wys($wys3);
    tagline_bullets('no-image');
    b6_wys($wys4);
    b6_footer($footer);
}

add_action('genesis_before_content_sidebar_wrap', 'about_content', 11);



remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

genesis();

