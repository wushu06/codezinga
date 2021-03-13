<section class="block block-info-grid bg-pink">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 col-md-8">
        <h6 class="indented-title text-purple text-uppercase letter-spacing-2 mb-4 hidden" data-vp-add-class="visible animated fadeInUp"><?=theme('title')?></h6>
        <h4 class="text-white mb-4 hidden" data-vp-add-class="visible animated fadeInUp"><?=theme('subtitle')?></h4>
        <p class="text-white hidden" data-vp-add-class="visible animated fadeInUp"><?=theme('description')?></p>
      </div>
    </div>
    <div class="row">
      <?php $col_size = 12 / theme('number_of_columns'); ?>
      <?php foreach( theme('items') as $key => $item ) : ?>
        <div class="col-12 col-md-<?=$col_size?> hidden" data-vp-add-class="visible animated fadeInUp" data-vp-delay="<?=$key?>00">
          <div class="border-white border-top py-4 mr-md-3">        
            <?php if( $item['icon'] ) : ?>
              <img class="block-info-grid-icon mb-3" src="<?=$item['icon']['url']?>" />
            <?php endif; ?>
            <?php if( $item['title'] ) : ?>
              <h6 class="text-white text-uppercase letter-spacing-2"><?=$item['title']?></h6>
            <?php endif; ?>
            <?php if( $item['description'] ) : ?>
              <?php if( theme('ticked') ) : ?>
                <ul class="list ticked mb-0">
                  <li class="text-white"><?=$item['description']?></li>
                </ul>
              <?php else : ?>
                <p class="text-white"><?=$item['description']?></p>
              <?php endif; ?>
            <?php endif; ?>
            <?php if( $item['button_text'] ) : ?>            
              <a class="link text-purple text-uppercase font-weight-bold letter-spacing-2 text-decoration-none" href="<?=$item['button_url']?>"><img src="<?=site_url()?>/wp-content/themes/understrap/images/right-arrow-purple.svg" alt=""/> <?=$item['button_text']?></a>
            <?php endif; ?>            
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>