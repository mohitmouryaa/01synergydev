<?php include('./Api/settingsApi.php') ?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <title>404</title>
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




        <!-- SMOOTH SCROLLING CONTENT -->
        <div class="content home" data-work="init">

            <?php include './common/usp.php'; ?>


            <!-- HERO SECTION -->
            <?php include './common/404.php'; ?>



        </div>
    </main>

    <?php include './common/scripts.php'; ?>


</body>

</html>