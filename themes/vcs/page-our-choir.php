<?php
/**
 * The template for displaying the Our Choire page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
    <h2 class="head-head">About Us</h2>
    <section id="about" class="about">
        <div class="about-content">
            <div class="circle-img-container">
                <img src="<?php the_field('about_image', get_the_id()); ?>" alt="">
            </div>
            <div class="about-text-container">
                <h3><?php the_field('about_title', get_the_id()); ?></h3>
                <p class="mobile-about"><?php the_field('about_content', get_the_id()); ?></p>
                <p class="desktop-about"><?php the_field('about_content_desktop', get_the_id()); ?></p>
            </div>
        </div>
        <div class="next-slide-container">
            <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
        </div>
    </section>
    <section id="director" class="director">
        <div class="about-content">
            <div class="circle-img-container">
                <img src="<?php the_field('director_image', get_the_id()); ?>" alt="">
            </div>
            <div class="about-text-container">
                <h3><?php the_field('director_title', get_the_id()); ?></h3>
                <p><?php the_field('director_content', get_the_id()); ?></p>
            </div>
        </div>
        <div class="next-slide-container">
            <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
        </div>
    </section>
    <section id="choir" class="choir">
        <div class="about-content">
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
                        <div class="choir-img-container">
                            <?php the_post_thumbnail('small'); ?>
                        </div>
                        <div class="about-text-container">
                            <p><?php the_title(); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="member-carousel-container modal-container hide">
                
                <div class="member-modal">
                    <div class="modal-close">
                        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="member-carousel-modal">
                    <?php foreach( $members as $post ) : ?>
                        <div class="member">
                            <p class="member-name"><?php the_title(); ?></p>
                            <div class="modal-img">
                                <div class="choir-img-container">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                            <p class="member-content"><?php echo $post->post_content; ?></p>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="next-slide-container">
            <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
        </div>
    </section>
    <section id="composer" class="composer">
        <div class="about-content">
            <div class="circle-img-container">
                <img src="<?php the_field('composer_image', get_the_id()); ?>" alt="">
            </div>
            <div class="about-text-container">
                <h3><?php the_field('composer_heading', get_the_id()); ?></h3>
                <p><?php the_field('composer_content', get_the_id()); ?></p>
            </div>
        </div>
        <div class="next-slide-container">
            <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
        </div>
    </section>
    <section id="awards" class="awards">
        <div class="about-content">
            <div class="about-text-container">
                <h2>Awards</h2>
                <p><?php the_field('awards_copy'); ?></p>
                <?php while ( have_rows('awards') ) : the_row(); ?>
                    <div class="awards-post">
                        <p class="award-year"><?php the_sub_field('year'); ?></p>
                        <p class="award-title"><?php the_sub_field('title'); ?></p>
                        <p class="award-cat"><?php the_sub_field('category'); ?></p>
                    </div>
                <?php endwhile; wp_reset_postdata()?>
            </div>
        </div>
        <div class="next-slide-container">
            <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
        </div>
    </section>
    <section id="press" class="press">
        <div class="about-content">
            <div class="about-text-container">
                <h2>Press</h2>
                <?php $pressPost = get_field('press');
                foreach( $pressPost as $press ) : ?>
                    <div class="press-post">
                        <?php if($press['source_link']) : ?>
                            <a href="<?php echo $press['source_link']; ?>" class="source">
                                <p class="press-source"><?php echo $press['source']; ?></p>
                                <p class="press-title"><?php echo $press['title']; ?></p>
                            </a>
                        <?php else : ?>
                            <p class="press-source"><?php echo $press['source']; ?></p>
                            <p class="press-title"><?php echo $press['title']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
                <hr>
            </div>
        </div>
        <div class="next-slide-container">
            <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
        </div>
    </section>
    <section id="photos" class="photos">
        <div class="about-content">
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
    </section>
<?php get_footer(); ?>