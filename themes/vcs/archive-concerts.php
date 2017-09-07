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
                <div class="price-date">
                    <p class="concert-date"><?php the_field('concert_date'); ?></p>
                    <p class="concert-price"><?php the_field('concert_price'); ?></p>
                </div>
                <p class="concert-location"><?php the_field('concert_location'); ?></p>
            </div>
        </div>
    <?php endforeach; wp_reset_postdata()?>
</section>
<div class="button-container">
    <a class="season-button button-green button" href="#">Buy Season Pass</a>
</div>
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
                <div class="price-date">
                    <p class="concert-date"><?php the_field('concert_date'); ?></p>
                    <p class="concert-price"><?php the_field('concert_price'); ?></p>
                </div>
                <p class="concert-location"><?php the_field('concert_location'); ?></p>
            </div>
            <div class="concert-popout">
            </div>
        </div>
    <?php endforeach; wp_reset_postdata()?>
</section>
<section class="concerts-modal">
    <div class="modal-container">
        <div id="concerts-modal-carousel" class="concerts-modal-container owl-carousel owl-theme owl-loaded owl-drag owl-height">
            <?php $concerts = get_posts(array(
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
                    <p class="concert-title"><?php the_title(); ?></p>
                    <div class="concert-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="concert-content">
                        <p class="concert-date"><?php the_field('concert_date'); ?></p>
                        <p class="concert-price"><?php the_field('concert_price'); ?></p>
                        <p class="concert-location"><?php the_field('concert_location'); ?></p>
                    </div>
                    <div class="buy-donate">
                        <a class="buy-tickets button" href="https://www.eventbrite.com/e/test-concert-tickets-<?php the_field('eventbrite_code'); ?>">Buy Tickets</a>
                        <a class="donate button" href="">Donate</a>
                    </div>
                    <div class="performance">
                        <p>Performed by:</p>
                        <p class="performed-by"><?php the_field('performed_by'); ?></p>
                    </div>
                    <div class="concert-details">
                        <p><?php the_field('concert_details'); ?></p>
                    </div>
                    <div class="concert-map">
                        <?php $location = get_field('concert_map');
                        if( !empty($location) ): ?>
                            <iframe src="//www.google.com/maps/embed/v1/place?q=<?php echo $location['lat'].',+'.$location['lng']; ?>
                                &zoom=14
                                &key=AIzaSyAp5N7aQOYPPaZO2IIvT8k8jjm-TMGtywg">
                            </iframe>   
                        <?php endif; ?>
                    </div>
                    <div class="concert-content">
                        <p class="concert-date"><?php the_field('concert_date'); ?></p>
                        <p class="concert-price"><?php the_field('concert_price'); ?></p>
                        <p class="concert-location"><?php the_field('concert_location'); ?></p>
                    </div>
                    <div class="buy-donate">
                        <a class="buy-tickets button" href="">Buy Tickets</a>
                        <a class="donate button" href="">Donate</a>
                    </div>
                </div>
            <?php endforeach; wp_reset_postdata()?>
        </div>
    </div>
</section>
<section class="community-modal">
    <div class="modal-container">
        <div id="community-modal-carousel" class="concerts-modal-container owl-carousel owl-theme owl-loaded owl-drag owl-height">
            <?php $concerts = get_posts(array(
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
                    <p class="concert-title"><?php the_title(); ?></p>
                    <div class="concert-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="concert-content">
                        <p class="concert-date"><?php the_field('concert_date'); ?></p>
                        <p class="concert-price"><?php the_field('concert_price'); ?></p>
                        <p class="concert-location"><?php the_field('concert_location'); ?></p>
                    </div>
                    <div class="buy-donate">
                        <a class="buy-tickets button" href="">Buy Tickets</a>
                        <a class="donate button" href="">Donate</a>
                    </div>
                    <div class="performance">
                        <p>Performed by:</p>
                        <p class="performed-by"><?php the_field('performed_by'); ?></p>
                    </div>
                    <div class="concert-details">
                        <p><?php the_field('concert_details'); ?></p>
                    </div>
                    <div class="concert-map">
                        <?php $location = get_field('concert_map');
                        if( !empty($location) ): ?>
                            <iframe src="//www.google.com/maps/embed/v1/place?q=<?php echo $location['lat'].',+'.$location['lng']; ?>
                                &zoom=14
                                &key=AIzaSyAp5N7aQOYPPaZO2IIvT8k8jjm-TMGtywg">
                            </iframe>   
                        <?php endif; ?>
                    </div>
                    <div class="concert-content">
                        <p class="concert-date"><?php the_field('concert_date'); ?></p>
                        <p class="concert-price"><?php the_field('concert_price'); ?></p>
                        <p class="concert-location"><?php the_field('concert_location'); ?></p>
                    </div>
                    <div class="buy-donate">
                        <a class="buy-tickets button" href="">Buy Tickets</a>
                        <a class="donate button" href="">Donate</a>
                    </div>
                </div>
            <?php endforeach; wp_reset_postdata()?>
        </div>
    </div>
</section>
<?php get_footer(); ?>