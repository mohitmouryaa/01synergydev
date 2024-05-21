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
    <section id="webglBubble"></section>

    <div id="hamburger">
        <svg width="30" height="61" viewBox="0 0 30 61" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1490_325)">
                <path class="lineA" d="M5.07849 11V60" stroke="#EEEEF2" stroke-width="2"></path>
                <path class="lineB" d="M15.0785 16V45" stroke="#EEEEF2" stroke-width="2"></path>
                <path class="lineC" d="M25.0784 1V50" stroke="#EEEEF2" stroke-width="2"></path>
                <path class="pointA" fill-rule="evenodd" clip-rule="evenodd" d="M5.07843 11L9 8.4482L9 3.61273L5.07843 1L1.07843 3.61273L1 8.4482L5.07843 11Z" stroke="#EEEEF2" stroke-width="2"></path>
                <path class="pointB" fill-rule="evenodd" clip-rule="evenodd" d="M25.0784 60L29 57.4482V52.6127L25.0784 50L21.0784 52.6127L21 57.4482L25.0784 60Z" stroke="#EEEEF2" stroke-width="2"></path>
            </g>
        </svg>
    </div>
    <a href="../" id="logo" class="nav-link" aria-label="Get back to the home page">
        <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M30 60.0371C46.5652 60.0371 60 46.6117 60 30.0371C60 13.4625 46.5652 0.0371094 30 0.0371094C13.4348 0.0371094 0 13.4625 0 30.0371C0 46.6117 13.4348 60.0371 30 60.0371ZM15.1902 35.6029L19.4911 9.18965L25.8292 16.5129C27.3329 18.0928 29.548 19.3106 32.7009 19.36H35.7406C35.9831 19.3435 36.2256 19.3435 36.4519 19.3435H36.452C45.1507 19.3435 48.2713 23.6717 46.5413 34.3357C45.1346 43.0085 39.5887 48.6038 32.0541 48.8507H30.8253H25.6998C16.322 48.8507 14.3009 42.5641 15.1902 35.6029ZM36.8655 34.1049C36.2242 38.0439 33.6587 40.7151 30.4013 40.7151C27.2452 40.7151 25.4899 38.027 26.1312 34.1049C26.7726 30.1658 29.3886 27.4947 32.5448 27.4947C35.8191 27.4947 37.5069 30.1658 36.8655 34.1049Z" fill="#fff"></path>
        </svg>
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
                <a href="https://dribbble.com/01Synergy/" target="_blank" class="text-link" aria-label="Dribbble">Dribbble</a>
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
        <a href="../contact" id="fixed-cta" title="Contact us" class="nav-link">
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
                <img class="lazy" src="images/pattern-top-prel.png" data-src="../img/pattern-top.webp" data-src-big="../img/pattern-top.webp" alt="Hexagon line pattern png image">
            </div>
            <div class="patternBottom">
                <img class="lazy" src="images/pattern-bottom-prel.png" data-src="../img/pattern-bottom.webp" data-src-big="../img/pattern-bottom.webp" alt="Hexagon line pattern png image">
            </div>
        </div>

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
            <footer id="footer" class="xl-top-5 xs-top-3">
                <div class="bs-xl-22 bs-xl-os-1">
                    <div class="bs-xl-10 bs-xl-os-9 bs-xs-22 bs-xs-os-0">
                        <h3 class="contact-link bs-120 upper"><a href="../contact" class="mask-link" data-id="LET’S TALK" aria-label="LET’S TALK"><span>LET’S TALK</span><i class="dot work-dot"><svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <h3 class="bs-120 upper"><a href="../studio" class="mask-link" data-id="Studio" aria-label="Studio"><span>Studio</span><i class="dot work-dot"><svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z" fill="#C49E76"></path>
                                        </svg></i></a>
                            </h3>
                            <address class="bs-xl-6 bs-xs-22 xl-top-1">
                                81 Prospect St, Suite 9069,<br>
                                Brooklyn, NY 11201<br>
                            </address>
                        </div>

                        <div class="bs-xl-13 bs-xl-os-1 bs-xs-22 bs-xs-os-0 xs-top-1">
                            <div class="bs-grid grid-between grid-bottom xs-wrap">
                                <div class="bs-xl-4 bs-xs-14">
                                    <ul class="service-links">
                                        <li><a class="text-link" href="../services/website-design"><span>Website design </span></a></li>
                                        <li><a class="text-link" href="../services/motion-design"><span>Motion Design</span></a></li>
                                        <li><a class="text-link" href="../services/front-end-development"><span>Front-end development</span></a></li>
                                        <li><a class="text-link" href="../services/back-end-development"><span>Back-end development</span></a></li>
                                        <li><a class="text-link" href="../services/shopify-development"><span>Shopify development</span></a></li>
                                        <li><a class="text-link" href="../services/website-support"><span>Website Support</span></a></li>
                                        <li><a class="text-link" href="../services/paid-search-advertising"><span>Paid Search Advertising</span></a></li>
                                        <li><a class="text-link" href="../services/social-media-advertising"><span>Social Media Advertising</span></a></li>
                                        <li><a class="text-link" href="../services/email-marketing"><span>Email Marketing</span></a></li>
                                        <li><a class="text-link" href="../services/seo"><span>SEO</span></a></li>
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
                            <h3 class="bs-120 upper"><a href="../work/" class="mask-link" data-id="work" aria-label="Work"><span>Work</span><i class="dot work-dot">
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
                                <input type="email" placeholder="Your Email" name="mail" required="">
                                <div class="email-underline"></div>
                                <input id="nl-submit" type="submit" value="Subscribe">
                                <div class="arrow-link al-hover bs-tech"><i>
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
                                    <small class="bs-14">©2023 01Synergy Studio</small>
                                </div>
                                <div class="bs-xl-8 bs-sm-14 bs-xs-22 right xs-center xs-top-1">
                                    <ul class="bs-14">
                                        <li><a href="https://www.linkedin.com/company/buzzworthystudio/" target="_blank" class="text-link" aria-label="Linkedin">Linkedin</a>
                                        </li>
                                        <li><a href="https://www.instagram.com/buzzworthy.studio/" target="_blank" class="text-link" aria-label="Instagram">Instagram</a></li>
                                        <li><a href="https://twitter.com/getbuzzworthy" target="_blank" class="text-link" aria-label="Twitter">Twitter</a>
                                        </li>
                                        <li><a href="https://www.behance.net/BuzzworthyStudio" target="_blank" class="text-link" aria-label="Behance">Behance</a>
                                        </li>
                                        <li><a href="https://dribbble.com/01Synergy/" target="_blank" class="text-link" aria-label="Dribbble">Dribbble</a></li>
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




</body></html>