<?php

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = rtrim($url, '/');
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
$clientUrl = $protocol . $_SERVER['HTTP_HOST'];



switch (true) {
    case $url === '/' || $url === "":
        include 'homepage.php';
        break;

    case $url === '/services':
        include 'services.php';
        break;

    case $url === '/our-work':
        include 'work.php';
        break;

    case strpos($url, '/service/') === 0:
        $serviceDetail = substr($url, strlen('/service/'));
        include 'single-service.php';
        break;

    case strpos($url, '/work/') === 0:
        $workSlug = substr($url, strlen('/work/'));
        include './single-work.php';
        break;

    default:
        include '404.php';
        break;
}
?>

