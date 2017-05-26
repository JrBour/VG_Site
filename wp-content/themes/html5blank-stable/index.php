<?php
/*
Template Name: Index
 */
?>
<?php
/*
Template Name: Index
 */
?>
<?php get_header(); ?>

<!--Partie 1 - SLOGAN-->
<div class="containerSlogan">
    <div class="textSlogan">
        <h2><?php the_field('slogan_1'); ?></h2>
        <div class="border_index"></div>
        <h3><?php the_field('slogan_2'); ?></h3>
    </div>
</div>
<div class="container_index">
    <div class="col-md-12">
        <h2 class="title_index"><?php the_field('titre_content'); ?></h2>
    </div>
</div>




<div class="first_cours col-lg-12">


    <div class="col-lg-6 coaching_sportif">
        <h3><?php the_field('titre_content_1'); ?></h3>
        <p class="partie_sport">
            <?php the_field('text_content_1'); ?>
        </p>
    </div>
    <div class="col-lg-6 first_back"></div>
</div>

<div class="second_cours col-lg-12">
    <div class="col-lg-6 second_back"></div>
    <div class="col-lg-6 coaching_sportif2">
        <h3 id="partie_sport2"><?php the_field('titre_content_2'); ?></h3>
        <p class="partie_sport2">
            <?php the_field('text_content_2'); ?>
        </p>
    </div>
</div>


<div class="partie_cours">
    <div class="row">
        <div class="col-md-12">
            <h2 class="title_index" >Blog</h2>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6 col-md-offset-3" data-category="view">
            <div class="lib-panel">
                <div class="row box-shadow">
                    <div class="col-md-6">
                        <img class="lib-img-show" src="http://lorempixel.com/850/850/?random=123">
                    </div>
                    <div class="col-md-6">
                        <div class="lib-row lib-header">
                            Example library
                            <div class="lib-header-seperator"></div>
                        </div>
                        <div class="lib-row lib-desc">
                            Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

