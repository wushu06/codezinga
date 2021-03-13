<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php $template = get_post_type() == 'post' ? 'single' : 'case-studies'; ?>

  <?php get_template_part( 'loop-templates/content', $template ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
