<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

$apiUrl = "http://64.227.180.135:8000/api/";
$baseUrl = "http://64.227.180.135:8000";
$secretKey = "8xVvR1NQifbxoMbkZzXwCfuURdhwSUiy";

$client = new Client();

try {
  $homeContent = $client->request('GET', $apiUrl . 'get-homepage-first-section-content', [
    'headers' => [
      'AUTH-SECRET-KEY' => $secretKey,
      'Content-Type' => 'application/json'
    ]
  ]);

  $homeContent2 = $client->request('GET', $apiUrl . 'get-homepage-second-section-content', [
    'headers' => [
      'AUTH-SECRET-KEY' => $secretKey,
      'Content-Type' => 'application/json'
    ]
  ]);


  $settingContent = $client->request('GET', $apiUrl . 'get-website-settings-data', [
    'headers' => [
      'AUTH-SECRET-KEY' => $secretKey,
      'Content-Type' => 'application/json'
    ]
  ]);

  $homepageJson = $homeContent->getBody();
  $homepageData = json_decode($homepageJson, true);

  $homepageJson2 = $homeContent2->getBody();
  $homepageData2 = json_decode($homepageJson2, true);


  $settingJson = $settingContent->getBody();
  $settingData = json_decode($settingJson, true);


  // header('Content-Type: application/json');
  // echo json_encode($homepageData2, JSON_PRETTY_PRINT); die();

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


<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <title><?= @$settingData['websiteSettings']['metaTitle'] ?></title>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="robots" content="all" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/styles.css" />

  <style type="text/css">
    body,
    #hero {
      min-height: 100vh;
    }
  </style>
</head>

