<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.typekit.net/xbh7gfj.css">
    <script src="https://kit.fontawesome.com/b88394a142.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<nav class="navbar fixed-top">

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
<!--                    <img class="svg" src="--><?//=site_url()?><!--/wp-content/uploads/2019/11/logo-white.svg"/>-->
                    <span class="logo-text">CODEZINGA</span>
                </a>

        <a class="menu-toggle ml-auto">Menu</a>
      
        <div class="menu-blocker"></div>
      
        <div class="menu-tray">        
            <?php wp_nav_menu(
              array(
                'theme_location'  => 'primary',
                'container_id'    => 'main-menu-container',
                'menu_class'      => 'navbar-nav flex-column',
                'fallback_cb'     => '',
                'menu_id'         => 'main-menu',
                'depth'           => 2,
                'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
              )
            ); ?>
            <div class="menu-footer bg-dark-navy-blue py-4 mt-auto">
              <div class="container-fluid p-0">
                <div class="row no-gutters">
                  <div class="col-12">
                    <ul class="navbar-nav flex-row">
                      <?php foreach( get_field('social_links', 'option') as $social_link ) : ?>
                        <li class="nav-item mr-3"><a class="nav-link text-decoration-none p-0" href="<?=$social_link['link']?>"><i class="fab <?=$social_link['icon']?>"></i></a></li>
                      <?php endforeach; ?>
                    </ul>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
  
