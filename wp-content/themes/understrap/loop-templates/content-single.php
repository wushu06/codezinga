<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php if( is_singular() ) : ?>

<section class="block block-full-width bg-white extra-spacing">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10">
        <h1 class="text-purple hidden" data-vp-add-class='visible animated fadeInUp' data-vp-delay='100'><?=get_the_title()?></h1>
      </div>
    </div>      
  </div>
</section>

<section class="block block-blog-content bg-white">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 column-border-top py-4 order-2 order-md-1">
        <?=partial('social')?>
      </div>
      <div class="col-12 col-md-8 column-border-top py-4 order-1 order-md-2">
        <h6 class="text-light-grey text-uppercase letter-spacing-2 mb-3"><?=get_the_date('j M Y')?></h6>
        <?=get_the_content();?>
      </div>
    </div>
  </div>
</section>

<?php get_page_structure( 'blocks' ); ?>

<?php else : ?>

<div class="col-12 col-md-4 hidden" data-vp-add-class='visible animated fadeInUp' data-vp-delay='100'>
  <a class="text-decoration-none" href="<?=get_permalink()?>">
    <div class="border-light-grey border-top py-4 mr-3">
      <h6 class="text-light-grey text-uppercase letter-spacing-2 mb-3"><?=get_the_date('j M Y')?></h6>
      <h5 class="text-purple mb-3 mr-5"><?=get_the_title()?></h5>
      <p class="mb-3 text-dark-grey"><?=understrap_custom_excerpt(get_the_ID())?></p>
      <span class="link text-pink text-uppercase font-weight-bold letter-spacing-2"><img src="<?=site_url()?>/wp-content/themes/understrap/images/right-arrow-pink.svg"/> Read more</span>
    </div>
  </a>
</div>

<?php endif; ?>
