<?php
/**
 * The template for displaying the FAQ page.
 *
 * @package VCS_Theme
 */

get_header(); ?>
<div class="faq">
    <div class="header-container">
        <hr>
        <h2>FAQs</h2>
    </div>
    <?php $faqs = get_field('faqs');
    foreach( $faqs as $faq ) : ?>
        <div class="qa">
            <p class="question"><span>Q.</span> <?php echo $faq['question']; ?></p>
            <p class="answer"><span>A.</span> <?php echo $faq['answer']; ?></p>
        </div>
    <?php endforeach; ?>
</div>
<?php get_footer(); ?>