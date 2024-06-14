<?php

class LinkedinAuthHandler
{
    private $clientId;
    private $clientSecret;
    private $redirectUri;
    private $scope;
    private $state;


    public function __construct($clientId, $clientSecret, $redirectUri,$scope = 'r_liteprofile r_emailaddress w_member_social')
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
    }

    public function getAccessToken($authCode)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://www.linkedin.com/oauth/v2/accessToken',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query(array(
                'grant_type' => 'authorization_code',
                'code' => $authCode,
                'redirect_uri' => $this->redirectUri,
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret
            )),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
            ),
        ));

        $response = curl_exec($curl);

        if ($response === false) {
            curl_close($curl);
            throw new Exception('Curl error: ' . curl_error($curl));
        }

        curl_close($curl);
        $jsonResponse = json_decode($response, true);

        if (isset($jsonResponse['access_token'])) {
            return $jsonResponse['access_token'];
        } else {
            throw new Exception('Error retrieving access token: ' . $response);
        }
    }

    public function fetchUserDetails($accessToken)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.linkedin.com/v2/me',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $accessToken,
                'Content-Type: application/json',
            ),
        ));

        $response = curl_exec($curl);

        if ($response === false) {
            curl_close($curl);
            throw new Exception('Curl error: ' . curl_error($curl));
        }

        curl_close($curl);
        return json_decode($response, true);
    }
}

