<?php
/**
 * The template for displaying all single posts.
 *
 * @package VCS_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				<div class="post-head">
					<p><?php echo get_the_date('F j Y'); ?></p>
					<h3><?php echo get_the_title(); ?></h3>
				</div>
				<div class="post-content">
					<?php the_content(); ?>		
				</div>
			<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
