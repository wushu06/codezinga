<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>


				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
            $template = get_post_type() == 'post' ? 'single' : 'case-studies';
						get_template_part( 'loop-templates/content', $template );
						?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part( 'loop-templates/content', 'none' ); ?>
				<?php endif; ?>

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

<?php get_footer(); ?>
