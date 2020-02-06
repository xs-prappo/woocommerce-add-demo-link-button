<?php

/**
 * Plugin Name: Demo URL button for Woocommerce
 */


/**
 * Check if WooCommerce is active
 **/

if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    include 'functions.php';
}