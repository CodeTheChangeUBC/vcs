<?php
/**
 * The template for displaying the Our Choire page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
    <h2>About Us</h2>
    <div class="about">
        <img src="<?php the_field('about_image', get_the_id()); ?>" alt="">
        <h3><?php the_field('about_heading', get_the_id()); ?></h3>
        <p><?php the_field('about_content', get_the_id()); ?></p>
    </div>
    <div class="director">
        <img src="<?php the_field('director_image', get_the_id()); ?>" alt="">
        <h3><?php the_field('director_heading', get_the_id()); ?></h3>
        <p><?php the_field('director_content', get_the_id()); ?></p>
    </div>
    <div class="choir">
        <h2>The Choir</h2>
        <div id="member-carousel">
            <?php $args = array (
                'post_type' => 'members',
                'post_status' => 'publish',
                'posts_per_page' => -1
            );
            $members = get_posts( $args );
            foreach( $members as $post ) : ?>
                <div class="member">
                    <?php the_post_thumbnail(); ?>
                    <p><?php the_title(); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="member-modal">
            <div class="member-carousel-modal">
            <?php foreach( $members as $post ) : ?>
                <div class="member">
                    <p><?php the_title(); ?></p>
                    <?php the_post_thumbnail(); ?>
                    <p><?php echo $post->post_content; ?></p>
                </div>
            <? endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <div class="composer">
        <img src="<?php the_field('composer_image', get_the_id()); ?>" alt="">
        <h3><?php the_field('composer_heading', get_the_id()); ?></h3>
        <p><?php the_field('composer_content', get_the_id()); ?></p>
    </div>
    <div class="awards">
        <h2>Awards</h2>
        <p><?php the_field('awards_copy'); ?></p>
        <?php while ( have_rows('awards') ) : the_row(); ?>
            <div class="awards-post">
                <p><?php the_sub_field('year'); ?></p>
                <p><?php the_sub_field('title'); ?></p>
                <p><?php the_sub_field('category'); ?></p>
            </div>
        <?php endwhile; wp_reset_postdata()?>
    </div>
    <div class="press">
        <h2>Press</h2>
        <?php while ( have_rows('press') ) : the_row(); ?>
            <div class="press-post">
                <p><?php the_sub_field('source'); ?></p>
                <p><?php the_sub_field('title'); ?></p>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <div class="read-more">
            <p>Read more</p>
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </div>
    </div>
    <div class="photos">
        <h2>Photos</h2>
        <div id="our-choir-photo-carousel">
            <?php $images = get_field('photos');
            if( $images ):
                foreach( $images as $image ): ?>
                    <div class="photo">
                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>