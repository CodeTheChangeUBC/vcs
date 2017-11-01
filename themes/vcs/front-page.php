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
    <div class="button-container">
        <a class="season-button button-green button" href="<?php echo home_url('/season'); ?>">Buy Season Pass</a>
    </div>
</section>
<section class="concert">
    <h2>Concerts</h2>
    <div id="concert-carousel" class="owl-carousel owl-theme">
    <?php $concert_posts = get_field('hp_concert_carousel');
    foreach($concert_posts as $post) : 
        setup_postdata($post); ?>
        <div class="concert-post">
            <div class="concert-post-head">
                <img src="<?php echo get_the_post_thumbnail_url($post['hp_concert']->ID); ?>" alt="">
                <p class="concert-title"><?php echo $post['hp_concert']->post_title; ?></p>
                <p class="concert-date"><?php the_field('concert_date', $post['hp_concert']->ID); ?></p>
            </div>
            <div class="concert-copy">
                <p class="concert-location"><?php the_field('concert_location', $post['hp_concert']->ID); ?></p>
                <p class="concert-excerpt"><?php echo the_excerpt($post['hp_concert']->ID); ?></p>
            </div>
        </div>
        <?php endforeach; wp_reset_postdata();?>  
        
    </div>
    <div class="button-container">
        <a class="concert-view-more button-green button" href="<?php echo home_url('concerts'); ?>">View More</a>
    </div>
    <!-- view more buttons -->
</section>
<section class="blog">
    <h2>From The Blog</h2>
    <div class="blog-post">
        <div class="blog-image-container">
            <?php $args = array (
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'orderby' => 'date'
            );
            $latest_blog = get_posts( $args ); 
            if( get_the_post_thumbnail_url( $latest_blog[0]->ID ) ) : ?>
                <img src="<?php echo get_the_post_thumbnail_url( $latest_blog[0]->ID); ?>" alt="">
            <?php endif; ?>
        </div>
        <div class="blog-content">
            <p class="blog-title"><?php echo $latest_blog[0]->post_title; ?></p>
            <p class="blog-excerpt"><?php echo $latest_blog[0]->post_excerpt; ?></p>
        </div>
        <div class="button-container">
            <a class="concert-view-more button-green button" href="<?php echo home_url('blog'); ?>">View More</a>
        </div>
    </div>
</section>
<section class="buy-donate">
    <a class="button-green button" href="<?php echo home_url('concerts'); ?>">Buy Tickets</a>
    <a class="button-red button" href="https://www.canadahelps.org/dn/20355">Donate</a>
</section>
<section class="desktop">
    <div class="home-carousel">
        <?php $slides = get_field('slides'); 
        foreach($slides as $slide) : ?>
            <div class="slide">
                <div class="carousel-img-container left-column">
                    <div class="circle-overlay">
                        <img src="<?php echo $slide['slide_image']; ?>" alt="">
                    </div>
                </div>
                <div class="content-container right-column">
                    <div class="slide-content">
                        <h2><?php echo $slide['slide_heading']; ?></h2>
                        <p><?php echo $slide['slide_copy']; ?></p>
                    </div>
                    <div class="button-container">
                        <a class="season-button button-green button" href="<?php echo $slide['slide_button_nav'] ?>"><?php echo $slide['slide_button_text']; ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php get_footer(); ?>