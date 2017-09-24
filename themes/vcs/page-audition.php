<?php
/**
 * The template for displaying the Audition page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
<div class="audition">
    <div class="header-container">
        <hr>
        <h2>Auditions</h2>
    </div>
    <?php $blocks = get_field('info_blocks');
    foreach( $blocks as $block ) :?>
        <div class="block">
            <div class="img-container">
                <div class="img-overlay">
                    <img src="<?php echo $block['image']; ?>" alt="">
                </div>
            </div>
            <div class="copy-container">
                <h3><?php echo $block['heading']; ?></h3>
                <p><?php echo $block['copy']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php get_footer(); ?>