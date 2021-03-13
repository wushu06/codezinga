<section class="block block-two-columns bg-white">
  <div class="container">
    <?php if( theme('title') ) : ?>
      <div class="row">
        <div class="col-12">
            <h6 class="text-uppercase letter-spacing-2 mb-4 indented-title text-light-grey hidden" data-vp-add-class="visible animated fadeInUp"><?=theme('title')?></h6>
        </div>
      </div>
    <?php endif; ?>
    <div class="row">
      <?php foreach( theme('columns') as $column ) : ?>
        <?php $border_top = ( $column['border_top'] ) ? 'column-border-top pt-4' : ''; ?>
        <div class="col-12 col-md-<?=$column['column_size']?> offset-md-<?=$column['offset']?> <?=$border_top?>">
          <?php if( $column['content_blocks'] ) : ?>  
            <?php foreach( $column['content_blocks'] as $content_block ) : ?>
              <?php 
                switch( $content_block['acf_fc_layout'] ) :
                  case 'title':
                    $classes = '';
                    $classes .= ( $content_block['indented'] ) ? ' indented-title' : '';
                    $classes .= ( $content_block['uppercase'] ) ? ' text-uppercase' : '';
                    $classes .= ( $content_block['size'] == "h6" ) ? ' mb-5' : 'mb-3';
                    echo "<$content_block[size] class='text-$content_block[color] hidden $classes mb-md-3 pr-4 letter-spacing-$content_block[letter_spacing]' data-vp-add-class='visible animated fadeInUp'>$content_block[text]</$content_block[size]>";
                    break;
                  case 'text':
                    echo "<p class='text-$content_block[color] hidden mb-md-5' data-vp-add-class='visible animated fadeInUp'>$content_block[text]</p>";
                    break;  
                  case 'list':  
                    $li_classes = ( $content_block['style'] == "ticked" ) ? " py-4 border-top" : "my-4";
                    echo "<ul class='list $content_block[style] mb-0'>";
                    foreach( $content_block['items'] as $key => $item ) :
                      echo "<li class='$li_classes hidden' data-vp-add-class='visible animated fadeInUp' data-vp-delay='100'>$item[text]</li>";
                    endforeach;
                    echo "</ul>";
                    break;
                  case 'image':
                    echo "<img class='w-100 mb-4 mb-md-0 hidden' src='".$content_block['asset']['url']."' alt='".esc_attr($content_block['asset']['alt'])."' data-vp-add-class='visible animated fadeInUp' />";
                    break;
                  case 'price':
                    echo "<div class='mb-4'>
                            <p class='m-0 small text-uppercase text-light-grey letter-spacing-2'>From</p>
                            <h3 class='d-inline-block text-purple'>£" . number_format($content_block['number'], 0) . "</h3><span class='text-dark-grey ml-2'>exc.vat</span>
                          </div>";
                    break;
                  case 'accordion':
                    ?>
                    <div class='accordion' id='accordion'>
                      <?php foreach( $content_block['items'] as $key => $item ) : ?>
                        <div class='card bg-transparent rounded-0 border-top-0 border-left-0 border-right-0 border-bottom mb-4 mt-4 mt-md-0 hidden' data-vp-add-class='visible animated fadeInUp' data-vp-delay='<?=$key?>00'>
                          <div class='card-header bg-transparent p-0 pb-4 border-0' id='header<?=$key?>'>
                            <h5 class="m-0"><a class="text-purple text-decoration-none" data-toggle="collapse" data-target="#item<?=$key?>" href="javascript:;"><?=$item['title']?></a></h5>
                          </div>
                          <div id="item<?=$key?>" class="collapse" data-parent="#accordion">
                            <div class="card-body p-0 pb-4">
                              <?=$item['description']?>
                            </div>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                    <?php
                    break;
                endswitch;
              ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>