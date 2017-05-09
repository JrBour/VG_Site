<?php
/*
Template Name: cours
 */
?>
<?php get_header(); ?>
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <div class="row">
                <div class="col-md-12">
                    <?php $image = wp_get_attachment_image_src(get_field('crossfit-img'), 'Miniature'); ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('crossfit-img')) ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php $image = wp_get_attachment_image_src(get_field('trx-img'), 'Miniature'); ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('trx-img')) ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php $image = wp_get_attachment_image_src(get_field('particulier-img'), 'Miniature'); ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('particulier-img')) ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php $image = wp_get_attachment_image_src(get_field('groupe-img'), 'Miniature'); ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('groupe-img')) ?>" />
                </div>
            </div>

        <?php endwhile; endif; ?>
    </div>
<?php get_footer(); ?>