<?php

// custom field for woocommerce

function srigal_create_demo_button()
{
    $args = array(
        'id' => 'srigal_demo_button',
        'label' => __('Demo Link', 'cfwc'),
        'class' => 'cfwc-custom-field',
        'desc_tip' => true,
        'description' => __('Enter the demo link', 'ctwc'),
    );
    woocommerce_wp_text_input($args);
}

add_action('woocommerce_product_options_general_product_data', 'srigal_create_demo_button');

// saving custom filed

function srigal_save_demo_link($post_id)
{
    $product = wc_get_product($post_id);
    $title = isset($_POST['srigal_demo_button']) ? $_POST['srigal_demo_button'] : '';
    $product->update_meta_data('srigal_demo_button', sanitize_text_field($title));
    $product->save();
}

add_action('woocommerce_process_product_meta', 'srigal_save_demo_link');


/**
 * Display custom field on the front end
 * @since 1.0.0
 */
function srigal_display_demo_button()
{
    global $post;
    // Check for the custom field value
    $product = wc_get_product($post->ID);
    $btn = $product->get_meta('srigal_demo_button');
    if ($btn) {
        // Only display our field if we've got a value for the field title
        echo "<a class='button' target='_blank' href='" . $btn . "'>Demo</a>";
    }
}

add_action('woocommerce_after_add_to_cart_button', 'srigal_display_demo_button');
