<?php
/*
Template Name: cours
 */
?>
<?php get_header(); ?>
            <div class="containerBox">
                <h2 class="text-box"><?php the_title(); ?></h2>
                <?php $image = wp_get_attachment_image_src(get_field('background-titre-img'), 'Miniature'); ?>
                <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('background-titre-img')) ?>" />
            </div>
            <div class="row">
                <div class="col-md-12 crossfit">
                    <div class="textCour">
                        <div class="background">
                            <h4><?php the_field('titre_cours_1'); ?></h4>
                                    <div class="gradien"></div>
                                <p><?php the_field('text_1'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 TRX">
                    <div class="text2Cour">
                        <div class="background2">
                            <h4><?php the_field('titre_cour_2'); ?></h4>
                                <div class="gradien2"></div>
                                <p class="text_cour"><?php the_field('texte_2'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="textCour">
                        <div class="background">
                            <h4><?php the_field('titre_cour_3'); ?></h4>
                            <div class="gradien"></div>
                            <p><?php the_field('text_3'); ?></p>
                        </div>
                    </div>
                    <?php $image = wp_get_attachment_image_src(get_field('cour_3_img'), 'Miniature'); ?>
                    <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('cour_1_img')) ?>" />
                </div>
            </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text2Cour">
                <div class="background2">
                    <h4><?php the_field('titre_cours_4'); ?></h4>
                    <div class="gradien2"></div>
                    <p class="text-right"><?php the_field('text_4'); ?></p>
                </div>
            </div>
            <?php $image = wp_get_attachment_image_src(get_field('cour_4_img'), 'Miniature'); ?>
            <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('cour_1_img')) ?>" />
        </div>
    </div>
<?php get_footer(); ?>