<section class="block block-case-studies-grid <?=theme('background_color')?>">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 hidden" data-vp-add-class="visible animated fadeInUp">
        <h6 class="text-uppercase text-light-grey indented-title letter-spacing-2 mb-4"><?=theme('title')?></h6>
        <?php if( theme('subtitle') ) : ?>
          <h4 class="text-purple mb-5"><?=theme('subtitle')?></h4>
        <?php endif; ?>
      </div>
    </div>
    <div class="row mb-5">
      <?php foreach( theme('case_studies') as $key => $item ) : ?>
          <div class="col-6 col-md-4 px-3 py-5 px-md-5 d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="<?=get_permalink($item->ID)?>">
              <img class="w-100 hidden" src="<?=get_the_post_thumbnail_url($item->ID)?>" data-vp-add-class="visible animated fadeInUp" data-vp-delay="<?=$key?>00"/>
            </a>
          </div>
      <?php endforeach; ?>
    </div>
    <div class="row">
      <div class="col-12">
        <a class="link text-pink text-uppercase font-weight-bold letter-spacing-2 text-decoration-none" href="/case-studies"><img src="<?=site_url()?>/wp-content/themes/understrap/images/right-arrow-pink.svg" alt=""/> See all Case Studies</a>
      </div>
    </div>
  </div>
</section>