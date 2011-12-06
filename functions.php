<?php

// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );

// Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

register_nav_menus(array(
    'primary' => 'Primary Navigation'
));


function ekini_widgets_init() {
	// Area 1, located at the top of the sidebar.
    register_sidebar( array(
        'name' => 'Primary Widget Area',
        'id' => 'primary-widget-area',
        'description' => __( 'The primary widget area', 'wpbp' ),
        'before_widget' => '<ul id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</ul>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
/** Register sidebars by running wpbp_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'ekini_widgets_init' );

if ( ! function_exists( 'wpbp_posted_on' ) ) :
/**
* Prints HTML with meta information for the current post-date/time and author.
*
* @since Wordpress Blueprint
*/
function wpbp_posted_on() {
    printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'wpbp' ),
        'meta-prep meta-prep-author',
        sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
            get_permalink(),
            esc_attr( get_the_time() ),
            get_the_date()
        ),
        sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
            get_author_posts_url( get_the_author_meta( 'ID' ) ),
            sprintf( esc_attr__( 'View all posts by %s', 'wpbp' ), get_the_author() ),
            get_the_author()
        )
    );
}
endif;