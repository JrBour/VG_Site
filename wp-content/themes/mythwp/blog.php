<?php
/*
    Template Name: Blog
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

    <h1>Bienvenue sur le blog</h1>

    <?php the_content(); ?>

<?php endwhile; endif; ?>

<?php
$my_query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
));

if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post(); ?>

    <article>
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('thumbnail'); ?>
        <?php endif; ?>
        <h4 style=" color: <?php $coucou ?>"><?php the_title(); ?></h4>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Lire la suite</a>
    </article>
    <?php $coucou = the_field('selection_de_couleur') ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>



