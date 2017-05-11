<?php 

/*
All css and js files are included here.
*/

function first_scripts() {
	wp_enqueue_style( 'first-style', get_stylesheet_uri() );
	wp_enqueue_style( 'main_style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
    
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '1.1.0',false );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.1.0',true );
    wp_enqueue_script( 'modernizr-custom', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '1.1.0',true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '1.1.0', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/scripts.js', array(), '1.1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'first_scripts' );
?>