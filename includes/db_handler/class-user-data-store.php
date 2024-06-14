<?php

class UserDataStore
{
    public static function storeUserDataFB($fb_pages_data)
    {
        global $wpdb;

        // Create table if not exists
        self::createUserDataTable();

        // Table name
        $table_name = $wpdb->prefix . 'socialhiiv_fb_pages';

        // Get current user ID
        $current_user_id = get_current_user_id();

        // Iterate over each page data in the array
        foreach ($fb_pages_data as $page_data) {
            $fb_page_access_token = $page_data['access_token'];
            $username             = $page_data['name'];
            $fb_page_id           = $page_data['id'];

            // Check if the fb ID already exists in the table for the current user
            $existing_page = $wpdb->get_var($wpdb->prepare(
                "SELECT COUNT(*) FROM $table_name WHERE fb_page_id = %s AND user_id = %d",
                $fb_page_id,
                $current_user_id
            ));

            // If the fb ID does not exist, insert the new page data
            if ($existing_page == 0) {
                $wpdb->insert($table_name, array(
                    'fb_page_access_token' => $fb_page_access_token,
                    'account_name' => $username,
                    'fb_page_id' => $fb_page_id,
                    'user_id' => $current_user_id // Add current user ID
                ));
            }
        }
    }

    // Method to retrieve fb user data from the database
    public static function getUserDataFB()
    {
        global $wpdb;

        // Create table if not exists
        self::createUserDataTable();

        // Table name
        $table_name = $wpdb->prefix . 'socialhiiv_fb_pages';

        // Get current user ID
        $current_user_id = get_current_user_id();

        // Retrieve data from the custom table for the current user
        $user_data = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE user_id = %d", $current_user_id), ARRAY_A);

        return $user_data;
    }

    // Method to get the count of Facebook users stored in the database
    public static function getFacebookAccountCount()
    {
        global $wpdb;

        // Create table if not exists
        self::createUserDataTable();

        // Table name
        $table_name = $wpdb->prefix . 'socialhiiv_fb_pages';

        // Get current user ID
        $current_user_id = get_current_user_id();

        // Retrieve the count of Facebook users for the current user
        $user_count = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE user_id = %d", $current_user_id));

        return $user_count;
    }

    // Method to create user data table if not exists
    private static function createUserDataTable()
    {
        global $wpdb;

        $table_name = $wpdb->prefix . 'socialhiiv_fb_pages';

        // Check if the table exists, if not create it
        if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
            $charset_collate = $wpdb->get_charset_collate();

            $sql = "CREATE TABLE $table_name (
                id mediumint(9) NOT NULL AUTO_INCREMENT,
                fb_page_access_token VARCHAR(255) NOT NULL,
                account_name VARCHAR(255) NOT NULL,
                fb_page_id VARCHAR(255) NOT NULL,
                user_id bigint(20) unsigned NOT NULL, // Add user ID column
                UNIQUE (fb_page_id),
                PRIMARY KEY  (id),
                FOREIGN KEY (user_id) REFERENCES {$wpdb->users} (ID)
            ) $charset_collate;";

            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }
    }

    // Method to store fb page data in the database
    public static function storePageData($fb_page_access_token, $pages)
    {
        global $wpdb;

        // Create table if not exists
        self::createPageDataTable();

        // Table name for storing page data
        $table_name = $wpdb->prefix . 'socialhiiv_fb_pages';

        foreach ($pages as $page) {
            // Check if the page already exists for the user
            $existing_page = $wpdb->get_var($wpdb->prepare(
                "SELECT COUNT(*) FROM $table_name WHERE fb_page_access_token = %d AND page_id = %s",
                $fb_page_access_token,
                $page['id']
            ));

            // If the page does not exist, insert it; otherwise, update the existing record
            if ($existing_page == 0) {
                $wpdb->insert($table_name, array(
                    'fb_page_access_token' => $fb_page_access_token,
                    'page_id' => $page['id'],
                    'page_name' => $page['name'],
                    'page_access_token' => $page['access_token']
                ));
            } else {
                $wpdb->update(
                    $table_name,
                    array(
                        'page_name' => $page['name'],
                        'page_access_token' => $page['access_token']
                    ),
                    array(
                        'fb_page_access_token' => $fb_page_access_token,
                        'page_id' => $page['id']
                    )
                );
            }
        }
    }

    // Method to fetch and store fb user pages
    public function fetchUserPages($fb_page_access_token, $long_lived_token)
    {
        $url = "https://graph.fb.com/v20.0/me/accounts?access_token={$long_lived_token}";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $response = curl_exec($ch);

        if ($response === false) {
            $error_msg = curl_error($ch);
            curl_close($ch);
            return false;
        }

        curl_close($ch);

        $data = json_decode($response, true);

        if (isset($data['data'])) {
            // Filter the data to include only 'name', 'access_token', and 'id' for each page
            $filtered_pages = array_map(function ($page) {
                return array(
                    'name' => $page['name'],
                    'access_token' => $page['access_token'],
                    'id' => $page['id']
                );
            }, $data['data']);

            // Store the filtered pages data
            self::storePageData($fb_page_access_token, $filtered_pages);

            return $filtered_pages;
        } else {
            return false;
        }
    }

    // Method to create page data table if not exists
    private static function createPageDataTable()
    {
        global $wpdb;

        $table_name = $wpdb->prefix . 'socialhiiv_fb_pages';

        // Check if the table exists, if not create it
        if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
            $charset_collate = $wpdb->get_charset_collate();

            $sql = "CREATE TABLE $table_name (
                id mediumint(9) NOT NULL AUTO_INCREMENT,
                fb_page_access_token VARCHAR(255) NOT NULL,
                page_id VARCHAR(255) NOT NULL,
                page_name VARCHAR(255) NOT NULL,
                page_access_token TEXT NOT NULL,
                PRIMARY KEY  (id),
                UNIQUE (fb_page_access_token, page_id)
            ) $charset_collate;";

            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }
    }
}
