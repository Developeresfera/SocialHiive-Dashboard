<?php

class ProfilePictureFetcher {
    // Default API version
    private static $defaultApiVersion = 'v20.0';

    // Static method to get the profile picture URL
    public static function getProfilePictureUrl($pageId, $accessToken, $type = 'large', $apiVersion = null) {
        // Use provided API version or default
        $apiVersion = $apiVersion ?: self::$defaultApiVersion;
        // Graph API endpoint
        $url = "https://graph.facebook.com/{$apiVersion}/{$pageId}/picture?access_token={$accessToken}";
        
        return $url; // Return the URL instead of echoing it
    }
}