<?php

// Add styles
function plantyEnqueueStyles(): void {
    wp_enqueue_style('custom_google_fonts', 'https://fonts.googleapis.com/css?family=Syne:400,500,600,700,800&display=swap');
    wp_enqueue_style('planty_main_style', get_theme_file_uri('/assets/css/main.css'));
}

// Add menus
function registerMenus(): void {

    $locations = [
        'main' => 'Menu navbar',
        'footer' => 'Menu footer',
    ];

    register_nav_menus($locations);
}

function navMenuLinkClass ($atts, $item): array {
	$atts['class'] = 'header__link';
	return $atts;
}

function addAdminLinkToMenuIfLoggedIn ($items, $args ): string {
	if ( $args->theme_location == 'main' ) {
		if ( is_user_logged_in() ) {
			$items .= '<li><a href="'.admin_url().'">Admin</a></li>';
		}
	}
	return $items;
}

// Add theme support
function plantySetup(): void {
    // Add dynamic title tag support
    add_theme_support('title-tag');
    // Add dynamic logo support
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}

// Add actions
add_action('init', 'registerMenus');
add_action('after_setup_theme', 'plantySetup');
add_action('wp_enqueue_scripts', 'plantyEnqueueStyles');
add_action( 'wp_nav_menu_items', 'addAdminLinkToMenuIfLoggedIn', 10, 2 );

// Add filters
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter( 'nav_menu_link_attributes', 'navMenuLinkClass', 10, 2 );
