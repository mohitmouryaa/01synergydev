<section id="clients">
        <header class="grid-inner bs-grid xs-top-2 xs-wrap xs-reverse">
          <div class="bs-xl-6 bs-sm-8 bs-xs-22 clients-left">
            <div>
              <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i><?php echo @$homepageData['resourceDetailsData']['title'] ?></h2>
            </div>
            <p class="sm-top-1 split lines">
              <?php echo @$homepageData['resourceDetailsData']['description'] ?>
            </p>
          </div>
          <div class="bs-xl-8 bs-xl-os-3 bs-sm-os-2 bs-xs-22 bs-xs-os-0">
            <h3 class="bs-120 upper split chars"><?php echo @$homepageData['resourceDetailsData']['title'] ?><i class="dot view"></i></h3>
          </div>
        </header>
        <div class="client-wrap xl-top-2 xs-top-1">
          <div class="row xs-wrap">
            <div class="bs-xl-5 bs-xs-10">
              <div class="client-item" data-client="1">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][0]['imageLink'] ?>" alt="Ocean agency Logo" style="height: auto" />
              </div>
            </div>
            <div class="bs-xl-6 bs-xs-10">
              <div class="client-item bs-xl-os-1 bs-xs-os-0" data-client="2">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][1]['imageLink'] ?>" alt="Wework logo" style="height: auto" />
              </div>
            </div>
            <div class="bs-xl-6 bs-xs-10">
              <div class="client-item bs-xl-os-1 bs-xs-os-0" data-client="3">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][2]['imageLink'] ?>" alt="Selene Aviation Logo" style="height: auto" />
              </div>
            </div>
            <div class="bs-xl-6 bs-xs-10">
              <div class="client-item bs-xl-os-1 bs-xs-os-0" data-client="4">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][3]['imageLink'] ?>" alt="Hoboken Yogi Logo" style="height: auto" />
              </div>
            </div>
          </div>
          <div class="row xs-wrap">
            <div class="bs-xl-5 bs-xs-10">
              <div class="client-item" data-client="5">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][4]['imageLink'] ?>" alt="Modern MD Logo" style="width: 175px; height: auto" />
              </div>
            </div>
            <div class="bs-xl-6 bs-xs-10">
              <div class="client-item bs-xl-os-1 bs-xs-os-0" data-client="6">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][5]['imageLink'] ?>" alt="Sling Shot Intergalactic Logo" style="width: 185px; height: auto" />
              </div>
            </div>
            <div class="bs-xl-6 bs-xs-10">
              <div class="client-item bs-xl-os-1 bs-xs-os-0" data-client="7">
                <img src="<?= $baseUrl . $homepageData['resourceDetailsData']['list'][6]['imageLink'] ?>" alt="Helias Oils Logo" style="width: 185px; height: auto" />
              </div>
            </div>
          </div>
          <div class="client-stat">
            <div class="stat-bg"></div>
            <div class="stat-inner">
              <span class="stat-icon"><img src="<?= $clientUrl ?>/images/heart-icon.svg" alt="Heart Icon" /></span>

            </div>
          </div>
        </div>
      </section>