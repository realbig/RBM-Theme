<?php
/*
Template Name: Careers
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap full-width">
	<main class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'careers' ); ?>
			<?php comments_template(); ?>
		<?php endwhile;?>
	</main>
</div>
<?php get_footer();
