<?php

class Router
{

    public function __construct()
    {
        add_action('template_redirect', array($this, 'load_template'));
    }

    public function load_template()
    {
        $requested_url = trim($_SERVER['REQUEST_URI'], '/');

        // Check if the user is logged in
        if (!is_user_logged_in()) {
            // Define the pages that require login
            $protected_pages = [
                'user/dashboard',
                'user/fbapi',
                'user/profile',
                'user/inboxs',
                'user/post-publishing',
                'user/analytic',
                'user/calenders',
                'user/accountpayment',
                'user/payment-after-monthly-trial'
            ];

            // Redirect to the home page if the requested URL is a protected page
            foreach ($protected_pages as $page) {
                if (strpos($requested_url, $page) !== false) {
                    wp_redirect(home_url('/user-login'));
                    exit;
                }
            }
        }

        if (strpos($requested_url, 'user/dashboard') !== false) {
            $this->load_dashboard_template();
        } elseif (strpos($requested_url, 'user/fbapi') !== false) {
            $this->fbapi();
        } elseif (strpos($requested_url, 'user/profile') !== false) {
            $this->userprofile();
        } elseif (strpos($requested_url, 'user/inboxs') !== false) {
            $this->userinbox();
        } elseif (strpos($requested_url, 'user/post-publishing') !== false) {
            $this->postpublishing();
        } elseif (strpos($requested_url, 'user/analytic') !== false) {
            $this->analytics();
        } elseif (strpos($requested_url, 'user/calenders') !== false) {
            $this->calender();
        } elseif (strpos($requested_url, 'user/accountpayment') !== false) {
            $this->accountpayment();
        } elseif (strpos($requested_url, 'user/payment-after-monthly-trial') !== false) {
            $this->paymentaftermonthlytrial();
        }
    }
    private function load_dashboard_template()
    {
        $this->enqueue_dashboard_assets();
        $this->load_template_file('user.php');
    }

    private function fbapi()
    {
        wp_enqueue_script('dashboard-script', HIIVE_URL . 'assets/js/dashboard-script.js', array('jquery'), '1.0.0', true);
        $this->load_template_file('fbapi.php');
    }

    private function userprofile()
    {
        $this->enqueue_dashboard_assets();
        $this->load_template_file('userprofile-setting.php');
    }

    private function userinbox()
    {
        $this->enqueue_dashboard_assets();
        wp_enqueue_style('inbox-style', HIIVE_URL . 'assets/css/inbox.css', array(), '1.1.1');
        $this->load_template_file('user-inbox.php');
    }

    private function postpublishing()
    {
        $this->enqueue_dashboard_assets();
        wp_enqueue_style('inbox-style', HIIVE_URL . 'assets/css/inbox.css', array(), '1.1.1');
        $this->load_template_file('post-publishing.php');
    }

    private function analytics()
    {
        $this->enqueue_dashboard_assets();
        wp_enqueue_style('inbox-style', HIIVE_URL . 'assets/css/inbox.css', array(), '1.1.1');
        $this->load_template_file('analytics.php');
    }

    private function calender()
    {
        $this->enqueue_dashboard_assets();
        wp_enqueue_style('inbox-style', HIIVE_URL . 'assets/css/inbox.css', array(), '1.1.1');
        $this->load_template_file('calender.php');
    }

    private function accountpayment()
    {
        $this->enqueue_dashboard_assets();
        wp_enqueue_style('inbox-style', HIIVE_URL . 'assets/css/inbox.css', array(), '1.1.1');
        $this->load_template_file('account-payment.php');
    }

    private function paymentaftermonthlytrial()
    {
        $this->enqueue_dashboard_assets();
        wp_enqueue_style('inbox-style', HIIVE_URL . 'assets/css/inbox.css', array(), '1.1.1');
        $this->load_template_file('payment-after-monthly-trial.php');
    }

    private function enqueue_dashboard_assets()
    {
        wp_enqueue_style('dashboard-style-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '1.0.0');
        wp_enqueue_style('dashboard-style', HIIVE_URL . 'assets/css/dashboard-style.css', array(), '1.1.1');
        wp_enqueue_script('dashboard-script', HIIVE_URL . 'assets/js/dashboard-script.js', array('jquery'), '1.0.0', true);
    }

    public function load_template_file($template_file)
    {
        ob_start(); // Start output buffering

        if ($template_file == "user.php") {
            // Define the parameters
            $client_id = '873311951299343';
            $redirect_uri = defined('FACEBOOK_REDIRECT_URL') ? FACEBOOK_REDIRECT_URL : ''; // Ensure FACEBOOK_REDIRECT_URL is defined
            $scope = 'pages_manage_posts,email'; // Scope for permissions
            $state = ''; // Optional state parameter

            // Construct the URL using http_build_query
            $fb_auth_url = 'https://www.facebook.com/v20.0/dialog/oauth?' . http_build_query([
                'client_id' => $client_id,
                'redirect_uri' => $redirect_uri,
                'scope' => $scope,
                'state' => $state,
                //'response_type' => 'code token granted_scopes '
            ]);

            //$fb_accounts_count = UserDataStore::getFacebookAccountCount();
            //$fb_pages_details  = UserDataStore::getUserDataFB();
            // echo "<pre>";
            // var_dump( $fb_pages_details );
            // echo "</pre>";

        }

        include_once HIIVE_PATH . 'templates/view/' . $template_file;

        ob_end_flush(); // Flush and end output buffering
        exit;
    }
}
new Router();
