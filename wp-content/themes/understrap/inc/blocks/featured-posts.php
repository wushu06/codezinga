<section class="block block-featured-posts <?=theme('background_color')?>">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-3 hidden" data-vp-add-class="visible animated fadeInUp">
        <h6 class="indented-title text-uppercase text-light-grey letter-spacing-2 mb-3"><?=theme('title')?></h6>
        <h4 class="text-purple mb-5 mb-md-4"><?=theme('subtitle')?></h4>
      </div>
      <div class="col-1"></div>
      <?php foreach( theme('posts') as $key => $post_content ) : ?>
        <div class="col-12 col-md-4 hidden" data-vp-add-class="visible animated fadeInUp" data-vp-delay="<?=$key+1?>00">
          <div class="border-light-grey border-top py-4 mr-md-3">
            <?php if( $post_content->post_type == "post" ) : ?>
              <h6 class="text-light-grey text-uppercase letter-spacing-2 mb-3"><?=get_the_date('j M Y', $post_content->ID)?></h6>
            <?php endif; ?>
            <?php if( $post_content->post_type == "page" ) : ?>
              <?php if( get_field( 'featured_icon', $post_content->ID ) ) : ?>
                <img class="block-featured-posts-icon mb-3" src="<?=get_field( 'featured_icon', $post_content->ID )['url']?>" />
              <?php endif; ?>
            <?php endif; ?>
            <?php if( $post_content->post_type == "case_studies" ) : ?>
              <?php if( get_the_post_thumbnail_url($post_content->ID) ) : ?>
                <img class="block-featured-posts-icon mb-3" src="<?=get_the_post_thumbnail_url($post_content->ID)?>" />
              <?php endif; ?>
            <?php endif; ?>
            <h5 class="text-purple mb-3 mr-5"><?=get_the_title($post_content->ID)?></h5>
            <p class="mb-3"><?=understrap_custom_excerpt($post_content->ID)?></p>
            <a class="link text-pink text-uppercase font-weight-bold letter-spacing-2 text-decoration-none" href="<?=get_the_permalink($post_content->ID)?>"><img src="<?=site_url()?>/wp-content/themes/understrap/images/right-arrow-pink.svg" alt=""/> Read more</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>