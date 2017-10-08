<?php
/**
 * The template for displaying the Timeline page.
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
        <hr class="hr-left">
        <h2 >Timeline</h2>
        <hr class="hr-right">
    </div>
    <?php $timelines = get_field('timelines');
    foreach( $timelines as $timeline) : ?>
        <div class="timeline" id="<?php echo $timeline['sidebar_year']; ?>">
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
<div class="sidebar sidebar-right">
    <div class="date-sidebar-container">
        <?php foreach($timelines as $timeline) : ?>
            <a href="<?php echo '#'.$timeline['sidebar_year']; ?>"><?php echo $timeline['sidebar_year']; ?></a>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer(); ?>