<?php
/**
 * The template for displaying the Contact page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
<div class="contact">
    <h2>Contact Us</h2>
    <p class="address"><?php echo get_field('contact_address'); ?></p>
    <p class="tel"><?php echo get_field('contact_tel'); ?></p>
    <p class="email"><?php echo get_field('contact_email'); ?></p>
</div>
<?php get_footer(); ?>