<section class="block block-statistics bg-white">
  <div class="container">
    <div class="row">
      <?php foreach( theme('items') as $key => $item ) : ?>
        <div class="col-12 col-md-4 text-center px-4 mb-3">
          <h2 class="text-pink mb-3 hidden" data-vp-add-class="visible animated fadeInUp" data-vp-delay="<?=$key?>00"><?=$item['title']?></h2>
          <h6 class="text-uppercase letter-spacing-2 text-pink mb-3 hidden" data-vp-add-class="visible animated fadeInUp" data-vp-delay="<?=$key?>50"><?=$item['subtitle']?></h6>
          <p class="hidden" data-vp-add-class="visible animated fadeInUp" data-vp-delay="<?=$key?>99"><?=$item['description']?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>