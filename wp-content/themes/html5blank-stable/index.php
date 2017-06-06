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

<div class="container-fluid">
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



    <div class="partie_cours col-lg-12">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title_index" >Blog</h2>
            </div>
        </div>



        <div class="row_blog">

            <?php
            $my_query = new WP_Query(array(
                'post_type' => 'blog',
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'DESC',
            ));
            if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post(); ?>

                <div class="col-lg-10 col-lg-offset-1 blog_gardye">
                    <div class="col-lg-8 thumbnail_border">
                        <a href="<?php the_permalink() ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'full', array( 'class' => 'thumbnail' ) ); ?>
                            <?php endif; ?>                        </a>
                    </div>
                    <div class="col-lg-4 text">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>

            <?php endwhile; endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>

