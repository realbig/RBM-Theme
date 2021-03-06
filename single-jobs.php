<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package RBMTheme
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap full-width">
	<main class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
			<?php the_post_navigation(); ?>
		<?php endwhile;?>
	</main>
</div>
<?php get_footer();
