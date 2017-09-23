<?php
/**
 * The template for displaying the Timeline page.
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
    <h2>Timeline</h2>
    <?php $timelines = get_field('timelines');
    foreach( $timelines as $timeline) : ?>
        <div class="timeline">
            <div class="timeline-year-container">
                <p><?php echo $timeline['display_years']; ?></p>
            </div>
            <div class="timeline-img-container">
                <div class="timeline-img-overlay">
                    <img src="<?php echo $timeline['img']; ?>" alt="">
                </div>
            </div>
            <div class="timeline-content-container">
                <h3><?php echo $timeline['title']; ?></h3>
                <?php 
                $trimmed = wp_trim_words( $timeline['copy'], $num_words = 25, $more = null ); ?>
                <p class="trimmed"><?php echo $trimmed; ?></p>
                <p class="untrimmed hide"><?php echo $timeline['copy']; ?></p>
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