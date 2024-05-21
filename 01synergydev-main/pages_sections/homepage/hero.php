<section id="hero" class="grid-inner">
        <div class="blur-circle"></div>
        <div>
          <h1 class="bs-220">
            <div>
              <span class="hero-split chars xs-center">Software</span>
              <span class="hero-split chars red xs-center">Development</span>
            </div>
            <div>
              <span class="hero-split chars red">Development</span>
              <span class="hero-split chars right xs-left">Membership</span>
            </div>
          </h1>
          <div id="hero-work-link" class="bs-xl-8 bs-xl-os-10 bs-xs-16 bs-xs-os-0 hero-in">
            <a href="/<?php echo @$homepageData['header']['latestWork']['title']; ?>.php" <span class="link-bg"></span>
              <span class="bs-hero-small upper">Latest project</span>
              <i>
                <svg viewBox="0 0 56 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path class="arrow-line" d="M1 6L49.8077 6" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path class="arrow-line" d="M1 6L49.8077 6" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M49.8086 1L55.0009 6L49.8086 11L49.8086 1Z" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </i>
              <span class="bs-hero-small upper"><?php echo @$homepageData['header']['latestWork']['title']; ?></span>
            </a>
          </div>
          <div class="scroll-to hero-in" data-scroll="intro">
            <div class="bs-tech faded">(&nbsp;&nbsp;&nbsp;SCROLL&nbsp;&nbsp;&nbsp;)</div>
          </div>
          <div class="bs-xl-5 bs-xs-18 bs-xs-os-2 hero-copy hero-in">
            <p class="bs-hero-small upper faded xs-center">
              <?php echo @$homepageData['header']['description']; ?>
            </p>
          </div>
        </div>
      </section>