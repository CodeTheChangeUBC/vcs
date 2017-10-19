<?php
/**
 * The template for displaying the Season Packages page.
 *
 * @package VCS_Theme
 */
get_header(); ?>
<div class="support-us">
    <div class="support-header-container">
        <h1 class="heading">Support Us</h1>
        <hr>
    </div>
    <div class="column-container">
        <div class="column">
            <?php echo get_field('column1_content'); ?>
        </div>
        <div class="column">
            <?php echo get_field('column2_content'); ?>
        </div>
    </div>
    <div class="row-content">
        <div class="bottom-row">
            <?php echo get_field('bottom_row_content'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>