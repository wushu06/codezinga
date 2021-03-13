<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<footer>
  <a class="cta_button text-white text-uppercase letter-spacing-2 text-decoration-none font-weight-bold hidden" href="<?=site_url()?>/contact">Get in touch</a>
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-6">
        <h5 class="logo-text" style="color: white !important;">codezinga</h5>
          <h6 class="text-uppercase text-pink letter-spacing-2">Connect with CodeZinga</h6>
          <p class="text-ghost-white letter-spacing-2 mb-0">0845 052 3701</p>
        <p class="text-ghost-white letter-spacing-2 mb-4">admin@codezinga.com</p>
        <ul class="navbar-nav flex-row mb-4 social-links">
          <?php foreach( get_field('social_links', 'option') as $social_link ) : ?>
            <li class="nav-item mr-3"><a class="nav-link text-decoration-none" href="<?=$social_link['link']?>"><i class="fab <?=$social_link['icon']?>"></i></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-12 col-md-3 mb-4 mb-md-0">
      </div>
      <div class="col-12 col-md-3 mb-4 mb-md-0">
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer_1',
						'container_id'    => 'footer_menu_1_container',
						'fallback_cb'     => '',
						'menu_id'         => 'footer-menu-1',
						'menu_class'      => 'list-unstyled',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>        
      </div>
    </div>
    <hr class="d-block mb-4 border-ghost-white border-bottom">
    <div class="row">
      <div class="col-12 site-info">
        <p class="text-ghost-white mb-0">&copy; <?=date('Y')?> CodeZinga. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>

