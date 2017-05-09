<?php
/*
Template Name: presentation
 */
?>
<?php get_header(); ?>
<div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
    <div class="row">
        <div class="col-md-6">
            <?php $image = wp_get_attachment_image_src(get_field('image_1'), 'Miniature'); ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_1')) ?>" />
        </div>
        <div class="col-md-6">
            <?php $image = wp_get_attachment_image_src(get_field('image_2'), 'Miniature'); ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_2')) ?>" />
        </div>
    </div>
        <div class="row">
            <?php the_content(); ?>
        </div>

    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
