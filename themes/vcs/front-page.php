<?php
/**
 * The template for displaying the Front page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
<section class="season-pass">
    <div class="season-image-container">
        <img src="<?php the_field('hp_season_image'); ?>" alt="">
    </div>
    <div class="season-copy">
        <h2><?php the_field('hp_season_header'); ?></h2>
        <p><?php the_field('hp_season_copy'); ?></p>
    </div>
    <a class="season-button button" href="#">Buy Season Pass</a>
</section>
<?php print_r(get_template_directory()); ?>
<section class="concert">
    <h2>Concerts</h2>
    <div id="concert-carousel" class="owl-carousel owl-theme">
        <?php $args = array (
            'post_type' => 'concerts',
            'order' => 'DCS',
            'post_status' => 'publish',
            'posts_per_page' => -1
        );
        $concerts_list = get_posts( $args );
        foreach( $concerts_list as $post) :?>
            <div class="concert-post">
                <div class="concert-post-head">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <p class="concert-title"><?php the_title(); ?></p>
                    <p class="concert-date"><?php the_field('concert_date'); ?></p>
                </div>
                <p><?php the_field('concert_location'); ?></p>
                <p><?php the_excerpt(); ?></p>
            </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <a class="concert-view-more button" href="">View More</a>
    <!-- view more buttons -->
</section>
<section class="blog">
    <h2>From The Blog</h2>
    <div class="blog-image-container"></div>
    <!-- blog title -->
    <!-- blog content -->
</section>
<section class="buy-donate">
    <a class="buy-tickets button" href=""></a>
    <a class="donate button" href=""></a>
</section>
<?php get_footer(); ?>