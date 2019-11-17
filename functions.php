<?php
// loading styles and scripts
function load_style_script(){
    wp_enqueue_style('fonts', '//fonts.googleapis.com/css?family=Source+Code+Pro:400,400i,500,600,700|Source+Sans+Pro:400,400i&display=swap', array(), null);
//    https://fonts.google.com/?query=sou&selection.family=Source+Code+Pro:400,400i,500,600,700|Source+Sans+Pro:400,400i
//    wp_enqueue_style('swiper.min', '//cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css', array(), null );
//    wp_enqueue_style('screen', get_template_directory_uri() . '/assets/css/app.min.css', array(), null );
    wp_enqueue_style('screen', get_template_directory_uri() . '/assets/css/screen.css', array(), null );
    wp_enqueue_style('style', get_stylesheet_uri(), array(), null );

    wp_enqueue_script('modernizr.min', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '2.8.3', false );
    if ( !wp_script_is( 'jquery' ) ) {
        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', false  );
    }
    wp_enqueue_script('html5shiv', '//html5shiv.googlecode.com/svn/trunk/html5.js', array(), null, false );
    wp_script_add_data('html5shiv','conditional','IE 9');

    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/custom/scripts.js', array('jquery'), null, true );
}
add_action('wp_enqueue_scripts', 'load_style_script');


// loading styles and scripts for admin panel
//function load_admin_style_script(){
//    wp_enqueue_style('custom-wp-admin-style', get_template_directory_uri() . '/css/custom-wp-admin-style.css', array() );
//    wp_enqueue_script('custom-wp-admin-script', get_template_directory_uri() . '/js/custom-wp-admin-script.js', array('jquery'), null, true );
//}
//add_action('admin_enqueue_scripts', 'load_admin_style_script');


// logo at the entrance to the admin panel
function my_custom_login_logo(){
    echo '<style type="text/css">
    h1 a {height:142px !important; width:190px !important; background-size:contain !important; background-image:url('.get_bloginfo("template_url").'/img/logo.png) !important;}
    </style>';
}
add_action('login_head', 'my_custom_login_logo');

add_filter( 'login_headerurl', function(){ return get_home_url(); } );
//add_filter( 'login_headertitle', function(){ return false; } );


// no information explaining the situation will appear when an incorrect login or password is entered
add_filter( 'login_errors', function($a){ return null; } );


// delete unnecessary items in wp_head
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );


// remove the wrapped <p> tag from images in the content
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');


// automatic generation of the tag <title>
add_theme_support( 'title-tag' );
// adding html5 markup
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

// support custom logo
add_theme_support( 'custom-logo', array(
    'flex-height' => true,
    'flex-width'  => true
) );
add_theme_support( 'custom-logo' );


// support thumbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}


// support menus
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(array(
        'main-menu'     => 'Main Menu',
        'footer-menu'   => 'Footer Menu',
        'footer-bottom-menu'   => 'Footer Bottom Menu',
    ));
}


// for excerpts
function new_excerpt_more( $more ) {
    return '&nbsp;&hellip;';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


function new_excerpt_length($length) {
  return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');


/* Hack on overwriting the guid parameter when publishing or updating a post in the admin panel (the permalink in the current structure is written)
--------------------------------------------------------------------------------------------------------------------------------- */
function guid_write( $id ){
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // если это автосохранение

    global $wpdb;

    if( $id = (int) $id )
        $wpdb->query("UPDATE $wpdb->posts SET guid='". get_permalink($id) ."' WHERE ID=$id LIMIT 1");
}
add_action ('save_post', 'guid_write', 100);

// for Options Page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page('Theme Options');
}


// get current URL
function current_url() {
    global $wp;
    if(!$wp->did_permalink){
        $output = home_url(add_query_arg($wp->query_string));
    } else {
        $output = home_url(add_query_arg(array(),$wp->request).'/');
    }

    return $output;
}


//for test
function usage() {
    if (get_current_user_id() == 1) {
        echo '<div class="statistic-wp"><style> .statistic-wp { position: fixed; z-index: 99999; max-width: 200px; bottom: 20px; left: 20px; background-color: #fff; color: #000; padding: 5px 10px; border: 1px solid red; } </style>';
        printf( ( '%d / %s' ), get_num_queries(), timer_stop( 0, 3 ) );
        if ( function_exists( 'memory_get_usage' ) ) {
            echo ' / ' . round( memory_get_usage() / 1024 / 1024, 2 ) . 'mb ';
        }
        echo '</div>';
    }
}
add_action('admin_footer_text', 'usage');
add_action('wp_footer', 'usage');


add_filter( 'wp_nav_menu_objects', 'wpse_wp_nav_menu_objects', 10, 2 );
function wpse_wp_nav_menu_objects( $sorted_menu_items, $args  ) {
	// Only modify the "main" menu.
	if ( ! isset( $args->theme_location ) || 'main-menu' !== $args->theme_location ) {
		return $sorted_menu_items;
	}

	// Loop over the menu items wrapping only top level items in span tags.
	foreach ( $sorted_menu_items as $item ) {
		if ( ! $item->menu_item_parent ) {
			$item->title = '<span><span>' . $item->title . '</span></span>';
		}
	}

	return $sorted_menu_items;
}