<body class="loading init">
  <section id="webglBubble"></section>
  <div id="loading-overlay">
    <div>
      <svg viewBox="0 0 256 218" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g transform="translate(-1529.000000, -989.000000)" fill="none" stroke-width="1" stroke="#EEEEF2">
          <g transform="translate(1529.555556, 989.920435)">
            <polyline class="pathAnim" stroke-linecap="round" vector-effect="non-scaling-stroke" points="0 0 0 34.9162585 31.8888889 54.0252776 63.7777778 34.9162585 95.7777778 54.0252776 95.7777778 88.9162585 127.5 108.5 159.555556 88.9162585"></polyline>
            <polyline class="pathAnim" stroke-linecap="round" vector-effect="non-scaling-stroke" points="95.7777778 88.9162585 63.7777778 108.025278 63.7777778 142.941536 32 162.025278"></polyline>
            <polyline class="pathAnim" stroke-linecap="round" vector-effect="non-scaling-stroke" points="63.8888889 142.945268 95.7777778 162.025278 127.5 142.945268 160 162.025278 159.555556 196.970546 127.666667 216.079565"></polyline>
            <polyline class="pathAnim" stroke-linecap="round" vector-effect="non-scaling-stroke" points="160 162.025278 191.444444 142.941536 223.555556 162.054287 254.777778 142.945268"></polyline>

            <polyline vector-effect="non-scaling-stroke" points="0 0 0 34.9162585 31.8888889 54.0252776 63.7777778 34.9162585 95.7777778 54.0252776 95.7777778 88.9162585 127.5 108.5 159.555556 88.9162585"></polyline>
            <polyline vector-effect="non-scaling-stroke" points="95.7777778 88.9162585 63.7777778 108.025278 63.7777778 142.941536 32 162.025278"></polyline>
            <polyline vector-effect="non-scaling-stroke" points="63.8888889 142.945268 95.7777778 162.025278 127.5 142.945268 160 162.025278 159.555556 196.970546 127.666667 216.079565"></polyline>
            <polyline vector-effect="non-scaling-stroke" points="160 162.025278 191.444444 142.941536 223.555556 162.054287 254.777778 142.945268"></polyline>
          </g>
        </g>
      </svg>
      <span>LOADING ECOSYSTEM</span>
    </div>
  </div>

  <div id="hamburger">
    <svg width="30" height="61" viewBox="0 0 30 61" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_1490_325)">
        <path class="lineA" d="M5.07849 11V60" stroke="#EEEEF2" stroke-width="2"></path>
        <path class="lineB" d="M15.0785 16V45" stroke="#EEEEF2" stroke-width="2"></path>
        <path class="lineC" d="M25.0784 1V50" stroke="#EEEEF2" stroke-width="2"></path>
        <path class="pointA" fill-rule="evenodd" clip-rule="evenodd" d="M5.07843 11L9 8.4482L9 3.61273L5.07843 1L1.07843 3.61273L1 8.4482L5.07843 11Z" stroke="#EEEExF2" stroke-width="2"></path>
        <path class="pointB" fill-rule="evenodd" clip-rule="evenodd" d="M25.0784 60L29 57.4482V52.6127L25.0784 50L21.0784 52.6127L21 57.4482L25.0784 60Z" stroke="#EEEEF2" stroke-width="2"></path>
      </g>
    </svg>
  </div>
  <a href="../" id="logo" class="nav-link" aria-label="Get back to the home page">
    <img src="<?= @$baseUrl . @$settingData['websiteSettings']['websiteLogo'] ?>" alt="">
  </a>

  <!-- MENU -->
  <div id="menu-slide">
    <div>
      <nav id="links">
        <div>
          <a class="nav-link mask-link" data-id="work" href="../work/" aria-label="Work"><span>Work</span>
            <i class="dot work-dot">
              <svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z"></path>
              </svg>
            </i>
          </a>
          <a class="nav-link mask-link" data-id="Services" href="../services/" aria-label="Services"><span>Services</span>
            <i class="dot work-dot"><svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z"></path>
              </svg>
            </i>
          </a>
          <a class="nav-link mask-link" data-id="Studio" href="../studio" aria-label="Studio"><span>Studio</span>
            <i class="dot work-dot">
              <svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z"></path>
              </svg>
            </i>
          </a>
          <a class="nav-link mask-link" data-id="Contact" href="../contact" aria-label="Contact"><span>Contact</span>
            <i class="dot work-dot">
              <svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z"></path>
              </svg>
            </i>
          </a>
        </div>
      </nav>
      <div class="social bs-12">
        <a href="https://www.linkedin.com/company/buzzworthystudio/" target="_blank" class="text-link" aria-label="Linkedin">Linkedin</a>
        <a href="https://www.instagram.com/buzzworthy.studio/" target="_blank" class="text-link" aria-label="Instagram">Instagram</a>
        <a href="https://twitter.com/getbuzzworthy" target="_blank" class="text-link" aria-label="Twitter">Twitter</a>
        <a href="https://www.behance.net/BuzzworthyStudio" target="_blank" class="text-link" aria-label="Behance">Behance</a>
        <a href="https://dribbble.com/Buzzworthy/" target="_blank" class="text-link" aria-label="Dribbble">Dribbble</a>
      </div>
    </div>
  </div>

  <div class="page-to-page">
    <svg viewBox="0 0 1420 880" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
      <path id="pageBgAnim2" d="M0 20C0 8.95429 8.86995 0 19.9156 0C68.0089 0 189.957 0 236.667 0C317.505 0 392.495 0 473.333 0C556.906 0 626.428 0 710 0C800.016 0 856.651 0 946.667 0C1067.34 0 1062.66 0 1183.33 0C1273.85 0 1361.73 0 1400 0C1411.05 0 1420 8.95431 1420 20V860C1420 871.046 1411.05 880 1400 880H20C8.95432 880 0 871.046 0 860V20Z" fill="#1D2145"></path>
    </svg>
    <svg viewBox="0 0 1420 880" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
      <path id="pageBgAnim" d="M0 20C0 8.95429 8.86995 0 19.9156 0C68.0089 0 189.957 0 236.667 0C317.505 0 392.495 0 473.333 0C556.906 0 626.428 0 710 0C800.016 0 856.651 0 946.667 0C1067.34 0 1062.66 0 1183.33 0C1273.85 0 1361.73 0 1400 0C1411.05 0 1420 8.95431 1420 20V860C1420 871.046 1411.05 880 1400 880H20C8.95432 880 0 871.046 0 860V20Z" fill="#1D2145"></path>
    </svg>
  </div>

  <!-- AJAX CONTENT HOLDER -->
  <main id="smooth-wrapper">
    <a href="../contact" id="fixed-cta" title="Contact us">
      <i></i>
      <span>
        <svg viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L13 11.5858L24.2929 0.292893C24.6834 -0.0976311 25.3166 -0.0976311 25.7071 0.292893C26.0976 0.683417 26.0976 1.31658 25.7071 1.70711L14.4142 13L25.7071 24.2929C26.0976 24.6834 26.0976 25.3166 25.7071 25.7071C25.3166 26.0976 24.6834 26.0976 24.2929 25.7071L13 14.4142L1.70711 25.7071C1.31658 26.0976 0.683419 26.0976 0.292895 25.7071C-0.0976295 25.3166 -0.0976295 24.6834 0.292895 24.2929L11.5858 13L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683418 0.292893 0.292893Z" fill="white"></path>
          <path d="M16.9996 9.0001C17.9996 7.5001 16.8483 8.11453 17.0991 7.5C14.0991 10.5 11.8892 10.4868 8.88916 7.48682C9.72249 8.82015 11.4996 11.6 11.4996 12C11.4996 12.4 12.8329 12.5 13.4996 12.5L16.9996 9.0001Z" fill="white"></path>
          <path d="M8.99473 9.00777C7.49473 8.00777 8.10916 9.15899 7.49463 8.9082C10.4946 11.9082 10.4814 14.1182 7.48145 17.1182C8.81478 16.2848 11.5946 14.5078 11.9946 14.5078C12.3946 14.5078 12.4946 13.1744 12.4946 12.5078L8.99473 9.00777Z" fill="white"></path>
          <path d="M8.99087 16.9936C7.99087 18.4936 9.14208 17.8792 8.89129 18.4937C11.8913 15.4937 14.1013 15.5069 17.1013 18.5069C16.2679 17.1736 14.4909 14.3937 14.4909 13.9937C14.4909 13.5937 13.1575 13.4937 12.4909 13.4937L8.99087 16.9936Z" fill="white"></path>
          <path d="M16.9867 16.9861C18.4867 17.9861 17.8722 16.8349 18.4868 17.0857C15.4868 14.0857 15.5 11.8757 18.5 8.8757C17.1666 9.70903 14.3868 11.4861 13.9868 11.4861C13.5868 11.4861 13.4868 12.8194 13.4868 13.4861L16.9867 16.9861Z" fill="white"></path>
        </svg>
      </span>
      <svg id="pencil" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="handle-a" fill-rule="evenodd" clip-rule="evenodd" d="M12.2601 16.0778C12.1641 16.1738 12.2321 16.3379 12.3679 16.3379V16.3379C12.4073 16.3379 12.4452 16.3226 12.4736 16.2953L14.9293 13.9292L17.3586 11.4999C17.4027 11.4558 17.4215 11.3924 17.4085 11.3314V11.3314C17.3781 11.1886 17.2015 11.1364 17.0983 11.2396L12.2601 16.0778Z" stroke="white" stroke-width="2"></path>
        <path class="tip-a" fill-rule="evenodd" clip-rule="evenodd" d="M14.9293 13.9292L12.5735 15.5735L16.5735 11.5735L14.9293 13.9292Z" fill="white"></path>
        <path class="handle-b" fill-rule="evenodd" clip-rule="evenodd" d="M27.4142 29.9237C26.6332 30.7047 26.6332 31.9711 27.4142 32.7521L43.5938 48.9316C43.8613 49.1992 44.1993 49.3854 44.5684 49.4685L50.8933 50.8933L49.4685 44.5685C49.3854 44.1993 49.1992 43.8613 48.9316 43.5938L32.7521 27.4142C31.971 26.6332 30.7047 26.6332 29.9237 27.4142L27.4142 29.9237Z" stroke="white" stroke-width="2"></path>
        <path class="tip-b" fill-rule="evenodd" clip-rule="evenodd" d="M49.7919 50.1349L45 49L49 45L49.7919 50.1349Z" fill="white"></path>
      </svg>
    </a>
    <!-- PATTERN BG -->
    <div class="scrollPattern">
      <div class="patternTop">
        <img class="lazy" src="images/pattern-top-prel.png" data-src="/images/pattern-top.webp" data-src-big="/images/pattern-top.webp" alt="Hexagon line pattern png image" />
      </div>
      <div class="patternBottom">
        <img class="lazy" src="images/pattern-bottom-prel.png" data-src="/images/pattern-bottom.webp" data-src-big="/images/pattern-bottom.webp" alt="Hexagon line pattern png image" />
      </div>
    </div>

    <div id="drag-ico">
      <span></span>
      <svg viewBox="0 0 54 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="dot" fill-rule="evenodd" clip-rule="evenodd" d="M25.3519 10L23 6L25.3519 2L29.6485 2L32 6L29.6485 10L25.3519 10Z" stroke="#EEEEF2" stroke-width="1.5" vector-effect="non-scaling-stroke"></path>
        <path class="ar-1" fill-rule="evenodd" clip-rule="evenodd" d="M7 12L1 6.5L7 0.999996L7 12Z" stroke="#EEEEF2" stroke-width="1.5" stroke-linejoin="round" vector-effect="non-scaling-stroke"></path>
        <path class="ar-2" fill-rule="evenodd" clip-rule="evenodd" d="M47 1L53 6.5L47 12L47 1Z" stroke="#EEEEF2" stroke-width="1.5" stroke-linejoin="round" vector-effect="non-scaling-stroke"></path>
      </svg>
    </div>

    <!-- SMOOTH SCROLLING CONTENT -->
    <div class="content home" data-work="init">
      <!-- <div id="breadcrumb">
        <span class="bs-tech hero-in">Buzzworthy studio</span>
      </div> -->

      <!-- KEYWORDS USPS -->
      <div id="usp" class="bs-xl-os-12 bs-tech bs-sm-os-6 bs-xs-os-3 bs-xs-16 bs-xs-os-4">
        <span>We</span>
        <span>
          <i class="circle-tag"></i>
          <i class="circle-tag"></i>
        </span>
        <div class="usp-carousel">
          <p class="inner item-first">Unlimited Development Requests</p>
          <p class="inner">Your Dedicated Developer</p>
          <p class="inner">Flexible Monthly Subscription</p>
          <p class="inner">Streamlined and Efficient Workflow</p>
          <p class="inner">No Hidden Fees or Commitments</p>
        </div>

      </div>

      <!-- HERO SECTION -->
      <section id="hero" class="grid-inner">
        <div class="blur-circle"></div>
        <div>
          <h1 class="bs-220">
            <div>
              <span class="hero-split chars xs-center">Software</span>
              <span class="hero-split chars red xs-center">Development</span>
            </div>
            <div>
              <span class="hero-split chars red">Development</span>
              <span class="hero-split chars right xs-left">Membership</span>
            </div>
          </h1>
          <div id="hero-work-link" class="bs-xl-8 bs-xl-os-10 bs-xs-16 bs-xs-os-0 hero-in">
            <a href="../work/opositive">
              <span class="link-bg"></span>
              <span class="bs-hero-small upper">Latest project</span>
              <i>
                <svg viewBox="0 0 56 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path class="arrow-line" d="M1 6L49.8077 6" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path class="arrow-line" d="M1 6L49.8077 6" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M49.8086 1L55.0009 6L49.8086 11L49.8086 1Z" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </i>
              <span class="bs-hero-small upper"><?php echo @$homepageData['header']['latestWork']['title']; ?></span>
            </a>
          </div>
          <div class="scroll-to hero-in" data-scroll="intro">
            <div class="bs-tech faded">(&nbsp;&nbsp;&nbsp;SCROLL&nbsp;&nbsp;&nbsp;)</div>
          </div>
          <div class="bs-xl-5 bs-xs-18 bs-xs-os-2 hero-copy hero-in">
            <p class="bs-hero-small upper faded xs-center">
              <?php echo @$homepageData['header']['description']; ?>
            </p>
          </div>
        </div>
      </section>

      <!-- intro about -->
      <section id="intro" class="hero-intro grid-inner xl-top-2 xs-top-2 bs-grid xs-wrap">
        <div class="bs-xl-2 bs-xs-7">
          <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i><?php echo @$homepageData['about']['title'] ?></h2>
        </div>
        <div class="bs-xl-4 bs-xs-16 bs-xl-os-1 bs-xs-os-0 xs-top-1">
          <!-- <p class="split lines xl-bottom-3 xs-bottom-2 upper"> -->
          <?php echo @$homepageData['about']['smallDescription'] ?>
          <!-- </p> -->
        </div>
        <div class="bs-xl-os-1 bs-xl-10 bs-sm-os-6 bs-sm-12 bs-xs-os-0 bs-xs-22 bs-xs-os-0">
          <!-- <p class="bs-60 split lines xl-bottom-4 xs-bottom-2 upper"> -->
          <?php echo @$homepageData['about']['longDescription'] ?>
          <!-- </p> -->
          <a href="../about.html" class="arrow-link al-hover bs-tech"><i><img src="images/arrow-link.svg" alt="line arrow icon" /></i>ABOUT US</a>
          <a href="../services" class="arrow-link al-hover bs-tech"><i><img src="images/arrow-link.svg" alt="line arrow icon" /></i>Services</a>
        </div>
      </section>

      <!-- WORK SECTION -->
      <section class="xl-top-6 xs-top-4 work-listing" id="work">
        <div class="grid-inner">
          <div class="line-anim">
            <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
              <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145" stroke="#EEEEF2" fill-rule="evenodd"></path>
            </svg>
            <div></div>
            <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
              <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145" stroke="#EEEEF2" fill-rule="evenodd"></path>
            </svg>
          </div>
          <div class="bs-grid xs-wrap">
            <div class="bs-xl-7 bs-xs-22">
              <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i><?php echo  @$homepageData['ourWork']['title']; ?></h2>
              <h3 class="bs-160 upper xl-top-1 split chars"><?php echo @$homepageData['ourWork']['title']; ?><i class="dot view"></i></h3>
              <article class="bs-xl-7 bs-xs-22 xl-top-2 xs-top-1" data-speed=".95">
                <a href="<?php echo @$homepageData['ourWork']['list'][0]['pageUrl']; ?>">
                  <figure>
                    <i class="work-lottie">
                      <svg viewBox="0 0 660 660" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="imgMask1">
                          <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H659.5C659.776 0 660 0.223858 660 0.5V0.5C660 0.776142 659.829 1 659.553 1C653.058 1 577.308 1 528 1C476.451 1 447.549 1 396 1C344.451 1 315.549 1 264 1C212.451 1 183.549 1 132 1C82.6923 1 6.94176 1 0.447341 1C0.171199 1 0 0.776142 0 0.5V0.5Z" fill="black"></path>
                        </mask>

                        <image width="100%" height="100%" mask="url(#imgMask1)" href="<?= $baseUrl; ?><?php echo  @$homepageData['ourWork']['list'][0]['media']['url']; ?>"></image>
                      </svg>
                    </i>
                  </figure>
                  <h2 class="thumb-title bs-14 upper FontBody"><?php echo  @$homepageData['ourWork']['list'][0]['title']; ?></h2>
                </a>
              </article>
            </div>
            <article class="bs-xl-9 bs-xl-os-2 bs-xs-22 bs-xs-os-0 xs-top-1">
              <a href="<?php echo @$homepageData['ourWork']['list'][1]['pageUrl']; ?>">
                <figure>
                  <i class="work-lottie">
                    <svg viewBox="0 0 660 660" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="imgMask2">
                        <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H659.5C659.776 0 660 0.223858 660 0.5V0.5C660 0.776142 659.829 1 659.553 1C653.058 1 577.308 1 528 1C476.451 1 447.549 1 396 1C344.451 1 315.549 1 264 1C212.451 1 183.549 1 132 1C82.6923 1 6.94176 1 0.447341 1C0.171199 1 0 0.776142 0 0.5V0.5Z" fill="black"></path>
                      </mask>

                      <image width="100%" height="100%" mask="url(#imgMask2)" href="<?= $baseUrl; ?><?php echo  @$homepageData['ourWork']['list'][1]['media']['url']; ?>"></image>
                    </svg>
                  </i>
                </figure>
                <h2 class="thumb-title bs-14 upper FontBody"><?php echo  @$homepageData['ourWork']['list'][1]['title']; ?></h2>
              </a>
            </article>
          </div>
          <div class="bs-grid xl-top-3 xs-top-1 xs-wrap">
            <article class="bs-xl-8 bs-xl-os-2 bs-xs-22 bs-xs-os-0" data-speed=".9">
              <a href="<?php echo @$homepageData['ourWork']['list'][2]['pageUrl']; ?>">
                <figure>
                  <i class="work-lottie">
                    <svg viewBox="0 0 660 660" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="imgMask3">
                        <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H659.5C659.776 0 660 0.223858 660 0.5V0.5C660 0.776142 659.829 1 659.553 1C653.058 1 577.308 1 528 1C476.451 1 447.549 1 396 1C344.451 1 315.549 1 264 1C212.451 1 183.549 1 132 1C82.6923 1 6.94176 1 0.447341 1C0.171199 1 0 0.776142 0 0.5V0.5Z" fill="black"></path>
                      </mask>

                      <image width="100%" height="100%" mask="url(#imgMask3)" href="<?= $baseUrl; ?><?php echo  @$homepageData['ourWork']['list'][2]['media']['url']; ?>"></image>
                    </svg>
                  </i>
                </figure>
                <h2 class="thumb-title bs-14 upper FontBody"><?php echo  @$homepageData['ourWork']['list'][2]['title']; ?></h2>
              </a>
            </article>
            <!-- <article class="bs-xl-6 bs-xl-os-2 bs-xs-22 bs-xs-os-0 xl-top-6 xs-top-1" data-speed="1.05">
              <a href="<?php echo @$homepageData['ourWork']['list'][3]['pageUrl']; ?>">
                <figure>
                  <i class="work-lottie">
                    <svg viewBox="0 0 660 660" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="imgMask4">
                        <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H659.5C659.776 0 660 0.223858 660 0.5V0.5C660 0.776142 659.829 1 659.553 1C653.058 1 577.308 1 528 1C476.451 1 447.549 1 396 1C344.451 1 315.549 1 264 1C212.451 1 183.549 1 132 1C82.6923 1 6.94176 1 0.447341 1C0.171199 1 0 0.776142 0 0.5V0.5Z" fill="black"></path>
                      </mask>
                      <image width="100%" height="100%" mask="url(#imgMask4)" href="<?= $baseUrl; ?><?php echo  @$homepageData['ourWork']['list'][3]['media']['url']; ?>"></image>
                    </svg>
                  </i>
                </figure>
                <h2 class="thumb-title bs-14 upper FontBody"><?php echo  @$homepageData['ourWork']['list'][3]['title']; ?></h2>
              </a>
            </article> -->
          </div>
        </div>
      </section>
      <div class="bs-xl-6 bs-xl-os-15 bs-xs-22 bs-xs-os-1 view xl-top-4 xl-bottom-2 xs-top-2">
        <a href="../work/" class="arrow-link al-hover bs-tech"><i><img src="images/arrow-link.svg" alt="line arrow icon" /></i>View all work</a>
      </div>

      <!-- ATITUDE SECTION -->
      <section id="attitude" class="xs-top-3">
        <h2 class="big-fade xs-top-0"><?php echo  @$homepageData['howitWorks']['title']; ?></h2>
        <div class="bs-grid grid-middle grid-inner">
          <div class="text-progress">
            <p><?php echo  @$homepageData['howitWorks']['title']; ?></p>
            <p><?php echo  @$homepageData['howitWorks']['title']; ?></p>
          </div>
        </div>
        <div class="boxes">
          <?php foreach (@$homepageData['howitWorks']['steps'] as $index => $step) : ?>
            <div class="<?php echo $index % 2 == 0 ? '' : 'b-middle stack'; ?>">
              <article class="box">
                <h3 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i>STEP <?php echo $index + 1; ?></h3>
                <h4 class="bs-60 upper"><?php echo $step['title']; ?></h4>
                <p>
                  <?php echo $step['description']; ?>
                </p>
              </article>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="hex-wrap bs-xl-7 bs-sm-18 bs-sm-os-3 xs-top-3 center">
          <svg class="shape-anim" viewBox="0 0 256 218" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-1529.000000, -989.000000)" fill="none" stroke-width="1" stroke="#EEEEF2">
              <g transform="translate(1529.555556, 989.920435)">
                <polyline vector-effect="non-scaling-stroke" points="0 0 0 34.9162585 31.8888889 54.0252776 63.7777778 34.9162585 95.7777778 54.0252776 95.7777778 88.9162585 127.5 108.5 159.555556 88.9162585"></polyline>
                <polyline vector-effect="non-scaling-stroke" points="95.7777778 88.9162585 63.7777778 108.025278 63.7777778 142.941536 32 162.025278"></polyline>
                <polyline vector-effect="non-scaling-stroke" points="63.8888889 142.945268 95.7777778 162.025278 127.5 142.945268 160 162.025278 159.555556 196.970546 127.666667 216.079565"></polyline>
                <polyline vector-effect="non-scaling-stroke" points="160 162.025278 191.444444 142.941536 223.555556 162.054287 254.777778 142.945268"></polyline>
              </g>
            </g>
          </svg>
        </div>
      </section>

      <!-- CLIENTS SECTION -->
      <section id="clients">
        <header class="grid-inner bs-grid xs-top-2 xs-wrap xs-reverse">
          <div class="bs-xl-6 bs-sm-8 bs-xs-22 clients-left">
            <div>
              <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i><?php echo @$homepageData['resourceDetailsData']['title'] ?></h2>
            </div>
            <p class="sm-top-1 split lines">
              <?php echo @$homepageData['resourceDetailsData']['description'] ?>
            </p>
          </div>
          <div class="bs-xl-8 bs-xl-os-3 bs-sm-os-2 bs-xs-22 bs-xs-os-0">
            <h3 class="bs-120 upper split chars"><?php echo @$homepageData['resourceDetailsData']['title'] ?><i class="dot view"></i></h3>
          </div>
        </header>
        <div class="client-wrap xl-top-2 xs-top-1">
          <div class="row xs-wrap">
            <div class="bs-xl-5 bs-xs-10">
              <div class="client-item" data-client="1">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][0]['imageLink'] ?>" alt="Ocean agency Logo" style="height: auto" />
              </div>
            </div>
            <div class="bs-xl-6 bs-xs-10">
              <div class="client-item bs-xl-os-1 bs-xs-os-0" data-client="2">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][1]['imageLink'] ?>" alt="Wework logo" style="height: auto" />
              </div>
            </div>
            <div class="bs-xl-6 bs-xs-10">
              <div class="client-item bs-xl-os-1 bs-xs-os-0" data-client="3">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][2]['imageLink'] ?>" alt="Selene Aviation Logo" style="height: auto" />
              </div>
            </div>
            <div class="bs-xl-6 bs-xs-10">
              <div class="client-item bs-xl-os-1 bs-xs-os-0" data-client="4">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][3]['imageLink'] ?>" alt="Hoboken Yogi Logo" style="height: auto" />
              </div>
            </div>
          </div>
          <div class="row xs-wrap">
            <div class="bs-xl-5 bs-xs-10">
              <div class="client-item" data-client="5">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][4]['imageLink'] ?>" alt="Modern MD Logo" style="width: 175px; height: auto" />
              </div>
            </div>
            <div class="bs-xl-6 bs-xs-10">
              <div class="client-item bs-xl-os-1 bs-xs-os-0" data-client="6">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][5]['imageLink'] ?>" alt="Sling Shot Intergalactic Logo" style="width: 185px; height: auto" />
              </div>
            </div>
            <div class="bs-xl-6 bs-xs-10">
              <div class="client-item bs-xl-os-1 bs-xs-os-0" data-client="7">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][6]['imageLink'] ?>" alt="Helias Oils Logo" style="width: 185px; height: auto" />
              </div>
            </div>
          </div>
          <div class="client-stat">
            <div class="stat-bg"></div>
            <div class="stat-inner">
              <span class="stat-icon"><img src="images/heart-icon.svg" alt="Heart Icon" /></span>
              <!-- <div class="stat-data" data-stat="1">
                <p class="upper bs-30"><i class="decrease"></i>34<i>%</i></p>
                <span class="bs-tech">bounce<br />
                  rate</span>
              </div>
              <div class="stat-data" data-stat="2">
                <p class="upper bs-30"><i class="increase"></i>20<i>k</i></p>
                <span class="bs-tech">Sign<br />
                  Ups</span>
              </div>
              <div class="stat-data" data-stat="3">
                <p class="upper bs-30"><i class="increase"></i>241<i>%</i></p>
                <span class="bs-tech">Traffic<br />
                  Increase</span>
              </div>
              <div class="stat-data" data-stat="4">
                <p class="upper bs-30"><i class="increase"></i>396<i>%</i></p>
                <span class="bs-tech">Bookings<br />
                  increase</span>
              </div>
              <div class="stat-data" data-stat="5">
                <p class="upper bs-30"><i class="increase"></i>433<i>%</i></p>
                <span class="bs-tech">Website<br />
                  users</span>
              </div>
              <div class="stat-data" data-stat="6">
                <p class="upper bs-30"><i class="increase"></i>300<i>%</i></p>
                <span class="bs-tech">Monthly<br />
                  inquiries</span>
              </div>
              <div class="stat-data" data-stat="7">
                <p class="upper bs-30"><i class="increase"></i>113<i>%</i></p>
                <span class="bs-tech">Sales <br />increase YOY</span>
              </div>
              <div class="stat-data" data-stat="8">
                <p class="upper bs-30"><i class="increase"></i>37<i>%</i></p>
                <span class="bs-tech">Conversion <br />rate</span>
              </div> -->
            </div>
          </div>
        </div>
      </section>

      <!-- AWARDS SECTION -->
      <section id="awards" class="grid-inner xs-top-4">
        <div class="awards-scroll">
          <span>a</span><span>w</span><span>a</span><span>r</span><span>d</span><span>s</span>
          <?php
          // Assuming $homepageData['award_data'] contains the array of award images
          $awardData = $homepageData['award_data'];
          ?>

          <div class="row xs-wrap">
            <?php
            $figureClasses = [
              "frame bs-xl-3 bs-xl-os-3",
              "frame bs-xl-3 bs-xl-os-12",
              "frame bs-xl-3 bs-xl-os-6",
              "frame bs-xl-3 bs-xl-os-10",
              "frame bs-xl-3 bs-xl-os-3",
              "frame bs-xl-3 bs-xl-os-11"
            ];
            $placeholderImages = [
              "images/awd-08-prel.webp",
              "images/awd-02-prel.webp",
              "images/awd-03-prel.webp",
              "images/awd-04-prel.webp",
              "images/awd-05-prel.webp",
              "images/awd-06-prel.webp"
            ];
            $index = 0;

            foreach ($awardData as $imageLink) {
              $figureClass = $figureClasses[$index % count($figureClasses)];
              $placeholderImage = $placeholderImages[$index % count($placeholderImages)];
              $altText = "Award image " . ($index + 1);
            ?>
              <figure class="<?= $figureClass ?>">
                <img class="lazy" src="<?= $placeholderImage ?>" data-src="<?= $baseUrl . $imageLink ?>" data-src-mobile="<?= $baseUrl . $imageLink ?>" data-src-big="<?= $baseUrl . $imageLink ?>" alt="<?= $altText ?>" />
              </figure>
            <?php
              $index++;
            }
            ?>
          </div>

        </div>

      </section>

      <!-- TESTIMONIAL SECTION -->
      <section id="testimonials" class="xl-top-4 draggable-container xs-top-4">
        <header class="grid-inner bs-grid grid-between xs-wrap">
          <div class="bs-xl-6 bs-xs-22">
            <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i><?= @$homepageData2['testimonials']['title'] ?></h2>
          </div>
          <div class="bs-xl-8 bs-xs-18 right xs-left xs-top-1">
            <h3 class="bs-120 upper split chars"><?= @$homepageData2['testimonials']['description'] ?><i class="dot view"></i></h3>
          </div>
        </header>
        <div class="testimonial-slider draggable xl-top-2 xs-top-1">
          <?php
          $testimonials = $homepageData2['testimonials']['list'];
          ?>

          <div class="slider-inner">
            <?php foreach ($testimonials as $testimonial) { ?>
              <div class="slide-item view">
                <article class="testimonial bs-xl-8 bs-xl-os-1 bs-xs-20">
                  <h3 class="section-title">
                    <i class="circle-tag"></i>
                    <i class="circle-tag"></i>
                    <?php echo $testimonial['name']; ?>,
                    <?php echo $testimonial['designation']; ?> /
                    <?php echo $testimonial['company_name']; ?>
                  </h3>
                  <p>
                    <img src="<?php echo $baseUrl . $testimonial['imageLink']; ?>" alt="<?php echo $testimonial['name']; ?>" />
                    <span><?php echo $testimonial['description']; ?></span>
                  </p>
                </article>
              </div>
            <?php } ?>
          </div>

          <div class="drag-progress">
            <i></i>
          </div>
        </div>
      </section>

      <!--footer-->
      <footer id="footer" class="xl-top-5 xs-top-3">
        <div class="bs-xl-22 bs-xl-os-1">
          <div class="bs-xl-10 bs-xl-os-9 bs-xs-22 bs-xs-os-0">
            <h3 class="contact-link bs-120 upper">
              <a href="../contact" class="mask-link" data-id="LET’S TALK" aria-label="LET’S TALK"><span>LET’S TALK</span><i class="dot work-dot"><svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z" fill="#C49E76"></path>
                  </svg></i></a>
            </h3>
          </div>
          <div class="line-anim">
            <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
              <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145" stroke="#EEEEF2" fill-rule="evenodd"></path>
            </svg>
            <div></div>
            <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
              <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145" stroke="#EEEEF2" fill-rule="evenodd"></path>
            </svg>
          </div>

          <div class="bs-grid xs-wrap">
            <div class="bs-xl-8 bs-xs-22">
              <h3 class="bs-120 upper">
                <a href="../studio"><span>
                    <img src="<?= $baseUrl . $settingData['websiteSettings']['footerContent']['footerLogo'] ?>" style="width: 200px;" />
                  </span></a>
              </h3>
              <address class="bs-xl-6 bs-xs-22 xl-top-1">
                <?php
                $contactAddress = $settingData['websiteSettings']['footerContent']['contactAddress'];
                $decodedAddress = html_entity_decode($contactAddress, ENT_QUOTES, 'UTF-8');
                ?>
                <div>
                  <?php echo $decodedAddress; ?>
                </div>
              </address>
            </div>

            <div class="bs-xl-13 bs-xl-os-1 bs-xs-22 bs-xs-os-0 xs-top-1">
              <div class="bs-grid grid-between grid-bottom xs-wrap">
                <div class="bs-xl-4 bs-xs-14">
                  <ul class="service-links">
                    <?php foreach (@$homepageData2['whatWeDo']['list'] as $item) : ?>
                      <li>
                        <a class="text-link" href="..<?php echo $item['url']; ?>"><span><?php echo $item['title']; ?></span></a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <div class="bs-xl-9 right bs-xs-12">
                  <h3 class="bs-120 upper">
                    <a href="../services" class="mask-link" data-id="Services" aria-label="Services">
                      <span>Services</span><i class="dot work-dot">
                        <svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z" fill="#C49E76"></path>
                        </svg>
                      </i>
                    </a>
                  </h3>
                </div>
              </div>
              <div class="line-anim">
                <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                  <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145" stroke="#EEEEF2" fill-rule="evenodd"></path>
                </svg>
                <div></div>
                <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                  <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145" stroke="#EEEEF2" fill-rule="evenodd"></path>
                </svg>
              </div>
              <h3 class="bs-120 upper">
                <a href="../work/" class="mask-link" data-id="work" aria-label="Work"><span>Work</span><i class="dot work-dot">
                    <svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z" fill="#C49E76"></path>
                    </svg></i>
                </a>
              </h3>
            </div>
          </div>

          <div class="bs-grid footer-bottom grid-bottom xs-top-1 sm-wrap">
            <div id="newsletter" class="bs-xl-8 bs-sm-22 sm-top-1">
              <h2 class="bs-tech">Newsletter</h2>
              <form action="">
                <input type="email" placeholder="Your Email" name="mail" required="" />
                <div class="email-underline"></div>
                <input id="nl-submit" type="submit" value="Subscribe" />
                <div class="arrow-link al-hover bs-tech">
                  <i>
                    <svg viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg" stroke-width="2">
                      <path vector-effect="non-scaling-stroke" class="nl-line" d="M0.852905 4.35493L8.81351 4.35352" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path vector-effect="non-scaling-stroke" class="nl-tip" fill-rule="evenodd" clip-rule="evenodd" d="M8.79297 1.37402L11.777 4.35801L8.79721 7.33776L8.79297 1.37402Z" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </i>
                </div>
              </form>
            </div>
            <div class="bs-xl-13 bs-xl-os-1 bs-sm-22 bs-sm-os-0 sm-top-1">
              <div class="bs-grid grid-between xs-wrap">
                <div class="bs-xl-5 bs-sm-8 bs-xs-22 xs-center">
                  <small class="bs-14"><?= $settingData['websiteSettings']['footerContent']['copyrightContent'] ?></small>
                </div>
                <div class="bs-xl-8 bs-sm-14 bs-xs-22 right xs-center xs-top-1">
                  <ul class="bs-14">
                    <li>
                      <a href="https://www.linkedin.com/company/buzzworthystudio/" target="_blank" class="text-link" aria-label="Linkedin">Linkedin</a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/buzzworthy.studio/" target="_blank" class="text-link" aria-label="Instagram">Instagram</a>
                    </li>
                    <li>
                      <a href="https://twitter.com/getbuzzworthy" target="_blank" class="text-link" aria-label="Twitter">Twitter</a>
                    </li>
                    <li>
                      <a href="https://www.behance.net/BuzzworthyStudio" target="_blank" class="text-link" aria-label="Behance">Behance</a>
                    </li>
                    <li>
                      <a href="https://dribbble.com/Buzzworthy/" target="_blank" class="text-link" aria-label="Dribbble">Dribbble</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

  <!-- scripts -->
  <!-- <script src="../dist/js/app.min.js"></script>
    <script src="../dist/js/gsap.min.js"></script>
    <script src="../dist/js/gsap-bundle.min.js"></script> -->
  <script src="js/app.min.min.js"></script>
  <script src="js/three.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/shaderUtils.js"></script>
  <script src="js/bubble-shaders.js"></script>
  <script src="js/honey-ball-shaders.js"></script>
  <script src="js/bubbles-fbo.js"></script>
  <script src="js/cam-parallax.js"></script>
  <script src="js/honey-ball.js"></script>
  <script src="js/main-three-scene.js"></script>
  <script src="js/main.js"></script>
</body>

</html>