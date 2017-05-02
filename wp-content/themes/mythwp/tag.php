<?php get_header(); ?>

<h1>Articles taggués par : <?php single_tag_title(); ?> </h1>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

    <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('medium'); ?>
        <?php endif; ?>
    </a>

<?php endwhile; endif; ?>

<?php get_footer(); ?>