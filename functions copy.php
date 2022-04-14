<?php 
/* Child theme generated with WPS Child Theme Generator */
//include_once WP_PLUGIN_DIR.'/yith-woocommerce-ajax-navigation/includes/class-yith-wcan-frontend.php';
if ( ! function_exists( 'b7ectg_theme_enqueue_styles' ) ) {            
    add_action( 'wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles' );
    
    function b7ectg_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
        wp_dequeue_script('yith-wcan-shortcodes');
        wp_deregister_script('yith-wcan-shortcodes');
        wp_enqueue_script('developer_custom_script',get_stylesheet_directory_uri().'/assets/js/custom.js', array('jquery'), rand(), true );
        //wp_enqueue_script('developer_custom_yith_wcan_shortcodes_script',get_stylesheet_directory_uri().'/assets/js/custom_yith_wcan_shortcodes.js', array('jquery'), rand(), true );
        //$sbs_obj = new YITH_WCAN_Frontend();
    //     $sbs_A = [];
    //     $sbs_A['query_param'] = 'yith_wcan';
    //     $sbs_A['supported_taxonomies'] = ['product_cat','product_tag'];
    //     $sbs_A['change_browser_url'] = 1;
    //     $sbs_A['instant_filters'] = 1;
    //     $sbs_A['ajax_filters'] = 1;
    //     $sbs_A['show_clear_filter'] = '';
    //     $sbs_A['scroll_top'] = '';
    //     $sbs_A['scroll_target'] = '';
    //     $sbs_A['modal_on_mobile'] = '';
    //     $sbs_A['session_param'] = '';
    //     $sbs_A['show_current_children'] = '';
    //     $sbs_A['loader'] = '';
    //     $sbs_A['toggles_open_on_modal'] = '';
    //     $sbs_A['mobile_media_query'] = 991;
    //     $sbs_A['base_url'] = get_site_url().'/shop';
    //     $sbs_A['terms_per_page'] = 10;
    //     $sbs_A['currency_format'] = ['symbol'=>'$','decimal'=>'.','thousand'=>',','precision'=>2,'format'=>'%s%v'];
    //     $sbs_A['labels'] = ['empty_option'=>'All','search_placeholder'=>'Search...','no_items'=>'no item found','show_more'=>'Show %d more','close'=>'Close','save'=>'save','show_results'=>'Show results','clear_selection'=>'Clear','clear_all_selections'=>'Clear All'];
    //    wp_localize_script( 'developer_custom_yith_wcan_shortcodes_script', 'yith_wcan_shortcodes', $sbs_A);
    }
}


/*disable link on grid product*/
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
 
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

