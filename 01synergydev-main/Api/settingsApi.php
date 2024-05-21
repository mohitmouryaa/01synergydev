<?php

require './vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

include('./common/constant.php');


$client = new Client();

try {

  $settingContent = $client->request('GET', $apiUrl . 'get-website-settings-data', [
    'headers' => [
      'AUTH-SECRET-KEY' => $secretKey,
      'Content-Type' => 'application/json'
    ]
  ]);

  $settingJson = $settingContent->getBody();
  $settingData = json_decode($settingJson, true);


  // header('Content-Type: application/json');
  // echo json_encode($homepageData, JSON_PRETTY_PRINT); die();

  if (json_last_error() !== JSON_ERROR_NONE) {
    echo "JSON Error: " . json_last_error_msg();
    exit;
  }

  // print_r($data);die;
} catch (RequestException $e) {
  echo "HTTP Request Error: " . $e->getMessage();
  if ($e->hasResponse()) {
    echo "\n" . $e->getResponse()->getBody();
  }
}

?>