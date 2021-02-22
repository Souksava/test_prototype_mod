<?php

require('./Facebook/autoload.php');

$fb = new Facebook\Facebook([
    'app_id' => '183641043348174',
    'app_secret' => 'fb3a80f0de349cdedb07af700bc1da11',
    'default_graph_version' => 'v2.10',
    ]);
  
  $linkData = [
    'link' => 'https://www.google.com/',
    'message' => 'test message',
    ];
  
  try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->post('/me/feed', $linkData, 'EAACvLRwL4H8BAOfVd4RDyTek1hOfs8UzWKFNWFZBf0B2YOZCTzegptOsaHCL2SvUtz3OU29dSNFGZCyhONPmVCzwcT0DkyAXbEU68XFZC12mKM73AZAfMScW3qy0pBLal3NEOjFdDVIMCZBvm1j7To4qpI7g8Qe4yPUVNKmw0ZCG456Wk9PcJCZB9ddLbF14CkMZD');
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }
  
  $graphNode = $response->getGraphNode();
  
  echo 'Posted with id: ' . $graphNode['id'];

?>