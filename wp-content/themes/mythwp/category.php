<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

    <h1><?php the_title(); ?></h1>

    <?php the_excerpt(); ?>

    <a href="<?php the_permalink(); ?>">Lire la suite</a>

<?php endwhile; endif; ?>

<?php get_footer(); ?>