<?php
/**
 * The template for displaying the Blog page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
<div class="blog-header-container">
    <hr>
    <h2>Blog</h2>
</div>
<?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
    'posts_per_page' => 3,
    'paged'          => $paged,
    'post_type' => 'post'
    );

    $blog_query = new WP_Query( $args ); 
?>
<?php if ( $blog_query->have_posts() ) :
    while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
        <div class="blog-post">
            <p class="blog-date"><?php echo get_the_date('F j Y'); ?></p>
            <div class="blog-image-container">
                <?php if( get_the_post_thumbnail_url() ) : ?>
                    <a href="<?php echo get_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </a>
                <?php endif; ?>
            </div>
            <div class="blog-content">
                <p class="desktop-date"><?php echo get_the_date('F j Y'); ?></p>
                <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                <p class="blog-excerpt"><?php echo get_the_excerpt(); ?></p>
                <hr>
            </div>
        </div>
    <?php endwhile; ?>
    <div class="next-prev">
        <?php previous_posts_link( '< Newer Posts' );
        next_posts_link( 'Older Posts >', $blog_query->max_num_pages ); ?>
    </div>
<?php else : ?>
    <h3>No Blog Posts</h3>

<?php endif; ?>

<?php get_footer(); ?>