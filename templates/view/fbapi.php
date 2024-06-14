<?php

require_once PLUGIN_ROOT_PATH . 'vendor/autoload.php'; // change path as needed

use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

define('APP_ID', '405048872339049');
define('APP_SECRET', '88310b54b858184dcbf1b829db1dd394');
define('API_VERSION', 'v19.0');
define('FB_BASE_URL', 'ENTER_URL');

$fb = new \Facebook\Facebook([
  'app_id' => APP_ID,
  'app_secret' => APP_SECRET,
  'default_graph_version' => API_VERSION,
  
]);

$helper = $fb->getRedirectLoginHelper();

// var_dump($helper);

// exit();
try {
  $accessToken = $helper->getAccessToken();
} catch(FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (!isset($accessToken)) {
  // Redirect the user to Facebook login URL
  $permissions = ['email']; // Optional permissions
  $loginUrl = $helper->getLoginUrl('https://socialhiiv.lv/user/dashboard', $permissions);
  echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
  exit;
}

// Logged in
echo '<h3>Access Token</h3>';
var_dump($accessToken->getValue());

// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
echo '<h3>Metadata</h3>';
var_dump($tokenMetadata);

// Validation (these will throw FacebookSDKException's when they fail)
$tokenMetadata->validateAppId(APP_ID); // Replace YOUR_APP_ID with your app id
$tokenMetadata->validateExpiration();

if (!$accessToken->isLongLived()) {
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
    exit;
  }

  echo '<h3>Long-lived</h3>';
  var_dump($accessToken->getValue());
}

$_SESSION['fb_access_token'] = (string) $accessToken;


