<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="block block-hero fullscreen">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-12 d-flex justify-content-center flex-column">
        <h6 class="text-white text-uppercase letter-spacing-2 indented-title mb-4">Error 404</h6>
        <h1 class="text-white mb-4">Oops.<br>This page doesn't exist!</h1>
        <p class="text-white">The page you were looking for could not be found.</p>
        <a class='link text-white text-uppercase font-weight-bold letter-spacing-2 text-decoration-none' href='/'><img src='<?=site_url()?>/wp-content/themes/understrap/images/left-arrow.svg'/> Go back to the homepage</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
