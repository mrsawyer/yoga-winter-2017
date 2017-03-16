<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//Training Hero Function

//Animating Function on Train Facilities Page


/**
 * Custom hero image styles method
 *
 * 
 */
function pagetemplate_styles() {

    $pages = ['page-templates/support.php', 'page-templates/volunteer.php', 'page-templates/partner.php', 'page-templates/about-us.php', 'page-templates/training.php', 'page-templates/core-training.php', 'page-templates/resources-research.php', 'front-page.php'];

    if(!is_page_template($template = $pages) && !is_front_page()){
        return;
    }
	$image = CFS()->get( 'hero_image' );

    if(!$image){
        return;
    }

    $hero_css = ".custom-hero-image {
        background:
            linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
            url({$image}) no-repeat center bottom;
        background-size: cover, cover;
        }"; 
    wp_add_inline_style( 'red-starter-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'pagetemplate_styles' );
