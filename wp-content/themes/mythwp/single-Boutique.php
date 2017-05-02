<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

    <p class="text-center"><a href="<?php the_permalink(106)?>">Retour vers Boutique</a></p>

    <div class="container">

    <h1 class="vert"><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>

    <?php the_post_thumbnail('medium'); ?>


    <h3>Prix : <?php the_field('prix') ?>€</h3>

    <h3>Couleur disponible</h3>
<ul>

    <?php
    $colors = get_field('liste_des_couleurs');

    if( $colors ): ?>

            <?php foreach( $colors as $color ): ?>
                <li><?php echo $color; ?></li>
            <?php endforeach; ?>

    <?php endif; ?>
</ul>
    </div>





    <?php
    $currentID = get_the_ID();
    ?>


<?php endwhile; endif; ?>


<?php get_footer(); ?>

