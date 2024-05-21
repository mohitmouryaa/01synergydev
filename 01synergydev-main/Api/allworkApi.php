<?php

require './vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

include('./common/constant.php');

$client = new Client();

try {
  $allworkContent = $client->request('GET', $apiUrl . 'get-all-our-work', [
    'headers' => [
      'AUTH-SECRET-KEY' => $secretKey,
      'Content-Type' => 'application/json'
    ]
  ]);

  $allworkpageJson = $allworkContent->getBody();
  @$allworkpageData = @json_decode($allworkpageJson, true)['ourWork'];

  $links = '';
  $projectButtons = '';
  $emptyQuotes = "";
  foreach ($allworkpageData['list'] as $item) {
    if (isset($item['media']['url'])) {
      $links .= '"'.$baseUrl . $item['media']['url'] . '",';
      $projectButtons.= '"'."<a href='".$item['pageUrl']."' class='circle-link' style='font-size: 30px;'><div class='circle-icon'><i></i><span><img src='../images/arrow-hex.svg' alt=''><img src='../images/arrow-hex.svg'></span></div>".$item['title']."</a>".'",';
      $emptyQuotes .= '"'.'",';
    }
  }
  $links = rtrim($links, ',');
  $projectButtons = rtrim($projectButtons, ',');
  $emptyQuotes = rtrim($emptyQuotes, ',');

  // header('Content-Type: application/json');
  // echo json_encode($allworkpageData, JSON_PRETTY_PRINT);
  // die();

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
