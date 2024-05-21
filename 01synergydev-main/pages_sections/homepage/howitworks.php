<section id="attitude" class="xs-top-3">
    <h2 class="big-fade xs-top-0"><?php echo  @$homepageData['howitWorks']['title']; ?></h2>
    <div class="bs-grid grid-middle grid-inner">
        <div class="text-progress">
            <p><?php echo  @$homepageData['howitWorks']['title']; ?></p>
            <p><?php echo  @$homepageData['howitWorks']['title']; ?></p>
        </div>
    </div>
    <div class="boxes">
        <?php foreach (@$homepageData['howitWorks']['steps'] as $index => $step) : ?>
            <div class="<?php echo $index % 2 == 0 ? '' : 'b-middle stack'; ?>">
                <article class="box">
                    <h3 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i>STEP <?php echo $index + 1; ?></h3>
                    <h4 class="bs-60 upper"><?php echo $step['title']; ?></h4>
                    <p>
                        <?php echo $step['description']; ?>
                    </p>
                </article>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="hex-wrap bs-xl-7 bs-sm-18 bs-sm-os-3 xs-top-3 center">
        <svg class="shape-anim" viewBox="0 0 256 218" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-1529.000000, -989.000000)" fill="none" stroke-width="1" stroke="#EEEEF2">
                <g transform="translate(1529.555556, 989.920435)">
                    <polyline vector-effect="non-scaling-stroke" points="0 0 0 34.9162585 31.8888889 54.0252776 63.7777778 34.9162585 95.7777778 54.0252776 95.7777778 88.9162585 127.5 108.5 159.555556 88.9162585"></polyline>
                    <polyline vector-effect="non-scaling-stroke" points="95.7777778 88.9162585 63.7777778 108.025278 63.7777778 142.941536 32 162.025278"></polyline>
                    <polyline vector-effect="non-scaling-stroke" points="63.8888889 142.945268 95.7777778 162.025278 127.5 142.945268 160 162.025278 159.555556 196.970546 127.666667 216.079565"></polyline>
                    <polyline vector-effect="non-scaling-stroke" points="160 162.025278 191.444444 142.941536 223.555556 162.054287 254.777778 142.945268"></polyline>
                </g>
            </g>
        </svg>
    </div>
</section>