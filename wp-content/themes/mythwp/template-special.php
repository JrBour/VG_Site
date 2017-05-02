<?php
/*
    Template Name: Spécial
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

    <h1>Page spéciale : <?php the_title(); ?></h1>

    <?php the_content(); ?>

<?php endwhile; endif; ?>


<?php get_footer(); ?>