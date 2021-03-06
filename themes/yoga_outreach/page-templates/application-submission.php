<?php
/**
 * Template Name: Successful Submission Templates
 *
 * @package Yoga_Outreach_Theme
 */
 
get_header(); ?>

<div class="form-success">
    <h2> Thank you for your application!</h2>
    <p>We will be in touch shortly.</p>
    <button class="small-button white-button"><a href="<?php echo get_page_link(10); ?>" class="button">Return to Home</a></button>
</div>

<?php get_footer(); ?>