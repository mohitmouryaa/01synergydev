<?php
include('./Api/settingsApi.php');
include('./Api/allServicesApi.php');
include('./common/constant.php');
include('./Api/singleServiceApi.php');
include('./common/helper.php');

?>

<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <title><?= @$settingData['websiteSettings']['metaTitle'] ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="robots" content="all" />
    <link rel="stylesheet" href="<?= @$clientUrl ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?= @$clientUrl ?>/css/cost.css" />
    <link rel="stylesheet" href="<?= @$clientUrl ?>/css/styles.css" />
    <link rel="stylesheet" href="<?= @$clientUrl ?>/css/plans.css" />
    <style type="text/css">
        body,
        #hero {
            min-height: 100vh;
        }
    </style>
</head>

<body class="loading">
    <?php include('./common/webgl.php') ?>


    <?php include('./common/menuIcon.php') ?>

    <?php include('./common/logo.php') ?>


    <!-- MENU -->
    <?php include('./common/menu.php') ?>

    <!-- AJAX CONTENT HOLDER -->
    <main id="smooth-wrapper">

        <!-- PATTERN BG -->
        <?php include('./common/scrollpattern.php') ?>


        <div id="drag-ico"></div>

        <!-- SMOOTH SCROLLING CONTENT -->
        <div class="content service-detail" data-work="root">
            <div id="breadcrumb">
                <span class="bs-tech hero-in"><a href="../" class="text-link">01Synergy</a></span>
                <span class="bs-tech hero-in"><a href="/services" class="text-link">Services</a></span>
                <span class="bs-tech active hero-in"><?= @$singleServiceData['title'] ?></span>
            </div>

            <!-- HERO SECTION -->
            <section id="hero" class="grid-inner">
                <svg class="hero-hex" viewBox="0 0 256 218" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g transform="translate(-1529.000000, -989.000000)" fill="none" stroke-width="1" stroke="#EEEEF2">
                        <g transform="translate(1529.555556, 989.920435)">
                            <polyline vector-effect="non-scaling-stroke" points="0 0 0 34.9162585 31.8888889 54.0252776 63.7777778 34.9162585 95.7777778 54.0252776 95.7777778 88.9162585 127.5 108.5 159.555556 88.9162585">
                            </polyline>
                            <polyline vector-effect="non-scaling-stroke" points="95.7777778 88.9162585 63.7777778 108.025278 63.7777778 142.941536 32 162.025278">
                            </polyline>
                            <polyline vector-effect="non-scaling-stroke" points="63.8888889 142.945268 95.7777778 162.025278 127.5 142.945268 160 162.025278 159.555556 196.970546 127.666667 216.079565">
                            </polyline>
                            <polyline vector-effect="non-scaling-stroke" points="160 162.025278 191.444444 142.941536 223.555556 162.054287 254.777778 142.945268">
                            </polyline>
                        </g>
                    </g>
                </svg>
                <div>
                    <h1>
                        <?php $words = breakSentenceToWords(@$singleServiceData['title']); ?>
                        <div class="hero-split chars bs-180 upper red"><?= @$words[0] ?> <?= @$words[1] ?></div>
                        <div class="hero-split chars bs-180 upper"><?= @$words[2] ?></div>
                    </h1>
                    <div class="bs-grid xs-wrap service-hero">
                        <div class="bs-xl-5 bs-xs-22">
                            <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i>The Service</h2>
                        </div>
                        <div class="bs-xl-12 bs-xl-os-1 bs-xs-22 bs-xs-os-0 xs-top-1 bs-grid xs-wrap">
                            <p class="bs-xl-5 bs-xs-16 upper bs-14 hero-in-text"><?= @$singleServiceData['serviceDescriptionLeft'] ?></p>
                            <p class="bs-xl-5 bs-xl-os-2 bs-xs-22 bs-xs-os-0 xs-top-1 hero-in-text"><?= @$singleServiceData['serviceDescriptionRight'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="scroll-to" data-scroll="service-desc">
                    <div class="bs-tech">(&nbsp;&nbsp;&nbsp;SCROLL&nbsp;&nbsp;&nbsp;)</div>
                </div>
            </section>

            <!-- Service Description -->
            <section id="service-desc" class="side-scroll-wrap service-desc grid-inner xs-top-3">
                <div class="side-scroll xl-top-3">
                    <?php foreach (@$singleServiceData['steps'] as $key => $step) { ?>
                        <article class="side-scroll-item">
                            <div class="inner">
                                <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i><?= $key + 1 ?></h2>
                                <h3 class="bs-60 upper"><?= $step['title'] ?></h3>
                                <p><?= $step['description'] ?></p>
                            </div>
                        </article>
                    <?php } ?>

                </div>
            </section>

            <!-- RECENT WORK -->
            <section class="xl-top-4 xs-top-3 work-listing" id="work">

                <div class="grid-inner">
                    <div class="bs-grid xs-wrap xl-top-1 xs-top-0">
                        <div class="bs-xl-7 bs-xs-22 ">
                            <h3 class="bs-120 upper split chars bs-xl-6 bs-xs-14">Latest projects<i class="dot view"></i></h3>
                            <article class="xl-top-2 xs-top-1">
                                <a href="<?= $clientUrl.@$singleServiceData['latestWork'][0]['url'] ?>">
                                    <figure>
                                        <i class="work-lottie">
                                            <svg viewBox="0 0 660 660" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <mask id="imgMask1">
                                                    <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H659.5C659.776 0 660 0.223858 660 0.5V0.5C660 0.776142 659.829 1 659.553 1C653.058 1 577.308 1 528 1C476.451 1 447.549 1 396 1C344.451 1 315.549 1 264 1C212.451 1 183.549 1 132 1C82.6923 1 6.94176 1 0.447341 1C0.171199 1 0 0.776142 0 0.5V0.5Z" fill="black"></path>
                                                </mask>
                                                <image width="100%" height="100%" mask="url(#imgMask1)" href="<?= $baseUrl.@$singleServiceData['latestWork'][0]['imageLink'] ?>"></image>
                                            </svg>
                                        </i>
                                    </figure>
                                    <h2 class="thumb-title FontBody upper bs-20"><?= @$singleServiceData['latestWork'][0]['title'] ?></h2>
                                </a>
                            </article>
                        </div>
                        <article class="bs-xl-9 bs-xl-os-2 bs-xs-22 bs-xs-os-0 xs-top-1">
                            <a href="<?= $clientUrl.@$singleServiceData['latestWork'][1]['url'] ?>">
                                <figure>
                                    <i class="work-lottie">
                                        <svg viewBox="0 0 660 660" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="imgMask2">
                                                <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H659.5C659.776 0 660 0.223858 660 0.5V0.5C660 0.776142 659.829 1 659.553 1C653.058 1 577.308 1 528 1C476.451 1 447.549 1 396 1C344.451 1 315.549 1 264 1C212.451 1 183.549 1 132 1C82.6923 1 6.94176 1 0.447341 1C0.171199 1 0 0.776142 0 0.5V0.5Z" fill="black"></path>
                                            </mask>
                                            <image width="100%" height="100%" mask="url(#imgMask2)" href="<?= $baseUrl.@$singleServiceData['latestWork'][1]['imageLink'] ?>"></image>
                                        </svg>
                                    </i>
                                </figure>
                                <h2 class="thumb-title FontBody upper bs-20"><?= @$singleServiceData['latestWork'][1]['title'] ?></h2>
                            </a>
                        </article>
                    </div>
                    <div class="bs-xl-7 bs-xl-os-9 bs-xs-22 bs-xs-os-0 view xl-bottom-2 xs-top-2">
                        <a href="/our-work" class="arrow-link al-hover bs-tech"><i><img src="<?= $clientUrl ?>/images/arrow-link.svg" alt="line arrow icon"></i>View all work</a>
                    </div>
                </div>
            </section>

            <!-- OTHER SERVICES -->
            <section class="all-services grid-inner bs-grid xl-top-5 xs-top-4 xs-wrap">
                <div class="bs-xl-7 bs-xs-22 bs-xs-os-0">
                    <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i>OTHER SERVICES</h2>
                </div>
                <div class="bs-xl-11 bs-xs-22 xs-top-1">
                    <ul class="service-list bs-30">
                        <?php foreach (@$servicesData['list'] as $key => $service) { ?>
                            <li class="split lines <?= $service['url'] === $url ? 'selected' : '' ?>"><a href="<?= $service['url'] ?>"><span><?= $service['title'] ?></span></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </section>

            <?php include './common/footer.php'; ?>

        </div>
    </main>


    <?php include './common/scripts.php'; ?>

</body>

</html>