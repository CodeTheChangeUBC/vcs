<?php
/**
 * The template for displaying the Blog page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
<h2>Blog</h2>
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
        <p><?php echo get_the_date('F j Y'); ?></p>
        <div class="blog-image-container">
            <?php if( get_the_post_thumbnail_url() ) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            <?php endif; ?>
        </div>
        <div class="blog-content">
            <h3><?php echo get_the_title(); ?></h3>
            <p><?php echo get_the_excerpt(); ?></p>
        </div>
    <?php endwhile;
    previous_posts_link( '< Newer Posts' );
    next_posts_link( 'Older Posts >', $blog_query->max_num_pages );
else : ?>
    <h3>No Blog Posts</h3>

<?php endif; ?>

<?php get_footer(); ?>