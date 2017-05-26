<?php
/*
Template Name: tarif
 */
?>
<?php get_header(); ?>
<div class="container_tarif">

        <div class="col-lg-12 header_tarif">
            <h1 class="text-box"><?php the_title(); ?></h1>
        </div>
            <h3>Les packs</h3>

        <div class="offre_flex">
            <div class=" col-lg-3  col-xs-12 containerTarif offre1" >
                <div class="textTarif">
                    <h4 class="text_tarif_titre"><?php the_field('titre_offre_1'); ?></h4>
                    <p class="text_tarif_content"><?php the_field('prix_offre_1'); ?></p>

                </div>
                <?php $image = wp_get_attachment_image_src(get_field('img_offre_1'), 'Miniature'); ?>
            </div>

            <div class="col-lg-3 col-xs-12  containerTarif offre2">
                <div class="textTarif">
                    <h4  class="text_tarif_titre"><?php the_field('titre_offre_2'); ?></h4>
                    <p class="text_tarif_content"><?php the_field('prix_offre_2'); ?></p>
                </div>
                <?php $image = wp_get_attachment_image_src(get_field('img_offre_2'), 'Miniature'); ?>
            </div>

            <div class="col-lg-3 col-xs-12 containerTarif offre3">
                <div class="textTarif">
                    <h4  class="text_tarif_titre"><?php the_field('titre_offre_3'); ?></h4>
                    <p class="text_tarif_content"><?php the_field('prix_offre_3'); ?></p>
                </div>
                <?php $image = wp_get_attachment_image_src(get_field('img_offre_3'), 'Miniature'); ?>
            </div>

            <div  class="col-lg-3 col-xs-12  containerTarif offre4">
                <div class="textTarif">
                    <h4  class="text_tarif_titre"><?php the_field('titre_offre_3'); ?></h4>
                    <p class="text_tarif_content"><?php the_field('prix_offre_3'); ?></p>
                </div>
                <?php $image = wp_get_attachment_image_src(get_field('img_offre_3'), 'Miniature'); ?>
            </div>
        </div>


</div>
<?php get_footer(); ?>
