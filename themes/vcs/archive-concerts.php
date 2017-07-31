<?php
/**
 * The template for displaying the Concerts page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
<section class="concerts">
    <h2>concerts</h2>
    <?php 
    $concerts = get_posts(array(
        'post_type' => 'concerts',
        'numberposts' => 3,
        'tax_query' => array(
            array(
                'taxonomy' => 'concert_type',
                'field' => 'slug',
                'terms' => 'concert'
            )
        )
    )); 
    foreach ( $concerts as $post ) : ?>
        <div class="concert">
            <div class="concert-img">
                <?php 
                the_post_thumbnail(); ?>
            </div>
            <div class="concert-content">
                <p class="concert-title"><?php the_title(); ?></p>
                <p class="concert-date"><?php the_field('concert_date'); ?></p>
                <p class="concert-price"><?php the_field('concert_price'); ?></p>
                <p class="concert-location"><?php the_field('concert_location'); ?></p>
            </div>
        </div>
    <?php endforeach; wp_reset_postdata()?>
</section>

<section class="community">
    <h2>community</h2>
    <?php 
    $community_concerts = get_posts(array(
        'post_type' => 'concerts',
        'numberposts' => 2,
        'tax_query' => array(
            array(
                'taxonomy' => 'concert_type',
                'field' => 'slug',
                'terms' => 'community'
            )
        )
    )); 
    foreach ( $community_concerts as $post ) : ?>
        <div class="concert">
            <div class="concert-img">
                <?php 
                the_post_thumbnail(); ?>
            </div>
            <div class="concert-content">
                <p class="concert-title"><?php the_title(); ?></p>
                <p class="concert-date"><?php the_field('concert_date'); ?></p>
                <p class="concert-price"><?php the_field('concert_price'); ?></p>
                <p class="concert-location"><?php the_field('concert_location'); ?></p>
            </div>
        </div>
    <?php endforeach; wp_reset_postdata()?>
</section>
<?php get_footer(); ?>