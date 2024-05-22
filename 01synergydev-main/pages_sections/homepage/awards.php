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

            $index = 0;

            foreach ($awardData as $imageLink) {
                $figureClass = $figureClasses[$index % count($figureClasses)];
                $placeholderImage = $baseUrl . $imageLink; // Use the same image for placeholder
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