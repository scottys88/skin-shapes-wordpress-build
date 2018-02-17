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
	wp_enqueue_script( 'slick-slider-2', 'http://localhost:8080/skin-shapes-wordpress/wordpress/wp-content/themes/Skin-Shapes/js/js-vendors/slick.js', null, null, false );
	
	wp_enqueue_script( 'instafeed', get_template_directory_uri() . '/js/js-vendors/instafeed.min.js',  array( 'jquery' ), null, false);

	wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/scripts.js', null, NULL, false);

}
add_action( 'wp_enqueue_scripts', 'my_assets' ); ?>


<?php add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
} ?>


<?php remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 ); ?>

<?php add_action( 'after_setup_theme', 'yourtheme_setup' );
 
function yourtheme_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

?>