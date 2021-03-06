<?php
/*
Template Name: No Slideshow
*/
?>

<?php get_header(); ?>

        <div id="primary-nosidebar" class="content-area">
            <div id="content" class="site-content" role="main">
 
                <?php while ( have_posts() ) : the_post(); ?>
 
                    <?php get_template_part( 'content', 'page' ); ?>
 
                <?php endwhile; // end of the loop. ?>
 
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->

<?php get_footer(); ?>