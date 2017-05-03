<?php
/*
Template Name: cours
 */
?>
<?php get_header(); ?>
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>

            <?php get_template_part('loop'); ?>
        <?php endwhile; endif; ?>
    </div>
<?php get_footer(); ?>