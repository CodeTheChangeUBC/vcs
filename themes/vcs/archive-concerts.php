<?php
/**
 * The template for displaying the Concerts page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
<section class="concerts">
    <div class="concert-header-container">
        <hr>
        <h2>concerts</h2>
    </div>
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
            <div class="modal-container hide">
                <div class="modal-close">
                    <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                </div>
                <div class="concert-modal-container">
                    <div class="concert-modal">
                        <p class="concert-title"><?php the_title(); ?></p>
                        <div class="concert-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="concert-content-container">
                            <div class="concert-content">
                                <div class="price-date">
                                    <p class="concert-date"><?php the_field('concert_date'); ?></p>
                                    <p class="concert-price"><?php the_field('concert_price'); ?></p>
                                </div>
                                <p class="concert-location"><?php the_field('concert_location'); ?></p>
                            </div>
                            <div class="buy-tickets">
                                <a target="_blank" class="buy-tickets button button-green" href="<?php the_field('eventbrite_url'); ?>">Buy Tickets</a>
                                <a target="_blank" class="season button button-green" href="<?php echo home_url('/season'); ?>">Buy Season Pass</a>
                            </div>
                            <div class="performance">
                                <p class="perf">Performed by:</p>
                                <p class="performed-by"><?php the_field('performed_by'); ?></p>
                            </div>
                            <div class="concert-details">
                                <p><?php the_field('concert_details'); ?></p>
                            </div>
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
                        <div class="concert-content2">
                            <div class="price-date">
                                <p class="concert-date"><?php the_field('concert_date'); ?></p>
                                <p class="concert-price"><?php the_field('concert_price'); ?></p>
                            </div>
                            <p class="concert-location"><?php the_field('concert_location'); ?></p>
                        </div>
                        <div class="buy-tickets2">
                            <a target="_blank" class="buy-tickets button button-green" href="<?php the_field('eventbrite_url'); ?>">Buy Tickets</a>
                            <a target="_blank" class="season button button-green" href="<?php echo home_url('/season'); ?>">Buy Season Pass</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; wp_reset_postdata()?>
</section>
<div class="button-container">
    <a target="_blank" class="season-button button-green button" href="<?php echo home_url('/season'); ?>">Buy Season Pass</a>
</div>
<section class="community">
    <div class="concert-header-container">
        <hr>
        <h2>community</h2>
    </div>
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
            <div class="modal-container hide">
                <div class="modal-close">
                    <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                </div>
                <div class="concert-modal-container">
                    <div class="concert-modal">
                        <p class="concert-title"><?php the_title(); ?></p>
                        <div class="concert-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="concert-content-container">
                            <div class="concert-content">
                                <div class="price-date">
                                    <p class="concert-date"><?php the_field('concert_date'); ?></p>
                                    <p class="concert-price"><?php the_field('concert_price'); ?></p>
                                </div>
                                <p class="concert-location"><?php the_field('concert_location'); ?></p>
                            </div>
                            <div class="buy-tickets">
                                <a target="_blank" class="buy-tickets button button-green" href="<?php the_field('eventbrite_url'); ?>">Buy Tickets</a>
                                <a target="_blank" class="season button button-green" href="<?php echo home_url('/season'); ?>">Buy Season Pass</a>
                            </div>
                            <div class="performance">
                                <p class="perf">Performed by:</p>
                                <p class="performed-by"><?php the_field('performed_by'); ?></p>
                            </div>
                            <div class="concert-details">
                                <p><?php the_field('concert_details'); ?></p>
                            </div>
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
                        <div class="concert-content2">
                            <div class="price-date">
                                <p class="concert-date"><?php the_field('concert_date'); ?></p>
                                <p class="concert-price"><?php the_field('concert_price'); ?></p>
                            </div>
                            <p class="concert-location"><?php the_field('concert_location'); ?></p>
                        </div>
                        <div class="buy-tickets2">
                            <a target="_blank" class="buy-tickets button button-green" href="<?php the_field('eventbrite_url'); ?>">Buy Tickets</a>
                            <a target="_blank" class="season button button-green" href="<?php echo home_url('/season'); ?>">Buy Season Pass</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; wp_reset_postdata()?>
</section>
<?php get_footer(); ?>