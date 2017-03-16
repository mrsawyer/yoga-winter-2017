<?php /* Template Name: Contact Us ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image hero-text">
                <h1 class="header-title"><?php the_title(); ?></h1>
                <p>We can be reached at</p>
                <p><?php echo CFS()->get( 'phone_number' ); ?></p>
            </header>
            
            <section class="email-inquiries">
                <h2>Email Inquiries</h2>
                <p>For staff directory, visit:</p>
                <a href="<?php echo get_permalink() ?>">who we are</a>

                <?php $fields= CFS()->get( 'emails' ); ?>  <!--variable to hold email from loop-->    

                <?php if(!empty($fields)): ?>
                    <?php foreach( $fields as $field ): ?>
                        <p><?php echo $field['email']; ?></p>
                        <p><?php echo $field['email_for']; ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>