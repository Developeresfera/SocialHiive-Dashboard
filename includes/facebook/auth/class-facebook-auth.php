<?php
class FacebookOAuth {

    protected $client_id;
    protected $redirect_uri;
    protected $client_secret;
    
    public function __construct( $client_id, $redirect_uri, $client_secret ) {
        $this->client_id     = $client_id;
        $this->redirect_uri  = $redirect_uri;
        $this->client_secret = $client_secret;
    }
    
    public function getLongLivedToken($code) {
        $short_lived_token = $this->getShortLivedToken($code);
        if ($short_lived_token) {
            return $this->exchangeToken($short_lived_token);
        } else {
            return false;
        }
    }

    public function isTokenExpired($access_token) {
        $url = "https://graph.facebook.com/debug_token?input_token={$access_token}&access_token={$this->client_id}|{$this->client_secret}";
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($response, true);

        if (isset($data['data']['is_valid'])) {
            return $data['data']['is_valid'];
        } else {
            return false;
        }
    }

    // Getter method for client_id
    public function getClientId() {
        return $this->client_id;
    }

    // Getter method for redirect_uri
    public function getRedirectUri() {
        return $this->redirect_uri;
    }

    // Getter method for client_secret
    public function getClientSecret() {
        return $this->client_secret;
    }

    protected function getShortLivedToken( $code ) {
        $token_url = "https://graph.facebook.com/v20.0/oauth/access_token?"
            . "client_id=" . $this->client_id
            . "&redirect_uri=" . urlencode($this->redirect_uri)
            . "&client_secret=" . $this->client_secret
            . "&code=" . $code;

        $response = file_get_contents($token_url);
        $token_info = json_decode($response, true);

        return isset($token_info['access_token']) ? $token_info['access_token'] : false;
    }
    
    protected function exchangeToken($short_lived_token) {
        $url = "https://graph.facebook.com/v20.0/oauth/access_token?grant_type=fb_exchange_token&client_id={$this->client_id}&client_secret={$this->client_secret}&fb_exchange_token=$short_lived_token";
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($response, true);

        return isset($data['access_token']) ? $data['access_token'] : false;
    }

    public function fetchUserIdAndUsername( $long_lived_token ) {
        // Endpoint to fetch user details
        $url = "https://graph.facebook.com/v20.0/me?fields=id,name,email&access_token={$long_lived_token}";
        
        // Initialize cURL session
        $ch = curl_init($url);
        
        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); // Verify SSL certificate
        curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Set timeout to 10 seconds
        
        // Execute the cURL request
        $response = curl_exec($ch);
        
        // Check if cURL request was successful
        if ($response === false) {
            // Handle cURL error
            $error_msg = curl_error($ch);
            curl_close($ch);
            return false;
        }
        
        // Close cURL session
        curl_close($ch);
        
        // Parse the JSON response
        $data = json_decode($response, true);
        
        // Check if the response contains user ID and name
        if (isset($data['id']) && isset($data['name'])) {
            $user_id  = $data['id'];
            $username = $data['name'];
            $email    = $data['email'];

            
            // Return an array containing user ID and username
            return array('user_id' => $user_id, 'username' => $username,'email' => $email);
        } else {
            // Return false if user ID or username is not found
            return false;
        }
    }

    public function fetchUserPages($long_lived_token) {
        $url = "https://graph.facebook.com/v20.0/me/accounts?access_token={$long_lived_token}";
        
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
            $filtered_pages = array_map(function($page) {
                return array(
                    'name' => $page['name'],
                    'access_token' => $page['access_token'],
                    'id' => $page['id']
                );
            }, $data['data']);
            
            return $filtered_pages;
        } else {
            return false;
        }
    }
    
    public function get_fb_profile_pic_url( $page_id, $access_token, $type = 'large' ) {
        // Graph API endpoint
        $url = "https://graph.facebook.com/v12.0/{$page_id}/picture?type={$type}&redirect=false&access_token={$access_token}";
    
        // Initialize cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
        // Execute the request
        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
        // Close cURL
        curl_close($ch);
    
        // Check if the request was successful
        if ($http_code == 200) {
            $data = json_decode($response, true);
            if (isset($data['data']['url'])) {
                return $data['data']['url'];
            }
        }
    
        // Return false if something went wrong
        return false;
    }

    
}  





