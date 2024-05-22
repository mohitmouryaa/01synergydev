<?php
include('./Api/settingsApi.php');
include('./Api/allworkApi.php');
include('./common/constant.php');


$photoIndex = null;
foreach (@$allworkpageData['list'] as $key => $item) {
    if ($item['pageUrl'] === $url) {
        $photoIndex = $key;
        break;
    }
}

$work = @$allworkpageData['list'][$photoIndex];

$nextWork = null;
if ($photoIndex !== null && $photoIndex < count($allworkpageData['list']) - 1) {
    $nextWork = $allworkpageData['list'][$photoIndex + 1];
}

?>


<?php
if ($photoIndex === null) {

    include('./404.php');
} else { ?>
    <!DOCTYPE html>

    <html lang="en" class="no-js">

    <head>
        <title><?= @$settingData['websiteSettings']['metaTitle'] ?></title>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="robots" content="all" />
        <link rel="stylesheet" href="<?= $clientUrl ?>/css/normalize.css" />
        <link rel="stylesheet" href="<?= $clientUrl ?>/css/cost.css" />
        <link rel="stylesheet" href="<?= $clientUrl ?>/css/styles.css" />
        <link rel="stylesheet" href="<?= $clientUrl ?>/css/plans.css" />

        <style type="text/css">
            body,
            #hero {
                min-height: 100vh;
            }
        </style>
    </head>

    <body class="loading">
        <section id="webglBubble"></section>

        <?php include('./common/menuIcon.php') ?>
        <?php include('./common/logo.php') ?>


        <!-- MENU -->
        <?php include('./common/menu.php') ?>


        <!-- AJAX CONTENT HOLDER -->
        <main id="smooth-wrapper">


            <div id="split-cursor">
                <span><i></i><i></i></span>
            </div>

            <!-- SMOOTH SCROLLING CONTENT -->
            <div class="content work-detail webglActive" data-work="default<?= $photoIndex ?>">

                <div id="breadcrumb">
                    <span class="bs-tech hero-in"><a href="../" class="text-link">01Synergy</a></span>
                    <span class="bs-tech hero-in"><a href="/our-work" class="text-link">Work</a></span>
                    <span class="bs-tech active hero-in"><?= @$work['title'] ?></span>
                </div>

                <!-- HERO SECTION -->
                <section id="hero" class="grid-inner">
                    <h1 class="bs-240 upper center hero-split chars"><?= @$work['title'] ?></h1>
                    <span class="date bs-14 bs-tech upper hero-in"></span>
                    <span class="scroll-to bs-14 bs-tech upper hero-in" data-scroll="workIntro">scroll for details</span>
                </section>

                <!-- LISTING -->
                <section id="workIntro" class="grid-inner xl-top-1">
                    <div class="line-anim">
                        <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                            <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145" stroke="#EEEEF2" fill-rule="evenodd"></path>
                        </svg>
                        <div></div>
                        <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                            <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145" stroke="#EEEEF2" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="bs-grid xl-top-3 xs-top-2 xl-bottom-3 xs-bottom-2 sm-wrap">
                        <aside class="bs-xl-4 bs-sm-6 bs-xs-20">
                            <h3 class="bs-tech upper bs-12 xl-bottom-1">Technologies</h3>
                            <ul class="split lines">
                                <?php foreach (@$work['technologies'] as $key => $value) {
                                    echo "<li>" . $value . "</li>";
                                } ?>
                            </ul>
                        </aside>
                        <div class="bs-xl-12 bs-xl-os-2 bs-sm-11 bs-sm-os-1 bs-xs-20 bs-xs-os-0 xs-top-2">
                            <div>
                                <h3 class="bs-tech upper bs-12 xl-bottom-1">The Project</h3>
                                <p class="split lines bs-40">
                                    <?= @$work['description'] ?>
                                </p>
                            </div>
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
                </section>


                <?php if (@$nextWork !== null) { ?>
                    <!-- RECENT WORK -->
                    <section class="xl-top-3 xs-top-3 work-listing next-project" id="work">
                        <div class="grid-inner">
                            <div class="bs-grid xs-wrap">
                                <div class="bs-xl-7 bs-xs-22">
                                    <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i>NEXT PROJECT</h2>
                                    <h3 class="bs-120 upper xl-top-1 xs-top-0"><a href="<?= @$nextWork['pageUrl'] ?>" class="text-link split chars"><?= @$nextWork['title'] ?></a></h3>
                                </div>
                                <article class="bs-xl-9 bs-xl-os-2 bs-xs-22 bs-xs-os-0">
                                    <a href="<?= @$nextWork['pageUrl'] ?>">
                                        <figure class="nextP">
                                            <i class="work-lottie">
                                                <svg viewBox="0 0 660 660" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <mask id="imgMask1">
                                                        <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H659.5C659.776 0 660 0.223858 660 0.5V0.5C660 0.776142 659.829 1 659.553 1C653.058 1 577.308 1 528 1C476.451 1 447.549 1 396 1C344.451 1 315.549 1 264 1C212.451 1 183.549 1 132 1C82.6923 1 6.94176 1 0.447341 1C0.171199 1 0 0.776142 0 0.5V0.5Z" fill="black"></path>
                                                    </mask>
                                                    <image width="100%" height="100%" mask="url(#imgMask1)" href="<?= $baseUrl . @$nextWork['media']['url'] ?>"></image>
                                                </svg>
                                            </i>
                                        </figure>
                                    </a>
                                </article>
                            </div>
                        </div>
                    </section>
                <?php } ?>


                <!--footer-->
                <?php include('./common/footer.php') ?>

            </div>
        </main>


        <?php include('./common/scripts.php') ?>


    </body>

    </html>
<?php } ?>