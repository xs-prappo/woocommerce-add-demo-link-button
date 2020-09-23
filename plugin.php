<?php

/**
 * Plugin Name:       Demo URL button for Woocommerce
 * Plugin URI:        https://github.com/prappo/woocommerce-add-demo-link-button/
 * Description:       Add custom demo link button after add to cart button in woocommerce.
 * Version:           1.0.0
 * Author:            Prappo Prince
 * Author URI:        https://prappo.dev
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wadlb
 */


/**
 * Check if WooCommerce is active
 **/

if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    include 'functions.php';
}
