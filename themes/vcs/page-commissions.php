<?php
/**
 * The template for displaying the Commission page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
<div class="sidebar sidebar-left">
    <div class="history-link-container">
        <a href="<?php echo home_url('/timeline'); ?>">Timeline</a>
        <a href="<?php echo home_url('/conductors'); ?>">Conductors</a>
        <a href="<?php echo home_url('/commissions'); ?>">Commissions</a>
    </div>
</div>
<div class="content-container">
    <div class="header-container">
        <h2 >Commissioned <br> Pieces</h2>
    </div>
    <div class="commission-copy-container">
        <p><?php echo get_field('commissions_copy'); ?></p>
    </div>
    <div class="commissioned-pieces">
        <ul>
            <?php $pieces = get_field('commissioned_pieces'); 
            foreach($pieces as $piece) : ?>
                <li>
                    <p class="date"><?php echo $piece['date']; ?></p>
                    <p class="title"><?php echo $piece['title']; ?></p>
                </li>
            <?php endforeach; wp_reset_postdata(); ?>
        </ul>
    </div>
</div>
<div class="sidebar sidebar-right"></div>
<?php get_footer(); ?>