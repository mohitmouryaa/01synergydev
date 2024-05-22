<?php
include('./Api/allworkApi.php');
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

<body class="loading">

    <?php include('./common/menuIcon.php'); ?>

    <!-- logo -->
    <?php include './common/logo.php'; ?>

    <!-- MENU -->
    <?php include './common/menu.php'; ?>


    <!-- AJAX CONTENT HOLDER -->
    <main id="smooth-wrapper">

        <!-- SMOOTH SCROLLING CONTENT -->
        <div class="content work webglActive" data-work="default">
            <div id="breadcrumb">
                <span class="bs-tech hero-in"><a href="/" class="text-link">01Synergy</a></span>
                <span class="bs-tech active hero-in"><?= @$allworkpageData['title']; ?></span>
            </div>


            <!-- SLIDER  -->
            <section class="work-slider grid-inner">
                <div class="swipe-info bs-tech" data-layout="1">Swipe to change</div>
                <div id="work-switch">
                    <div class="icon">
                        <div>
                            <i></i><i></i><i></i><i></i><i></i>
                        </div>
                        <div class="close-icon">
                            <i></i><i></i>
                        </div>
                    </div>
                    <span class="bs-14 bs-tech upper open-thumbs">All projects</span>
                    <span class="bs-14 bs-tech upper close-thumbs">Close</span>
                </div>

                <!-- LAYOUT A -->
                <div class="project-link" data-layout="1">
                    <a href="#" class="circle-link view" aria-label="View our latest award">
                        <div class="circle-icon"><span></span></div>
                    </a>
                </div>
                <div id="slide-count" data-layout="1">
                    <ul class="bs-12 bs-tech">
                        <li id="slide-prev">00<?= count(@$allworkpageData['list']); ?></li>
                        <li id="slide-cur">001</li>
                        <li id="slide-next">002</li>
                    </ul>
                    <span class="bs-12 bs-tech">&nbsp;&nbsp; / &nbsp; 00<?= count(@$allworkpageData['list']); ?></span>
                </div>
                <div class="slider-inner" data-layout="1">
                    <div class="work-service bs-tech bs-xl-5 bs-xl-os-13 bs-xs-os-0">
                        <div>
                            <ul id="prevService" class="upper">
                            </ul>
                            <ul id="curService" class="upper">
                            </ul>
                            <ul id="nextService" class="upper">
                            </ul>
                        </div>
                    </div>
                    <div class="work-slide bs-grid grid-middle xs-wrap">
                        <div class="bs-xl-9">
                            <figure>
                                <?php
                                for ($i = count(@$allworkpageData['list']) - 1; $i >= 0; $i--) {
                                    $item = @$allworkpageData['list'][$i];
                                    echo '<img data-page="' . htmlspecialchars($i) . '" src="' . $baseUrl.htmlspecialchars($item['media']['url']) . '" alt="' . htmlspecialchars($item['title']) . '">';
                                }
                                ?>
                            </figure>
                        </div>
                        <div id="work-titles" class="bs-xl-8 bs-xl-os-4 bs-xs-22 bs-xs-os-0 bs-50 upper">
                            <ul class="xs-center">
                                <li>
                                    <h2 id="prevTitle">
                                        <a href="#" class="circle-link">

                                        </a>
                                    </h2>
                                </li>
                                <li>
                                    <h2 id="curTitle">
                                        <a href="<?= $allworkpageData['list'][0]['pageUrl'] ?>" class="circle-link" style="font-size: 30px;">
                                            <div class="circle-icon">
                                                <i></i>
                                                <span><img src="images/arrow-hex.svg"><img src="images/arrow-hex.svg"></span>
                                            </div>
                                           <?= @$allworkpageData['list'][0]['title'] ?>
                                        </a>
                                    </h2>
                                </li>
                                <li>
                                    <h2 id="nextTitle">
                                        <a href="<?= @$allworkpageData['list'][1]['pageUrl'] ?>" class="circle-link" style="font-size: 30px;">
                                            <div class="circle-icon">
                                                <i></i>
                                                <span><img src="images/arrow-hex.svg" alt="arrow icon with hexagon tip"><img src="images/arrow-hex.svg" alt="arrow icon with hexagon tip"></span>
                                            </div>
                                            <?= @$allworkpageData['list'][1]['title'] ?>
                                        </a>
                                    </h2>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- LAYOUT 2 -->
                <div class="layout-b scaled" data-layout="2">
                    <div class="bs-grid grid-around">
                        <?php foreach(@$allworkpageData['list'] as $key => $work){ ?>
                        <article data-thumb="<?= $key ?>">
                            <a href="<?= $work['pageUrl'] ?>">
                                <figure>
                                    <img class="lazy selected" src="<?= $baseUrl.$work['media']['url']?>" data-src="<?= $baseUrl.$work['media']['url']?>" data-src-big="<?= $baseUrl.$work['media']['url']?>" alt="">
                                </figure>
                                <h2 class="bs-30 upper"><?= $work['title'] ?></h2>
                            </a>
                        </article>
                        <?php } ?>
                    </div>
                </div>
                <div class="blur-circle"></div>
            </section>
        </div>
    </main>


    <!-- scripts -->
   <?php include('./common/scripts.php') ?>




</body>

</html>