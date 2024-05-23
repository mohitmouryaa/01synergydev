<?php
      $costComparisonData = $homepageData['costComparisonData'];
      ?>

      <section class="cost" id="cost">
        <header class="grid-inner bs-grid xs-top-2 xs-wrap xs-reverse">
          <div class="bs-xl-6 bs-sm-8 bs-xs-22 clients-left">
            <div>
              <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i><?php echo htmlspecialchars($costComparisonData['title']); ?></h2>
            </div>
            <p class="sm-top-1 split lines">
              <?php echo @$homepageData['resourceDetailsData']['description'] ?>
            </p>
          </div>
          <div class="bs-xl-8 bs-xl-os-3 bs-sm-os-2 bs-xs-22 bs-xs-os-0">
            <h3 class="bs-120 upper split chars"><?php echo htmlspecialchars($costComparisonData['title']); ?><i class="dot view"></i></h3>
          </div>
        </header>

        <div id="Cost-Comparison" style="padding: 50px 25px;">

          <div class="content-wrapper speciall">
            <div class="comparison-table">
              <div class="comparison-row-3 customrow">
                <div class="comparison-positive-2 title poketdev">
                  <strong class="bold-text-5">OIS</strong>
                </div>
                <div id="w-node-_80555ec1-f092-ad5d-226c-c7b52c1be3ad-d1250d33" class="comparison-negative title employee">
                  <strong class="bold-text-4">Employee</strong>
                </div>
              </div>

              <?php foreach ($costComparisonData['costCategories'] as $category) : ?>
                <div class="subtitle-centered-2"><?php echo htmlspecialchars($category['title']); ?></div>
                <?php foreach ($category['costAttributes']['employee'] as $index => $employeeAttribute) : ?>
                  <div class="comparison-row-3">
                    <div id="w-node-_6612d80a-867b-bada-6851-090d4aaf9640-d1250d33" class="comparison-negative">
                      <strong>
                        <?php echo htmlspecialchars($employeeAttribute['attributeName']); ?> : USD
                        $<?php echo htmlspecialchars($employeeAttribute['attributeValue']); ?>
                      </strong>
                    </div>
                    <?php if (isset($category['costAttributes']['ois'][$index])) : ?>
                      <div id="w-node-f0d159ac-5961-b485-be7b-d20a7c0aae16-d1250d33" class="comparison-negative positive" style="position: absolute; right: 0; width: 50%; height: <?php echo (count($category['costAttributes']['employee']) * 50) + 5; ?>px;">
                        <strong class="oisPrice">
                          <?php echo htmlspecialchars($category['costAttributes']['ois'][$index]['attributeName']); ?> : USD
                          $<?php echo htmlspecialchars($category['costAttributes']['ois'][$index]['attributeValue']); ?>
                        </strong>
                      </div>
                    <?php endif; ?>
                  </div>
                <?php endforeach; ?>
              <?php endforeach; ?>

              <div class="subtitle-centered-2">TOTALS</div>

              <div class="comparison-row-3 customrow">
                <div class="comparison-positive-2 ok" style="display: flex; align-items: center;">
                  <strong class="bold-text-7">
                    USD $<?php echo htmlspecialchars($costComparisonData['costCategories'][0]['totals']['ois']); ?>
                  </strong>
                </div>
                <div id="w-node-_4ed9bac7-7c82-8a99-a10e-80eade269f2e-d1250d33" class="comparison-negative okok">
                  <strong style="margin-left: 20px;">
                    USD $<?php echo htmlspecialchars($costComparisonData['costCategories'][0]['totals']['employee']); ?>
                  </strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>