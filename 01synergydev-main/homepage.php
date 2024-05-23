<?php
include('./Api/homeApi.php');
include('./Api/settingsApi.php');
include('./Api/allworkApi.php');
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

  <?php include('./common/loader.php'); ?>

  <?php include('./common/menuIcon.php'); ?>


  <!-- logo -->
  <?php include './common/logo.php'; ?>

  <!-- MENU -->
  <?php include './common/menu.php'; ?>

  <!-- AJAX CONTENT HOLDER -->
  <main id="smooth-wrapper">

    <!-- PATTERN BG -->
    <?php include './common/scrollpattern.php'; ?>

    <?php include './common/dragicon.php'; ?>



    <!-- SMOOTH SCROLLING CONTENT -->
    <div class="content home" data-work="init">
      <!-- <div id="breadcrumb">
        <span class="bs-tech hero-in">01Synergy studio</span>
      </div> -->

      <!-- KEYWORDS USPS -->
      <?php include './common/usp.php'; ?>


      <!-- HERO SECTION -->
      <?php include './pages_sections/homepage/hero.php'; ?>


      <!-- intro about -->
      <?php include './pages_sections/homepage/about.php'; ?>


      <!-- Process SECTION -->
      <?php include './pages_sections/homepage/howitworks.php'; ?>

      <?php include './pages_sections/homepage/pricing.php'; ?>

      <?php include './pages_sections/homepage/cost.php'; ?>

      <!-- WORK SECTION -->
      <?php include './pages_sections/homepage/work.php'; ?>

      <!-- CLIENTS SECTION -->
      <?php include './pages_sections/homepage/resources.php'; ?>


      <!-- AWARDS SECTION -->
      <?php include './pages_sections/homepage/awards.php'; ?>


      <!-- TESTIMONIAL SECTION -->

      <?php include './pages_sections/homepage/testimonials.php'; ?>


      <!--footer-->
      <?php include './common/footer.php'; ?>

    </div>
  </main>

  <?php include './common/scripts.php'; ?>


</body>

</html>