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
        'numberposts' => -1,
        'order' => 'ASC',
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
        'numberposts' => -1,
        'order' => 'ASC',
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
            <div class="concert-popout">
            </div>
        </div>
    <?php endforeach; wp_reset_postdata()?>
</section>
<section class="popout-container">
    <div class="close-popout">
        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
    </div>
    <div class="popout-content">
        <div class="popout-main">
            <p class="concert-title"><?php the_title(); ?></p>
            <?php the_post_thumbnail(); ?>
            <p class="concert-date"><?php the_field('concert_date'); ?></p>
            <p class="concert-price"><?php the_field('concert_price'); ?></p>
            <p class="concert-location"><?php the_field('concert_location'); ?></p>
        </div>
        <div class="popout-buy-tickets">
            <div style="width:100%; text-align:left;"><iframe src="//eventbrite.com/tickets-external?eid=36690852327&ref=etckt" frameborder="0" height="275" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe><div style="font-family:Helvetica, Arial; font-size:12px; padding:10px 0 5px; margin:2px; width:100%; text-align:left;" ><a class="powered-by-eb" style="color: #ADB0B6; text-decoration: none;" target="_blank" href="http://www.eventbrite.com/">Powered by Eventbrite</a></div></div>
        </div>
        <div class="popout-more"></div>
    </div>
</section>
<?php get_footer(); ?>