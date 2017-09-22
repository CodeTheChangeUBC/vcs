<?php
/**
 * The template for displaying the Conductors page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
<div class="sidebar">
    <div class="history-link-container">
        <a href="<?php echo home_url('/timeline'); ?>">Timeline</a>
        <a href="<?php echo home_url('/conductors'); ?>">Conductors</a>
        <a href="<?php echo home_url('/commissions'); ?>">Commissions</a>
    </div>
</div>
<div class="content-container">
    <?php $conductors = get_field('conductors');
    foreach( $conductors as $conductor) : ?>
        <div class="conductor">
            <div class="conductor-year-container">
                <p><?php echo $conductor['display_years']; ?></p>
            </div>
            <div class="conductor-img-container">
                <div class="conductor-img-overlay">
                    <img src="<?php echo $conductor['img']; ?>" alt="">
                </div>
            </div>
            <div class="conductor-content-container">
                <h3><?php echo $conductor['name']; ?></h3>
                <?php 
                $trimmed = wp_trim_words( $conductor['copy'], $num_words = 25, $more = null ); ?>
                <p class="trimmed"><?php echo $trimmed; ?></p>
                <p class="untrimmed hide"><?php echo $conductor['copy']; ?></p>
                <div class="read-more-container">
                    <p class="read-more">Read More</p>
                    <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="sidebar"></div>

<?php get_footer(); ?>