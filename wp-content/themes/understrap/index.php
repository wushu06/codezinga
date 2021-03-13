<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<section class="block block-full-width bg-white extra-spacing">
  <div class="container">
    <div class="row">      
      <div class="col-12 col-md-6">
        <h1 class="text-pink mb-4 hidden" data-vp-add-class='visible animated fadeInUp' data-vp-delay='100'>Blog</h1> 
      </div>
    </div>
  </div>
</section>
<section class="block block-featured-posts bg-white">
  <div class="container">
    <div class="row">      
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'loop-templates/content', 'single' ); ?>
      <?php endwhile; // end of the loop. ?>
    </div>    
  </div>
</section>
<section class="block block-call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h4 class="text-white hidden" data-vp-add-class="visible animated fadeInUp" data-vp-delay="100">It all starts with a chat</h4>
        <h4 class="text-white font-weight-light mb-4 mb-md-5 hidden" data-vp-add-class="visible animated fadeInUp" data-vp-delay="200">When will be good for you?</h4>
        <a class="link text-white text-uppercase font-weight-bold letter-spacing-2 text-decoration-none hidden" href="/contact" data-vp-add-class="visible animated fadeInUp" data-vp-delay="300"><img src="<?=site_url()?>/wp-content/themes/understrap/images/right-arrow.svg"/> Get in touch</a>
      </div>
    </div>
  </div>
</section>
  
<?php get_footer(); ?>
