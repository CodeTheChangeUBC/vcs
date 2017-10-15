<?php
/**
 * The template for displaying the Contact page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
<div class="contact">
    <h2>Contact Us</h2>
    <?php $contacts = get_field('contact');
    foreach( $contacts as $contact) : ?>
        <p><?php echo $contact['text']; ?></p>
    <?php endforeach; ?>
</div>

<?php get_footer(); ?>