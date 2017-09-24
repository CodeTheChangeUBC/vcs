<?php
/**
 * The template for displaying the Our Music page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
<div class="content">
    <div class="repetoire">
        <div class="header-container">
            <hr>
            <h2>Our Repetoire</h2>
        </div>
        <div class="repetoire-copy">
            <p>Vancouver Cantata Singers also perform contemporary music, working frequently with local Canadian composers. Below are some of our favourited composers:</p>
        </div>
        <div class="repetoire-carousel">
            <?php $composers = get_field('composers');
            foreach( $composers as $composer ) : ?>
                <div class="composer">
                    <div class="img-container">
                        <div class="img-overlay">
                            <img src="<?php echo $composer['img']; ?>" alt="">
                        </div>
                    </div>
                    <p class="name"><?php echo $composer['name']; ?></p>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="listen">
        <div class="header-container">
            <hr>
            <h2>Listen</h2>
        </div>
        <div class="tracks-carousel">
            <?php $tracks = get_field('tracks');
            foreach( $tracks as $track ) : ?>
                <div class="track">
                    <?php echo $track['track']; ?>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
        <div class="bandcamp">
            <p>Find all our albums on <a href="https://vancouvercantatasingers.bandcamp.com">bandcamp.ca</a> </p>
        </div>
    </div>
    <div class="watch">
        <div class="header-container">
            <hr>
            <h2>Watch</h2>
        </div>
        <div class="video-carousel">
            <?php $videos = get_field('videos');
            foreach( $videos as $video ) : ?>
                <div class="video">
                    <?php echo $video['video']; ?>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>