<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

<p><a href="<?php the_permalink(101)?>">Retour vers portfolio</a></p>


    <h1 class="vert"><?php the_title(); ?></h1>

    <?php the_post_thumbnail('medium'); ?>

    <?php the_content(); ?>

    <p>Publié par <?php the_author_meta('first_name'); ?>
        le <?php the_date('d/m/y \à h:i'); ?></p>



    <?php $currentID = get_the_ID(); ?>


<?php endwhile; endif; ?>

<h2>Articles à lire</h2>
<?php
$my_query = new WP_Query(array(
    'post_type' => 'Projet',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC',
    'post__not_in' => array($currentID)
));
if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post(); ?>

    <article>
        <a href="<?php the_permalink(); ?>">
            <h4><?php the_title(); ?></h4>
        </a>
    </article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>

