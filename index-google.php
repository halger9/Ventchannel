<?php

//Oauth 2.0: exchange token for session token so multiple calls can be made to api
if(isset($_REQUEST['code'])){
    $_SESSION['accessToken'] = get_oauth2_token($_REQUEST['code']);
}

//returns session token for calls to API using oauth 2.0
function get_oauth2_token($code) {
    global $client_id;
    global $client_secret;
    global $redirect_uri;

    $oauth2token_url = "https://accounts.google.com/o/oauth2/token";
    $clienttoken_post = array(
    "code" => $code,
    "client_id" => '960269005181.apps.googleusercontent.com',
    "client_secret" => 'LZsBQTNDeTvxqs6C8wyRD78O',
    "redirect_uri" => 'http://localhost:8888/ventchannel/index-google.php',
    "grant_type" => "authorization_code"
    );

    $curl = curl_init($oauth2token_url);

    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $clienttoken_post);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $json_response = curl_exec($curl);
    curl_close($curl);

    $authObj = json_decode($json_response);

    if (isset($authObj->refresh_token)){
        //refresh token only granted on first authorization for offline access
        //save to db for future use (db saving not included in example)
        global $refreshToken;
        $refreshToken = $authObj->refresh_token;
    }

    $accessToken = $authObj->access_token;
    return $accessToken;
}