<section id="hero" class="grid-inner">
        <div class="blur-circle"></div>
        <div>
          <h1 class="bs-220">
            <div>
              <?php $heroTitle = breakSentenceToWords(@$homepageData['header']['title'] ); ?>
              <span class="hero-split chars xs-center" style="margin: 10px;"><?= @$heroTitle[0] ?></span>
              <span class="hero-split chars red xs-center"><?= @$heroTitle[1] ?></span>
            </div>
            <div>
              <span class="hero-split chars red"><?= @$heroTitle[1] ?></span>
              <span class="hero-split chars right xs-left"><?= @$heroTitle[2] ?></span>
            </div>
          </h1>
          <div id="hero-work-link" class="bs-xl-8 bs-xl-os-10 bs-xs-16 bs-xs-os-0 hero-in">
            <a href="javascript:void(0)" class="reload scroll-to2" data-scroll="Pricing" > <span class="link-bg"></span>
              <span class="bs-hero-small upper">Discover our exciting plans!</span>
              <i>
                <svg viewBox="0 0 56 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path class="arrow-line" d="M1 6L49.8077 6" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path class="arrow-line" d="M1 6L49.8077 6" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M49.8086 1L55.0009 6L49.8086 11L49.8086 1Z" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </i>
            </a>
          </div>
          <div class="scroll-to hero-in" data-scroll="Pricing" id="pricingtrigger">
            <!-- <div class="bs-tech faded">(&nbsp;&nbsp;&nbsp;SEE PLANS&nbsp;&nbsp;&nbsp;)</div> -->
          </div>
          <div class="bs-xl-5 bs-xs-18 bs-xs-os-2 hero-copy hero-in" style="width: 33.3328vw;font-size:1.8rem;bottom:-5rem;text-align:center;">
            <p class="bs-hero-small upper faded xs-center">
            <?php echo @$homepageData['about']['smallDescription'] ?>
            </p>
          </div>
        </div>
      </section>