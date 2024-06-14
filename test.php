<?php
// require_once "wp-load.php";

require_once plugin_dir_path(__FILE__) . 'src/Facebook/autoload.php';
// Initialize the Facebook SDK with your App ID and App Secret
// Repzzzzzzzzlace these variables with your actual Facebook App ID, App Secret, and Redirect URI
$appId = "458287490212521";
$appSecret = '4d99fc4342fc63e8b7f1974d41eb46bc';
$redirectUri = 'https://socialhiiv.lv/user/dashboard';  

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'public_profile']; // Optional permissions

$loginUrl = $helper->getLoginUrl('https://your-callback-url.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';