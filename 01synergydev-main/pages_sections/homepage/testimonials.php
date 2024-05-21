<section id="testimonials" class="xl-top-4 draggable-container xs-top-4">
        <header class="grid-inner bs-grid grid-between xs-wrap">
          <div class="bs-xl-6 bs-xs-22">
            <h2 class="section-title"><i class="circle-tag"></i><i class="circle-tag"></i><?= @$homepageData['testimonials']['title'] ?></h2>
          </div>
          <div class="bs-xl-8 bs-xs-18 right xs-left xs-top-1">
            <h3 class="bs-120 upper split chars"><?= @$homepageData['testimonials']['description'] ?><i class="dot view"></i></h3>
          </div>
        </header>
        <div class="testimonial-slider draggable xl-top-2 xs-top-1">
          <?php
          $testimonials = $homepageData['testimonials']['list'];
          ?>

          <div class="slider-inner">
            <?php foreach ($testimonials as $testimonial) { ?>
              <div class="slide-item view">
                <article class="testimonial bs-xl-8 bs-xl-os-1 bs-xs-20">
                  <h3 class="section-title">
                    <i class="circle-tag"></i>
                    <i class="circle-tag"></i>
                    <?php echo $testimonial['name']; ?>,
                    <?php echo $testimonial['designation']; ?> /
                    <?php echo $testimonial['company_name']; ?>
                  </h3>
                  <p>
                    <img src="<?php echo $baseUrl . $testimonial['imageLink']; ?>" alt="<?php echo $testimonial['name']; ?>" />
                    <span><?php echo $testimonial['description']; ?></span>
                  </p>
                </article>
              </div>
            <?php } ?>
          </div>

          <div class="drag-progress">
            <i></i>
          </div>
        </div>
      </section>