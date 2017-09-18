<?php
/**
 * The template for displaying the Commission page.
 *
 * @package VCS_Theme
 */

get_header(); ?>

    <div class="heading-container">
        <h2>Commissioned Pieces</h2>
    </div>
    <div class="commission-copy-container">
        <p><?php echo get_field('commissions_copy'); ?></p>
    </div>
    <div class="commissioned-pieces">
        <ol>
            <?php $pieces = get_field('commissioned_pieces'); 
            foreach($pieces as $piece) : ?>
                <li>
                    <p class="date"><?php echo $piece['date']; ?></p>
                    <p class="title"><?php echo $piece['title']; ?></p>
                </li>
            <?php endforeach; wp_reset_postdata(); ?>
        </ol>
    </div>
<?php get_footer(); ?>