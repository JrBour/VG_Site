<?php
/*
Template Name: cours
 */
get_header(); ?>
    <div class="containerBox">
        <h1 class="text-box"><?php the_title(); ?></h1>
    </div>
    <div class="row">
        <div class="col-lg-12 crossfit">
            <div class="textCour">
                <div class="col-lg-6 background">
                    <h4><?php the_field('titre_cours_1'); ?></h4>
                    <div class="gradien"></div>
                    <p><?php the_field('text_1'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 TRX">
            <div class="text2Cour">
                <div class="col-lg-6 col-lg-offset-6 background2">
                    <h4><?php the_field('titre_cour_2'); ?></h4>
                    <div class="gradien2"></div>
                    <p class="text_cour"><?php the_field('texte_2'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row cpg">
        <div class="col-lg-12">
            <div class="textCour">
                <div class="col-lg-6 background">
                    <h4><?php the_field('titre_cour_3'); ?></h4>
                    <div class="gradien"></div>
                    <p><?php the_field('text_3'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row cpgg">
        <div class="col-lg-12">
            <div class="text2Cour">
                <div class="col-lg-6 col-lg-offset-6 background2">
                    <h4><?php the_field('titre_cours_4'); ?></h4>
                    <div class="gradien2"></div>
                    <p class="text-right"><?php the_field('text_4'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row pilates">
        <div class="col-lg-12">
            <div class="textCour">
                <div class="col-lg-6 background">
                    <h4><?php the_field('titre_cours_5'); ?></h4>
                    <div class="gradien"></div>
                    <p class="text-right"><?php the_field('text_champ_5'); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>