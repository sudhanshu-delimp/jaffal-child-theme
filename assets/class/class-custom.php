<?php
include_once WP_PLUGIN_DIR.'/yith-woocommerce-ajax-navigation/includes/class-yith-wcan-frontend.php';
class Custom extends YITH_WCAN_Frontend {
    public function get_class_localization(){
        return $this->get_shortcodes_localize();
    }
}
?>