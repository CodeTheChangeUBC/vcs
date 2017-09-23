<?php
/**
 * The template for displaying the History Page.
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
<section id="timeline">
    <?php 
    $timelineID = get_page_by_path( 'timeline' );
    $timeline = get_field('timelines', $timelineID);
    $first_timeline = $timeline[0];
    ?>
    <div class="header-container">
        <hr class="hr-left">
        <h2 >Timeline</h2>
        <hr class="hr-right">
    </div>
    <div class="timeline-year-container">
        <p><?php echo $first_timeline['display_years']; ?></p>
    </div>
    <div class="timeline-img-container">
        <div class="timeline-img-overlay">
            <img src="<?php echo $first_timeline['img']; ?>" alt="">
        </div>
    </div>
    <div class="timeline-content-container">
        <h3><?php echo $first_timeline['title']; ?></h3>
        <?php 
        $trimmed = wp_trim_words( $first_timeline['copy'], $num_words = 25, $more = null ); ?>
        <p class="trimmed"><?php echo $trimmed; ?></p>
        <p class="untrimmed hide"><?php echo $first_timeline['copy']; ?></p>
        <div class="read-more-container">
            <p class="read-more">Read More</p>
            <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
        </div>
        <div class="button-container">
            <a class="season-button button-green button" href="<?php echo home_url('/timeline'); ?>">See More</a>
        </div>
    </div>
</section>
<section id="conductor">
    <?php 
    $conductorID = get_page_by_path( 'conductors' );
    $conductor = get_field('conductors', $conductorID);
    $first_conductor = $conductor[0];
    ?>
    <div class="header-container">
        <hr class="hr-left">
        <h2 >Conductors</h2>
        <hr class="hr-right">
    </div>
    <div class="conductor-year-container">
        <p><?php echo $first_conductor['display_years']; ?></p>
    </div>
    <div class="conductor-img-container">
        <div class="conductor-img-overlay">
            <img src="<?php echo $first_conductor['img']; ?>" alt="">
        </div>
    </div>
    <div class="conductor-content-container">
        <h3><?php echo $first_conductor['name']; ?></h3>
        <?php 
        $trimmed = wp_trim_words( $first_conductor['copy'], $num_words = 25, $more = null ); ?>
        <p class="trimmed"><?php echo $trimmed; ?></p>
        <p class="untrimmed hide"><?php echo $first_conductor['copy']; ?></p>
        <div class="read-more-container">
            <p class="read-more">Read More</p>
            <i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
        </div>
        <div class="button-container">
            <a class="season-button button-green button" href="<?php echo home_url('/conductors'); ?>">See More</a>
        </div>
    </div>
</section>
<section id="commissions">
    <?php 
    $commissionsID = get_page_by_path( 'commissions' );
    $piece = get_field('commissioned_pieces', $commissionsID);
    ?> 
    <div class="header-container">
        <hr class="hr-left">
        <h2 >Commissioned <br> Pieces</h2>
        <hr class="hr-right">
    </div>
    <div class="commission-copy-container">
        <p><?php echo get_field('commissions_copy', $commissionsID); ?></p>
    </div>
    <div class="commissioned-pieces">
        <ul>
            <li>
                <p class="date"><?php echo $piece[0]['date']; ?></p>
                <p class="title"><?php echo $piece[0]['title']; ?></p>
            </li>
            <li>
                <p class="date"><?php echo $piece[1]['date']; ?></p>
                <p class="title"><?php echo $piece[1]['title']; ?></p>
            </li>
            <li>
                <p class="date"><?php echo $piece[2]['date']; ?></p>
                <p class="title"><?php echo $piece[2]['title']; ?></p>
            </li>
        </ul>
        <div class="button-container">
            <a class="season-button button-green button" href="<?php echo home_url('/commissions'); ?>">See More</a>
        </div>
    </div>
</section>
<div class="sidebar sidebar-right"></div>
<?php get_footer(); ?>