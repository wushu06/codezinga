<?php
/**
 * Partial template for content in archive-case_studies.php or single-case_studies.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if( is_singular() ) :

get_page_structure( 'blocks' );

else :

?>

<div class="col-6 col-md-4 py-5 px-3 px-md-5 d-flex align-items-center justify-content-center">
  <a class="d-block" href="<?=get_post_permalink()?>">
    <img class="w-100 hidden" src="<?=get_the_post_thumbnail_url(get_the_ID())?>" data-vp-add-class="visible animated fadeInUp" data-vp-delay="100"//>
  </a>
</div>

<?php
  
endif;

?>

