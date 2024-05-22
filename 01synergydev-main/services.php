<?php
include('./Api/allServicesApi.php');
include('./Api/settingsApi.php');
?>


<!DOCTYPE html><html lang="en" class="no-js">
<head>
  <title><?= @$settingData['websiteSettings']['metaTitle'] ?></title>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="robots" content="all" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/cost.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/plans.css" />

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
                <span class="bs-tech active hero-in">Services</span>
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
                            <span class="first" data-ch="0">Creative</span>
                            <span data-ch="1">Results-driven</span>
                            <span data-ch="2">Compelling</span>
                            <span data-ch="3">Goal-oriented</span>
                            <span data-ch="4">Functional</span>
                            <span data-ch="5">Performant</span>
                        </div>
                        <div class="bs-160 xs-center"><div class="button-switch hero-in"><i></i><i></i><i></i><i></i><img src="images/refresh.svg" alt="Refresh icon"></div>websites</div>
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
                    <p class="xl-top-1 split lines">At 01Synergy, we excel in constructing website ecosystems that seamlessly weave brand narratives, enhance conversions, and cultivate trust.</p>
                </div>
                <div class="bs-xl-12 bs-xl-os-3 bs-sm-8 bs-sm-os-0 bs-xs-22 bs-xs-os-0 xs-top-1">
                    <ul class="service-list bs-30">
                        <li class="split lines"><a href="../services/website-design"><span>Website design </span></a></li>
                        <li class="split lines"><a href="../services/motion-design"><span>Motion Design</span></a></li>
                        <li class="split lines"><a href="../services/front-end-development"><span>Front-end development</span></a></li>
                        <li class="split lines"><a href="../services/back-end-development"><span>Back-end development</span></a></li>
                        <li class="split lines"><a href="../services/shopify-development"><span>Shopify development</span></a></li>
                        <li class="split lines"><a href="../services/website-support"><span>Website Support</span></a></li>
                        <li class="split lines"><a href="../services/paid-search-advertising"><span>Paid Search Advertising</span></a></li>
                        <li class="split lines"><a href="../services/social-media-advertising"><span>Social Media Advertising</span></a></li>
                        <li class="split lines"><a href="../services/email-marketing"><span>Email Marketing</span></a></li>
                        <li class="split lines"><a href="../services/seo"><span>SEO</span></a></li>
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
                                <h3 class="bs-80 upper">PROJECT<br> STRATEGY</h3>
                                <p>Every project is a canvas where we blend creative vision with strategic foresight. From the initial spark of an idea to the final flourish of execution, our seasoned strategists work hand-in-hand with your team to define goals, streamline processes, and chart a course to success</p>
                            </div>
                        </div>
                    </article>
                    <article class="fp-item stack">
                        <div class="inner">
                            <div>
                                <p class="section-title bs-tech upper white"><i class="circle-tag"></i><i class="circle-tag"></i>02</p>
                            </div>
                            <div class="self-end">
                                <h3 class="bs-80 upper">DESIGN<br> &amp; MOTION</h3>
                                <p>Our  team is a collective of artists, visionaries, and technophiles, all dedicated to creating immersive experiences that transcend boundaries. We blend cutting-edge technology with artistic finesse to create visuals that not only captivate but also communicate messages with impact</p>
                            </div>
                        </div>
                    </article>
                    <article class="fp-item stack">
                        <div class="inner">
                            <div>
                                <p class="section-title bs-tech upper white"><i class="circle-tag"></i><i class="circle-tag"></i>03</p>
                            </div>
                            <div class="self-end">
                                <h3 class="bs-80 upper">SMOOTH<br> DEVELOPMENT</h3>
                                <p>We take pride in our meticulous approach, ensuring every element of your website functions seamlessly. From responsive design that adapts to any device, to smooth navigation that guides users effortlessly, we ensure your visitors are engaged from the very first click.</p>
                            </div>
                        </div>
                    </article>
                    <article class="fp-item stack">
                        <div class="inner">
                            <div>
                                <p class="section-title bs-tech upper white"><i class="circle-tag"></i><i class="circle-tag"></i>04</p>
                            </div>
                            <div class="self-end">
                                <h3 class="bs-80 upper">POWERFUL<br> MARKETING</h3>
                                <p>We're not just marketers; we're storytellers, data analysts, and strategists who thrive on creating connections that drive results. With our arsenal of tools, insights, and creativity, we build campaigns that resonate with your audience and make an impact that lasts.</p>
                            </div>
                        </div>
                    </article>
                    <article class="fp-item stack">
                        <div class="inner">
                            <div>
                                <p class="section-title bs-tech upper white"><i class="circle-tag"></i><i class="circle-tag"></i>05</p>
                            </div>
                            <div class="self-end">
                                <h3 class="bs-80 upper">ONGOING<br> SUPPORT</h3>
                                <p>In the ever-evolving digital landscape, your website isn't a static entity; it's a living, breathing representation of your brand. At 01Synergy, we understand that consistent, reliable support is essential to ensure your online presence remains dynamic and impactful.</p>
                            </div>
                        </div>
                    </article>
                    <article class="fp-item stack">
                        <div class="inner">
                            <div>
                                <p class="section-title bs-tech upper white"><i class="circle-tag"></i><i class="circle-tag"></i>06</p>
                            </div>
                            <div class="self-end">
                                <h3 class="bs-80 upper">FUTURE<br> EVOLUTION</h3>
                                <p>From immersive user experiences to AI-driven personalization, we're your digital architects for the future. Embracing change is key, and we're here to guide you. With 01Synergy, it's not just a website; it's an evolution that keeps your brand relevant and remarkable.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- OUR GOAL -->
            <section class="goal xl-top-4 xs-top-4">
                <div class="bs-xl-14 bs-xl-os-5 bs-xs-22 bs-xs-os-1 center">
                    <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i>Results Driven</h2>
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




</body></html>