<?php function replace_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'replace_jquery'); ?>

<?php add_theme_support('post-thumbnails'); ?>

<?php show_admin_bar( false ); ?>

<?php function my_assets() {
	wp_enqueue_script( 'instafeed', get_template_directory_uri() . '/js/js-vendors/instafeed.min.js', false, null, false);
	wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), NULL, false);
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js' , false, null, false, array(), '3', true);
	wp_enqueue_script( 'slick-slider', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', false, null, false);
}

add_action( 'wp_enqueue_scripts', 'my_assets' ); ?>

<?php add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
} ?>

<?php remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 ); ?>

