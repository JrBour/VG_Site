<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

    <?php if(is_page('58')) : ?>

        <h1>Mention spé : <?php the_title(); ?></h1>

        <?php else : ?>

        <h1><?php the_title(); ?></h1>
    <?php endif ;?>
    <?php  the_post_thumbnail('medium'); ?>

    <?php the_content(); ?>

<?php endwhile; endif; ?>



</posts>

<!-- PROJET -->

<?php if(is_page('101')) : ?>

    <h1>Nos fabuleux projets</h1>

<?php $loop = new WP_Query( array( 'post_type' => 'Projet', 'posts_per_page' => 10 ) );?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>


        <a href="<?php the_permalink(); ?>">
    <h1> <?php the_title();?></h1>

    <?php  the_post_thumbnail('medium'); ?>


    <?php the_content(); ?>
        </a>
    <?php endwhile;?>
<?php endif; ?>


    <!-- ////// BOUTIQUE //////////// -->

<?php if(is_page('106')) : ?>


    <?php $loop = new WP_Query( array( 'post_type' => 'Boutique', 'posts_per_page' => 10 ) );?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <div class="container">
        <a href="<?php the_permalink(); ?>">
            <h1> <?php the_title();?></h1>

            <?php  the_post_thumbnail('medium'); ?>

            <p>Acheter</p>
        </a>
        </div>
    <?php endwhile;?>
<?php endif; ?>


    <!-- ////// CONTACT //////////// -->



<?php get_footer(); ?>
