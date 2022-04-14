<?php 
/* Child theme generated with WPS Child Theme Generator */
echo get_stylesheet_directory().'/yith-woocommerce-ajax-navigation/includes/class-yith-wcan-frontend.php';
include_once get_stylesheet_directory().'/yith-woocommerce-ajax-navigation/includes/class-yith-wcan-frontend.php';
if ( ! function_exists( 'b7ectg_theme_enqueue_styles' ) ) {            
    add_action( 'wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles' );
    
    function b7ectg_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
        wp_dequeue_script('yith-wcan-shortcodes');
        wp_deregister_script('yith-wcan-shortcodes');
        wp_enqueue_script('developer_custom_script',get_stylesheet_directory_uri().'/assets/js/custom.js', array('jquery'), rand(), true );
        wp_enqueue_script('developer_custom_yith_wcan_shortcodes_script',get_stylesheet_directory_uri().'/assets/js/custom_yith_wcan_shortcodes.js', array('jquery'), rand(), true );
        $sbs_obj = new YITH_WCAN_Frontend_2();
       wp_localize_script( 'developer_custom_yith_wcan_shortcodes_script', 'yith_wcan_shortcodes', $sbs_obj->get_shortcodes_localize());
        
    }
}


/*disable link on grid product*/
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
 
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

