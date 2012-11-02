<?php
ob_start();
require_once '../../src/Google_Client.php';
require_once '../../src/contrib/Google_PlusService.php';
session_start();

$client = new Google_Client();
$client->setApplicationName("Google+ PHP Starter Application");

// Visit https://code.google.com/apis/console?api=plus to generate your
// client id, client secret, and to register your redirect uri.
 $client->setClientId('960269005181.apps.googleusercontent.com');
 $client->setClientSecret('LZsBQTNDeTvxqs6C8wyRD78O');
 $client->setRedirectUri('http://localhost:8888/ventchannel/assets/google-api-php-client/examples/plus/simple.php');
 $client->setDeveloperKey('AIzaSyAldf0RMQ6j4mnLgh2RRSKswXX9f4dKD2I');
$plus = new Google_PlusService($client);


//$client->setAccessToken($_SESSION['token']);
if (isset($_GET['logout'])) {
  unset($_SESSION['token']);
}

if (isset($_GET['code'])) {
  if (strval($_SESSION['state']) !== strval($_GET['state'])) {
    die("The session state did not match.");
  }
  $client->authenticate();
  $_SESSION['token'] = $client->getAccessToken();
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
  $client->setAccessToken($_SESSION['token']);
}

if ($client->getAccessToken()) {
  $me = $plus->people->get('me');
	$_SESSION['me'] = $me;
/*echo $name;
  print "Your Profile: <pre>" . print_r($me, true) . "</pre>";

  $params = array('maxResults' => 100);
  $activities = $plus->activities->listActivities('me', 'public', $params);
  print "Your Activities: <pre>" . print_r($activities, true) . "</pre>";
  
  $params = array(
    'orderBy' => 'best',
    'maxResults' => '20',
  );
  $results = $plus->activities->search('Google+ API', $params);
  foreach($results['items'] as $result) {
    print "Search Result: <pre>{$result['object']['content']}</pre>\n";
  }

  // The access token may have been updated lazily.*/
  $_SESSION['token'] = $client->getAccessToken();
$_SESSION['message'] = 1;
header('location:../../../../welcome.php');
} else {
  $state = mt_rand();
  $client->setState($state);
  $_SESSION['state'] = $state;

  $authUrl = $client->createAuthUrl();
  $_SESSION['authUrl'] = $authUrl;
  header('location:../../../../welcome.php');
  //print "<a class='login' href='$authUrl'>Connect Me!</a>";
}
//header('location:../../../../welcome.php');

