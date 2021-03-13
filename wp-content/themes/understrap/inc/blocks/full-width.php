<?php $extra_spacing = theme('extra_vertical_spacing') ? 'extra-spacing' : ''; ?>
<section class="block block-full-width bg-white <?=$extra_spacing?>">
  <div class="container">
    <?php if( theme('title') ) : ?>
      <div class="row">
        <div class="col-12">
          <h6 class="text-uppercase letter-spacing-2 mb-4 indented-title text-light-grey"><?=theme('title')?></h6>
        </div>
      </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-12">
        <?php if( theme('content_blocks') ) : ?>
          <?php foreach( theme('content_blocks') as $content_block ) : ?>
            <?php 
              switch( $content_block['acf_fc_layout'] ) :
                case 'title':
                  echo "<$content_block[size] class='text-$content_block[color] mb-3 hidden' data-vp-add-class='visible animated fadeInUp'>$content_block[text]</$content_block[size]>";
                  break;
                case 'text':
                  echo "<p class='text-$content_block[color] hidden' data-vp-add-class='visible animated fadeInUp'>$content_block[text]</p>";
                  break;            
                case 'image':
                  echo "<img class='w-100 mb-4 hidden' src='".$content_block['asset']['url']."' alt='".esc_attr($content_block['asset']['alt'])."' data-vp-add-class='visible animated fadeInUp' />";
                  break;            
                case 'video':
                  echo "<video controls class='mb-4 hidden' data-vp-add-class='visible animated fadeInUp' width='100%' poster='".$content_block['poster']['url']."'><source src='".$content_block['asset']['url']."' type='".$content_block['asset']['mime_type']."'></video>";
                  break;            
                case 'button':
                  echo "<a class='link link-pink text-uppercase font-weight-bold letter-spacing-2 text-decoration-none mt-4 hidden' data-vp-add-class='visible animated fadeInUp' href='$content_block[button_url]'><img src='".site_url()."/wp-content/themes/understrap/images/right-arrow-pink.svg'/> $content_block[button_text]</a>";
                  break;
              endswitch;
            ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>