<?php
/*
Template Name: tarif
 */
?>
<?php get_header(); ?>
<div class="container_tarif">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="containerBox">
            <h2 class="text-box"><?php the_title(); ?></h2>
            <div class="containerImg"><?php $image = wp_get_attachment_image_src(get_field('image_background_title'), 'Miniature'); ?></div>
            <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_background_title')) ?>" />
        </div>
            <div class="Tarif_flex">
                <h3>Les packs</h3>
            </div>
        <div class="offre_flex">
            <a href="#" id="offre1" class=" col-md-3 containerTarif" >
                <div class="textTarif">
                    <h4 class="text_tarif_titre"><?php the_field('standard'); ?></h4>
                    <p class="text_tarif_content"><?php the_field('prix_standard'); ?></p>

                </div>
                <?php $image = wp_get_attachment_image_src(get_field('image_1'), 'Miniature'); ?>
                <img class="img_tarif" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_1')) ?>" />
            </a>
            <a href="#" id="offre2" class="col-md-3 containerTarif">
                <div class="textTarif">
                    <h4  class="text_tarif_titre"><?php the_field('prenium'); ?></h4>
                    <p class="text_tarif_content"><?php the_field('prix_prenium'); ?></p>
                </div>
                <?php $image = wp_get_attachment_image_src(get_field('image_2'), 'Miniature'); ?>
                    <img class="img_tarif" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_2')) ?>" />
            </a>
            <a href="#" id="offre3" class="col-md-3 containerTarif">
                <div class="textTarif">
                    <h4  class="text_tarif_titre"><?php the_field('platinum'); ?></h4>
                    <p class="text_tarif_content"><?php the_field('prix_platinium'); ?></p>
                </div>
                <?php $image = wp_get_attachment_image_src(get_field('image_3'), 'Miniature'); ?>
                <img class="img_tarif" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_3')) ?>" />
            </a>
        </div>
        <div class="row tarif-content" id="text-content">
        </div>

    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
