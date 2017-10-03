<?php
/**
 * The template for displaying the Season Packages page.
 *
 * @package VCS_Theme
 */

get_header(); ?>

<div class="season-header-container">
    <hr>
    <h2>Season Pack</h2>
</div>
<section class="season-copy-container">
    <p class="season-copy"><?php the_field('season_copy'); ?></p>
    <p class="benefits-heading">Season pack benefits:</p>
    <div class="benefits">
        <ul>
        <?php $benefits = get_field('season_pack_benefits');
        foreach( $benefits as $benefit ) : ?>
            <li><?php echo $benefit['benefit']; ?></li>
        <?php endforeach; wp_reset_postdata(); ?>
        </ul>
    </div>
</section>
<section class="packs">
    <div class="pack-tabs-container">
        <div class="pack3-tab pack-tab pack-selected">
            <p class="pack-number">3</p>
            <p class="pack-pack">pack</p>
            <p class="discount">save 20%</p>
        </div>
        <div class="pack4-tab pack-tab">
            <p class="pack-number">4</p>
            <p class="pack-pack">pack</p>
            <p class="discount">save 25%</p>
        </div>
        <div class="pack5-tab pack-tab">
            <p class="pack-number">5</p>
            <p class="pack-pack">pack</p>
            <p class="discount">save 30%</p>
        </div>
    </div>
    <div class="pack-tabs-desktop-container">
        <div class="desktop-tabs" >
            <div class="desktop-tabs-content" >
                <p class="pack-number">3 Pack</p>
                <p class="pack-discount">save 20%</p>
            </div>
        </div>
        <div class="desktop-tabs" >
            <div class="desktop-tabs-content" >
                <p class="pack-number">4 pack</p>
                <p class="pack-discount">save 25%</p>
            </div>
        </div>
        <div class="desktop-tabs" >
            <div class="desktop-tabs-content" >
                <p class="pack-number">5 pack</p>
                <p class="pack-discount">save 30%</p>
            </div>
        </div>
    </div>
    <div class="pack-info-container">
        <div class="pack3-info pack-info">
            <div class="pack-content">
                <?php $pack3 = get_field('3_pack_concerts'); ?>
                <div class="pack-rows-container">
                    <?php foreach( $pack3 as $p3 ) : ?>
                        <div class="pack-row">
                            <p class="concert-name"><?php echo $p3['concert_name']; ?></p>
                            <p class="concert-date"><?php echo $p3['concert_date']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <p class="pack-copy" ><?php echo get_field('3_pack_copy'); ?></p>
                <div class="zone-pricing-container">
                    <?php $zoneInfo = get_field('3_pack_prices'); ?>
                    <div class="zone">
                        <?php foreach($zoneInfo as $zone) :
                            if($zoneInfo[0]['zone']) : ?>
                                <p><?php echo $zone['zone']; ?></p>
                            <?php else : ?>
                                <p>.</p>
                            <?php endif;
                        endforeach; wp_reset_postdata(); ?>
                    </div>
                    <div class="zone-price">
                        <?php foreach( $zoneInfo as $zone ) : ?>
                            <p><?php echo $zone['price']; ?></p>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                    <div class="surcharge">
                        <p>Price excludes ticket surcharges</p>
                    </div>
                </div>
                <div class="button-container">
                    <a href="<?php the_field('3pack_eventbrite_season_code'); ?>" class="button-green button" >Buy 3 Pack</a>
                </div>
            </div>
        </div>
        <div class="pack4-info pack-info">
            <div class="pack-content">
                <?php $pack4 = get_field('4_pack_concerts'); ?>
                <div class="pack-rows-container">
                    <?php foreach( $pack4 as $p4 ) : ?>
                        <div class="pack-row">
                            <p class="concert-name"><?php echo $p4['concert_name']; ?></p>
                            <p class="concert-date"><?php echo $p4['concert_date']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <p class="pack-copy" ><?php echo get_field('4_pack_copy'); ?></p>
                <div class="zone-pricing-container">
                    <?php $zoneInfo = get_field('4_pack_prices'); ?>
                    <div class="zone">
                        <?php foreach($zoneInfo as $zone) :
                            if($zoneInfo[0]['zone']) : ?>
                                <p><?php echo $zone['zone']; ?></p>
                            <?php else : ?>
                                <p>.</p>
                            <?php endif;
                        endforeach; wp_reset_postdata(); ?>
                    </div>
                    <div class="zone-price">
                        <?php foreach( $zoneInfo as $zone ) : ?>
                            <p><?php echo $zone['price']; ?></p>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                    <div class="surcharge">
                        <p>Price excludes ticket surcharges</p>
                    </div>
                </div>
                <div class="button-container">
                    <a href="https://www.eventbrite.com/e/test-concert-tickets-<?php the_field('4pack_eventbrite_season_code'); ?>" class="button-green button" >Buy 4 Pack</a>
                </div>
            </div>
        </div>
        <div class="pack5-info pack-info">
            <div class="pack-content">
                <?php $pack5 = get_field('5_pack_concerts'); ?>
                <div class="pack-rows-container">
                    <?php foreach( $pack5 as $p5 ) : ?>
                        <div class="pack-row">
                            <p class="concert-name"><?php echo $p5['concert_name']; ?></p>
                            <p class="concert-date"><?php echo $p5['concert_date']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <p class="pack-copy" ><?php echo get_field('5_pack_copy'); ?></p>
                <div class="zone-pricing-container">
                    <?php $zoneInfo = get_field('5_pack_prices'); ?>
                    <div class="zone">
                        <?php foreach($zoneInfo as $zone) :
                            if($zoneInfo[0]['zone']) : ?>
                                <p><?php echo $zone['zone']; ?></p>
                            <?php else : ?>
                                <p>.</p>
                        <?php endif;
                        endforeach; wp_reset_postdata(); ?>
                    </div>
                    <div class="zone-price">
                        <?php foreach( $zoneInfo as $zone ) : ?>
                            <p><?php echo $zone['price']; ?></p>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                    <div class="surcharge">
                        <p>Price excludes ticket surcharges</p>
                    </div>
                </div>
                <div class="button-container">
                    <a href="https://www.eventbrite.com/e/test-concert-tickets-<?php the_field('5pack_eventbrite_season_code'); ?>" class="button-green button" >Buy 5 Pack</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $zoneSeating = get_field('zone_seating');
if($zoneSeating) : ?>
    <section class="zone-seating">
        <p class="zone-seating-text">Zoned seating plan:</p>
        <div class="zone-seating-carousel">
            <?php foreach( $zoneSeating as $zoneSeat ) : ?>
                <div class="zone-seat">
                    <div class="image-container">
                        <img src="<?php echo $zoneSeat['zone_map_image']; ?>" alt="">
                    </div>
                    <div class="zone-copy">
                        <p><?php echo $zoneSeat['concert_name']; ?></p>
                        <p><?php echo $zoneSeat['concert_location']; ?></p> 
                    </div>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>