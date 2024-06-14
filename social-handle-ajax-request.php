<?php


// Hook the functions to handle the AJAX requests
add_action('wp_ajax_add_facebook_page', 'add_facebook_page');
add_action('wp_ajax_delete_facebook_page', 'delete_facebook_page');
add_action('wp_ajax_nopriv_add_facebook_page', 'add_facebook_page');
add_action('wp_ajax_nopriv_delete_facebook_page', 'delete_facebook_page');

// Function to add Facebook page
function add_facebook_page() {
    global $wpdb;

    // Check for the required data
    if (!isset($_POST['pageid'], $_POST['access_token'], $_POST['account_name'])) {
        wp_send_json_error('Missing data.');
    }

    // Sanitize input
    $page_id = sanitize_text_field($_POST['pageid']);
    $access_token = sanitize_text_field($_POST['access_token']);
    $account_name = sanitize_text_field($_POST['account_name']);

    // Insert into database
    $table_name = $wpdb->prefix . 'socialhiiv_fb_pages';
    $data = array(
        'fb_page_id' => $page_id,
        'fb_page_access_token' => $access_token,
        'account_name' => $account_name,
    );
    $format = array('%s', '%s', '%s');

    $inserted = $wpdb->insert($table_name, $data, $format);

    if ($inserted) {
        wp_send_json_success('Page added successfully.');
    } else {
        wp_send_json_error('Failed to add page.');
    }
}

// Function to delete Facebook page
function delete_facebook_page() {
    global $wpdb;

    // Check for the required data
    if (!isset($_POST['pageid'])) {
        wp_send_json_error('Missing data.');
    }

    // Sanitize input
    $page_id = sanitize_text_field($_POST['pageid']);

    // Delete from database
    $table_name = $wpdb->prefix . 'socialhiiv_fb_pages';
    $deleted = $wpdb->delete($table_name, array('fb_page_id' => $page_id), array('%s'));

    if ($deleted) {
        wp_send_json_success('Page deleted successfully.');
    } else {
        wp_send_json_error('Failed to delete page.');
    }
}

