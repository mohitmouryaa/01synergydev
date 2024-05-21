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
        <a href="/services.php" class="arrow-link al-hover bs-tech"><i><img src="images/arrow-link.svg" alt="line arrow icon" /></i>Services</a>
    </div>
</section>