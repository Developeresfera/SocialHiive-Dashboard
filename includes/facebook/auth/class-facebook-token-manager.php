<?php
class FacebookTokenManager {
    private $access_token_option_name = 'facebook_access_token';

    public function store_access_token($access_token) {
        update_option($this->access_token_option_name, $access_token);
    }

    public function get_access_token() {
        return get_option($this->access_token_option_name);
    }
}
?>
