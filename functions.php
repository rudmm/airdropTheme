<?php
require get_template_directory() . '/widgets/newposts_widget.php';
add_action( 'wp_enqueue_scripts', 'add_theme_styles_script' );
add_action('after_setup_theme', 'customLogo');
add_action( 'widgets_init', 'register_my_widgets' );
add_filter( 'excerpt_length', function(){
	return 50;
} );
add_filter('excerpt_more', function($more) {
	return '...';
});
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'top' )
    );
    register_sidebar( array(
		'name'          => 'right' )
    );
}

function customLogo(){
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails', array( 'post') ); 
    add_image_size('post_image', 732, 330, true);
    add_image_size('new_post_image', 140, 75, true);  
}

function add_theme_styles_script(){
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Audiowide');
    wp_enqueue_style('awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('font', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');
    wp_enqueue_style('airdrop', get_template_directory_uri() . '/css/airdrop.css');
}

function my_excerpt($String = '', $width = 15){
    $text = mb_strimwidth ( $String , 0 , $width  );
    if($text < $String){
        $text = $text . '...';
    }
    return $text;
}

// ================================================================================================================================
function dd($var) {
    print "<pre>";
    print_r($var);
    die;
}



