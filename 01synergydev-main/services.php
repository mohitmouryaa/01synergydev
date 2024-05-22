<?php
include('./Api/allServicesApi.php');
include('./Api/settingsApi.php');
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

<body class="loading root">
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
        <div class="content services" data-work="root">
            <div id="breadcrumb">
                <span class="bs-tech hero-in"><a href="/" class="text-link">01Synergy</a></span>
                <span class="bs-tech active hero-in"><?= $servicesData['title'] ?></span>
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
                    <h1 class="hero-split chars">
                        <div class="bs-160 title-switch red">
                            <!-- <span class="first" data-ch="0">Results-driven</span>
                            <span data-ch="1">Compelling</span>
                            <span data-ch="2">Goal-oriented</span>
                            <span data-ch="3">Functional</span>
                            <span data-ch="4">Performant</span> -->
                        </div>
                        <div class="bs-160 xs-center">
                            <div class="button-switch hero-in"><i></i><i></i><i></i><i></i><img src="images/coding.png" alt="Refresh icon"></div>development
                        </div>
                        <div class="bs-160 bs-xl-os-5 right bs-xs-os-0 xs-center offset">that help your</div>
                        <div class="bs-160 bs-xl-os-7 bs-xs-os-0 right xs-center">business</div>
                    </h1>
                </div>
                <div class="scroll-to" data-scroll="service-block">
                    <div class="bs-tech">(&nbsp;&nbsp;&nbsp;SCROLL&nbsp;&nbsp;&nbsp;)</div>
                </div>
            </section>


            <!-- PROJECT LIFECYCLE -->
            <section id="service-block" class="service-block bs-grid grid-inner xl-top-2 xs-top-0 xs-wrap">
                <div class="bs-xl-5 bs-xl-os-0 bs-sm-4 bs-sm-os-0 bs-xs-16 bs-xs-os-3 xs-bottom-1 xs-center">
                    <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i>What we do</h2>
                    <p class="xl-top-1 split lines"><?= @$servicesData['description'] ?></p>
                </div>
                <div class="bs-xl-12 bs-xl-os-3 bs-sm-8 bs-sm-os-0 bs-xs-22 bs-xs-os-0 xs-top-1">
                    <ul class="service-list bs-30">
                        <?php foreach (@$servicesData['list'] as $key => $service) { ?>
                            <li class="split lines"><a href="<?= $service['url'] ?>"><span><?= $service['title'] ?></span></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </section>

            <!-- PROJECT LIFECYCLE -->
            <section class="lifecycle grid-inner xl-top-5 xs-top-2">
                <div class="bs-grid xs-wrap">
                    <div class="bs-xl-7 bs-sm-4 bs-xs-22">
                        <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i>Workflow</h2>
                    </div>
                    <div class="bs-xl-9 bs-xs-22 xs-top-1">
                        <h3 class="bs-120 upper split chars">Our Pathway To Success<i class="dot view"></i></h3>
                    </div>
                </div>
                <div class="flying-panes xl-top-2 xs-top-1 bs-xs-22">
                    <article class="fp-item active">
                        <div class="inner">
                            <div>
                                <p class="section-title bs-tech upper white"><i class="circle-tag"></i><i class="circle-tag"></i>01</p>
                            </div>
                            <div class="self-end">
                                <h3 class="bs-80 upper"><?= $servicesData['workflow']['steps'][0]['title']; ?></h3>
                                <p><?= $servicesData['workflow']['steps'][0]['description']; ?></p>
                            </div>
                        </div>
                    </article>
                    <?php foreach (@$servicesData['workflow']['steps'] as $key => $flow) {
                        if ($key > 0) {
                            echo '
                        <article class="fp-item stack">
                        <div class="inner">
                            <div>
                                <p class="section-title bs-tech upper white"><i class="circle-tag"></i><i class="circle-tag"></i>' . ($key + 1) . '</p>
                            </div>
                            <div class="self-end">
                                <h3 class="bs-80 upper">'.@$flow['title'].'</h3>
                                <p>'.@$flow['description'].'</p>
                            </div>
                        </div>
                    </article>
                    ';
                        }
                    } ?>
                </div>
            </section>

            <!-- OUR GOAL -->
            <section class="goal xl-top-4 xs-top-4">
                <div class="bs-xl-14 bs-xl-os-5 bs-xs-22 bs-xs-os-1 center">
                    <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i></h2>
                    <h3 class="bs-120 xl-top-1 split chars">Driving Success, Delivering Results<i class="dot view"></i></h3>
                    <div class="bs-xl-2 bs-xl-os-6 bs-xs-4 bs-xs-os-9">
                        <div class="line-anim">
                            <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                                <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145" stroke="#EEEEF2" fill-rule="evenodd"></path>
                            </svg>
                            <div></div>
                            <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                                <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145" stroke="#EEEEF2" fill-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="bs-xl-5 bs-sm-10 bs-xs-20 centered xl-top-1">
                        <p class="view">We deeply understand the significance of your business, and that's why it’s our primary goal to enhance it. These aren't just words; we have a solid track record of delivering outstanding results.</p>
                    </div>
                </div>

            </section>

            <!--footer-->
            <?php include('./common/footer.php') ?>

        </div>
    </main>


    <!-- scripts -->
    <?php include('./common/scripts.php') ?>




</body>

</html>