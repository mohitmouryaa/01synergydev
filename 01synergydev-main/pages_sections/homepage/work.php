<section class="xl-top-6 xs-top-4 work-listing" id="work">
        <div class="grid-inner">
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
            <div class="bs-xl-7 bs-xs-22">
              <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i><?php echo  @$homepageData['ourWork']['title']; ?></h2>
              <h3 class="bs-160 upper xl-top-1 split chars"><?php echo @$homepageData['ourWork']['title']; ?><i class="dot view"></i></h3>
              <article class="bs-xl-7 bs-xs-22 xl-top-2 xs-top-1" data-speed=".95">
                <a href="<?php echo @$homepageData['ourWork']['list'][0]['pageUrl']; ?>">
                  <figure>
                    <i class="work-lottie">
                      <svg viewBox="0 0 660 660" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="imgMask1">
                          <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H659.5C659.776 0 660 0.223858 660 0.5V0.5C660 0.776142 659.829 1 659.553 1C653.058 1 577.308 1 528 1C476.451 1 447.549 1 396 1C344.451 1 315.549 1 264 1C212.451 1 183.549 1 132 1C82.6923 1 6.94176 1 0.447341 1C0.171199 1 0 0.776142 0 0.5V0.5Z" fill="black"></path>
                        </mask>

                        <image width="100%" height="100%" mask="url(#imgMask1)" href="<?= $baseUrl; ?><?php echo  @$homepageData['ourWork']['list'][0]['media']['url']; ?>"></image>
                      </svg>
                    </i>
                  </figure>
                  <h2 class="thumb-title bs-14 upper FontBody"><?php echo  @$homepageData['ourWork']['list'][0]['title']; ?></h2>
                </a>
              </article>
            </div>
            <article class="bs-xl-9 bs-xl-os-2 bs-xs-22 bs-xs-os-0 xs-top-1">
              <a href="<?php echo @$homepageData['ourWork']['list'][1]['pageUrl']; ?>">
                <figure>
                  <i class="work-lottie">
                    <svg viewBox="0 0 660 660" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="imgMask2">
                        <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H659.5C659.776 0 660 0.223858 660 0.5V0.5C660 0.776142 659.829 1 659.553 1C653.058 1 577.308 1 528 1C476.451 1 447.549 1 396 1C344.451 1 315.549 1 264 1C212.451 1 183.549 1 132 1C82.6923 1 6.94176 1 0.447341 1C0.171199 1 0 0.776142 0 0.5V0.5Z" fill="black"></path>
                      </mask>

                      <image width="100%" height="100%" mask="url(#imgMask2)" href="<?= $baseUrl; ?><?php echo  @$homepageData['ourWork']['list'][1]['media']['url']; ?>"></image>
                    </svg>
                  </i>
                </figure>
                <h2 class="thumb-title bs-14 upper FontBody"><?php echo  @$homepageData['ourWork']['list'][1]['title']; ?></h2>
              </a>
            </article>
          </div>
          <div class="bs-grid xl-top-3 xs-top-1 xs-wrap">
            <article class="bs-xl-8 bs-xl-os-2 bs-xs-22 bs-xs-os-0" data-speed=".9">
              <a href="<?php echo @$homepageData['ourWork']['list'][2]['pageUrl']; ?>">
                <figure>
                  <i class="work-lottie">
                    <svg viewBox="0 0 660 660" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="imgMask3">
                        <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H659.5C659.776 0 660 0.223858 660 0.5V0.5C660 0.776142 659.829 1 659.553 1C653.058 1 577.308 1 528 1C476.451 1 447.549 1 396 1C344.451 1 315.549 1 264 1C212.451 1 183.549 1 132 1C82.6923 1 6.94176 1 0.447341 1C0.171199 1 0 0.776142 0 0.5V0.5Z" fill="black"></path>
                      </mask>

                      <image width="100%" height="100%" mask="url(#imgMask3)" href="<?= $baseUrl; ?><?php echo  @$homepageData['ourWork']['list'][2]['media']['url']; ?>"></image>
                    </svg>
                  </i>
                </figure>
                <h2 class="thumb-title bs-14 upper FontBody"><?php echo  @$homepageData['ourWork']['list'][2]['title']; ?></h2>
              </a>
            </article>
            <!-- <article class="bs-xl-6 bs-xl-os-2 bs-xs-22 bs-xs-os-0 xl-top-6 xs-top-1" data-speed="1.05">
              <a href="<?php echo @$homepageData['ourWork']['list'][3]['pageUrl']; ?>">
                <figure>
                  <i class="work-lottie">
                    <svg viewBox="0 0 660 660" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="imgMask4">
                        <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H659.5C659.776 0 660 0.223858 660 0.5V0.5C660 0.776142 659.829 1 659.553 1C653.058 1 577.308 1 528 1C476.451 1 447.549 1 396 1C344.451 1 315.549 1 264 1C212.451 1 183.549 1 132 1C82.6923 1 6.94176 1 0.447341 1C0.171199 1 0 0.776142 0 0.5V0.5Z" fill="black"></path>
                      </mask>
                      <image width="100%" height="100%" mask="url(#imgMask4)" href="<?= $baseUrl; ?><?php echo  @$homepageData['ourWork']['list'][3]['media']['url']; ?>"></image>
                    </svg>
                  </i>
                </figure>
                <h2 class="thumb-title bs-14 upper FontBody"><?php echo  @$homepageData['ourWork']['list'][3]['title']; ?></h2>
              </a>
            </article> -->
          </div>
        </div>
      </section>
      <div class="bs-xl-6 bs-xl-os-15 bs-xs-22 bs-xs-os-1 view xl-top-4 xl-bottom-2 xs-top-2">
        <a href="/our-work" class="arrow-link al-hover bs-tech"><i><img src="images/arrow-link.svg" alt="line arrow icon" /></i>View all work</a>
      </div>