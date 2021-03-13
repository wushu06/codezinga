<section class="block block-text-carousel">
  <div class="container">
    <div class="row slick-slider" id="text-carousel">
      <?php foreach( theme('items') as $slide ) : ?>
        <div class="col-12 slick-slide pr-md-5">
          <h3 class="text-white mb-4 hidden" data-add-class="visible animated fadeInUp" data-delay="100"><?=$slide['text_content']?></h3>
          <h6 class="text-white text-uppercase letter-spacing-2 hidden" data-add-class="visible animated fadeInUp" data-delay="200"><?=$slide['author']?></h6>
          <p class="text-white text-uppercase letter-spacing-2 hidden" data-add-class="visible animated fadeInUp" data-delay="300"><?=$slide['title']?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <?php if( count(theme('items')) > 1 ) : ?>
      <div class="row">
        <div class="col-12">
          <div class="progress-bar">
            <div class="progress-bar-inner"></div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>