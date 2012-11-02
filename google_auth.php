<?php

if(isset($_GET['code'])) {
    // try to get an access token
    $code = $_GET['code'];
    $url = 'https://accounts.google.com/o/oauth2/token';
    $params = array(
        "code" => $code,
        "client_id" => "960269005181.apps.googleusercontent.com",
        "client_secret" => "LZsBQTNDeTvxqs6C8wyRD78O",
        "redirect_uri" => "http://localhost:8888/ventchannel/google_auth.php",
        "grant_type" => "authorization_code"
    );
 
    $request = new HttpRequest($url, HttpRequest::METH_POST);
    $request->setPostFields($params);
    $request->send();
    $responseObj = json_decode($request->getResponseBody());
    echo "Access token: " . $responseObj->access_token;
}

?>