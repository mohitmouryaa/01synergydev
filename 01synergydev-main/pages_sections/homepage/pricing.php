<section class="pricing" id="Pricing" style="margin-top: 200px;">
        <header class="grid-inner bs-grid xs-top-2 xs-wrap xs-reverse">
          <div class="bs-xl-6 bs-sm-8 bs-xs-22 clients-left">
            <div>
              <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i><?php echo htmlspecialchars($homepageData['plans']['title']); ?></h2>
            </div>
            <p class="sm-top-1 split lines">
              <?php echo @$homepageData['resourceDetailsData']['description'] ?>
            </p>
          </div>
          <div class="bs-xl-8 bs-xl-os-3 bs-sm-os-2 bs-xs-22 bs-xs-os-0">
            <h3 class="bs-120 upper split chars"><?php echo htmlspecialchars($homepageData['plans']['title']); ?><i class="dot view"></i></h3>
          </div>
        </header>

        <div class="container">

          <div class="pricing-wrapper">
            <?php foreach ($homepageData['plans']['list'] as $index => $item) : ?>
              <aside id="Pricing-Monthly" class="pricing-card pc">
                <h2 class="heading-style-h3"><?php echo isset($item['title']) ? htmlspecialchars($item['title']) : ''; ?></h2>
                <div class="pricing-subtitle garboo"><?php echo isset($item['offerDescription']) ? htmlspecialchars($item['offerDescription']) : ''; ?></div>
                <div class="text-block"> &nbsp;</div>
                <div class="pricing-price">USD $<?php echo isset($item['price']) ? htmlspecialchars($item['price']) : ''; ?>
                <?= @$item['title'] === "Weekly" ? "/Week" : "/Month"?>
                </div>
                <div class="paragraph-regular margin-bottom-20"><?php echo isset($item['description']) ? htmlspecialchars($item['description']) : ''; ?></div>
                <div class="margin-top margin-medium">
                  <a href="<?php echo isset($item['buttonUrl']) ? htmlspecialchars($item['buttonUrl']) : ''; ?>" class="main-button w-inline-block">
                    <div class="button-container" id="button-container">
                      <aside class="button-top">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <p class="button-text"><?php echo isset($item['buttonLabel']) ? htmlspecialchars($item['buttonLabel']) : ''; ?></p>
                      </aside>
                      <div class="button-bottom"></div>
                    </div>
                  </a>
                </div>
                <div class="pricing-divider"></div>
                <ul class="pricing-feature-list w-list-unstyled">
                  <?php foreach ($item['features'] as $feature) : ?>
                    <li>
                      <div class="pricing-feature"><?php echo isset($feature) ? htmlspecialchars($feature) : ''; ?></div>
                    </li>
                  <?php endforeach; ?>
                </ul>
                <?php if (isset($item['isPopular']) && $item['isPopular']) : ?>
                  <div class="pricing-tag">Most Popular</div>
                <?php endif; ?>
              </aside>
            <?php endforeach; ?>
          </div>
        </div>


      </section>