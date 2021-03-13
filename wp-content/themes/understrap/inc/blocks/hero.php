<section class="block block-hero <?=theme('size')?>">
  <?php if( theme('background_image') ) : ?>
    <img class="block-hero-background-image" alt="<?=esc_attr(theme('background_image')['alt'])?>" src="<?=theme('background_image')['url']?>"/>
  <?php endif; ?>
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-12 col-md-10 d-flex justify-content-center h-100 flex-column">
        <?php if( theme('logo') ) : ?>
          <img class="block-hero-logo mb-4 hidden" data-vp-add-class="visible animated fadeIn" data-vp-delay="100" src="<?=theme('logo')['url']?>" />
        <?php endif; ?>
        <?php if( theme('title') ) : ?>
        <h1 class="hidden" data-vp-add-class="visible animated fadeInUp" data-vp-delay="200"><?=theme('title')?></h1>
        <?php endif; ?>
        <?php if( theme('show_scroll') ) : ?>
          <h6 class="scroll text-uppercase text-white letter-spacing-4">Scroll<span></span></h6>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>