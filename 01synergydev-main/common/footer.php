<footer id="footer" class="xl-top-5 xs-top-3">
        <div class="bs-xl-22 bs-xl-os-1">
          <div class="bs-xl-10 bs-xl-os-9 bs-xs-22 bs-xs-os-0">
            <h3 class="contact-link bs-120 upper">
              <a href="../contact" class="mask-link" data-id="LET’S TALK" aria-label="LET’S TALK"><span>LET’S TALK</span><i class="dot work-dot"><svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z" fill="#C49E76"></path>
                  </svg></i></a>
            </h3>
          </div>
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
            <div class="bs-xl-8 bs-xs-22">
              <h3 class="bs-120 upper">
                <a href="../studio"><span>
                    <img src="<?= $baseUrl . $settingData['websiteSettings']['footerContent']['footerLogo'] ?>" style="width: 200px;" />
                  </span></a>
              </h3>
              <address class="bs-xl-6 bs-xs-22 xl-top-1">
                <?php
                $contactAddress = $settingData['websiteSettings']['footerContent']['contactAddress'];
                $decodedAddress = html_entity_decode($contactAddress, ENT_QUOTES, 'UTF-8');
                ?>
                <div>
                  <?php echo $decodedAddress; ?>
                </div>
              </address>
            </div>

            <div class="bs-xl-13 bs-xl-os-1 bs-xs-22 bs-xs-os-0 xs-top-1">
              <div class="bs-grid grid-between grid-bottom xs-wrap">
                <div class="bs-xl-4 bs-xs-14">
                  <ul class="service-links">
                    <?php foreach (@$homepageData['whatWeDo']['list'] as $item) : ?>
                      <li>
                        <a class="text-link" href="..<?php echo $item['url']; ?>"><span><?php echo $item['title']; ?></span></a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <div class="bs-xl-9 right bs-xs-12">
                  <h3 class="bs-120 upper">
                    <a href="/services.php" class="mask-link" data-id="Services" aria-label="Services">
                      <span>Services</span><i class="dot work-dot">
                        <svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z" fill="#C49E76"></path>
                        </svg>
                      </i>
                    </a>
                  </h3>
                </div>
              </div>
              <div class="line-anim">
                <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                  <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145" stroke="#EEEEF2" fill-rule="evenodd"></path>
                </svg>
                <div></div>
                <svg width="11" height="9" xmlns="http://www.w3.org/2000/svg">
                  <path d="m10.407 4.5-2.555 4H3.148l-2.555-4 2.555-4h4.704l2.555 4Z" fill="#1D2145" stroke="#EEEEF2" fill-rule="evenodd"></path>
                </svg>
              </div>
              <h3 class="bs-120 upper">
                <a href="/work.php" class="mask-link" data-id="work" aria-label="Work"><span>Work</span><i class="dot work-dot">
                    <svg viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.12543L5 11L-2.25534e-07 8.12543L2.3356e-07 2.87401L5 2.18537e-07L10 2.87401L10 8.12543Z" fill="#C49E76"></path>
                    </svg></i>
                </a>
              </h3>
            </div>
          </div>

          <div class="bs-grid footer-bottom grid-bottom xs-top-1 sm-wrap">
            <div id="newsletter" class="bs-xl-8 bs-sm-22 sm-top-1">
              <h2 class="bs-tech">Newsletter</h2>
              <form action="">
                <input type="email" placeholder="Your Email" name="mail" required="" />
                <div class="email-underline"></div>
                <input id="nl-submit" type="submit" value="Subscribe" />
                <div class="arrow-link al-hover bs-tech">
                  <i>
                    <svg viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg" stroke-width="2">
                      <path vector-effect="non-scaling-stroke" class="nl-line" d="M0.852905 4.35493L8.81351 4.35352" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path vector-effect="non-scaling-stroke" class="nl-tip" fill-rule="evenodd" clip-rule="evenodd" d="M8.79297 1.37402L11.777 4.35801L8.79721 7.33776L8.79297 1.37402Z" stroke="#EEEEF2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </i>
                </div>
              </form>
            </div>
            <div class="bs-xl-13 bs-xl-os-1 bs-sm-22 bs-sm-os-0 sm-top-1">
              <div class="bs-grid grid-between xs-wrap">
                <div class="bs-xl-5 bs-sm-8 bs-xs-22 xs-center">
                  <small class="bs-14"><?= $settingData['websiteSettings']['footerContent']['copyrightContent'] ?></small>
                </div>
                <div class="bs-xl-8 bs-sm-14 bs-xs-22 right xs-center xs-top-1">
                  <ul class="bs-14">
                    <li>
                      <a href="https://www.linkedin.com/company/buzzworthystudio/" target="_blank" class="text-link" aria-label="Linkedin">Linkedin</a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/buzzworthy.studio/" target="_blank" class="text-link" aria-label="Instagram">Instagram</a>
                    </li>
                    <li>
                      <a href="https://twitter.com/getbuzzworthy" target="_blank" class="text-link" aria-label="Twitter">Twitter</a>
                    </li>
                    <li>
                      <a href="https://www.behance.net/BuzzworthyStudio" target="_blank" class="text-link" aria-label="Behance">Behance</a>
                    </li>
                    <li>
                      <a href="https://dribbble.com/01Synergy/" target="_blank" class="text-link" aria-label="Dribbble">Dribbble</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>