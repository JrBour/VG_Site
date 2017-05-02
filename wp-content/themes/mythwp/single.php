<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>




    <h1 class="vert"><?php the_title(); ?></h1>

    <?php the_post_thumbnail('medium'); ?>

    <?php the_content(); ?>

    <p>Publié par <?php the_author_meta('first_name'); ?>
            le <?php the_date('d/m/y \à h:i'); ?></p>

    <h2>Pour en savoir plus : <a href="<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a></h2>



    <?php
        $currentID = get_the_ID();
		$categories = get_the_category();
		$category_ID = $categories[0]->cat_id;
    ?>


<?php endwhile, endif ?>

    <div>
        <ul>
            <li>

            </li>
        </ul>
    </div>

<h2>Articles à lire</h2>
<?php
$my_query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'ASC',
    'post__not_in' => array($currentID),
	'cat' => $category_ID
));
if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post(); ?>

    <article>
        <a href="<?php the_permalink(); ?>">
            <h4><?php the_title(); ?></h4>
        </a>
    </article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>

