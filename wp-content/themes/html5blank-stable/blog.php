<?php
/*
* Template Name: Blog
*/
get_header()
?>
<div class="header2">
    <h1>Blog</h1>
</div>
    <section>
        <div class="container">
            <div class="row">

                    <?php
                    $my_query = new WP_Query(array(
                        'post_type' => 'blog',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ));
                    if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post(); ?>

                            <div class="col-lg-12 blog_gardye">
                        <div class="col-lg-8 tumbnail">
                            <a href="<?php the_permalink() ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'full', array( 'class' => 'thumbnail' ) ); ?>
                            <?php endif; ?>                        </a>
                        </div>
                        <div class="col-lg-4 text">
                            <h4><?php the_title(); ?></h4>
                            <?php the_excerpt(); ?>
                        </div>
                </div>

                    <?php endwhile; endif; ?>

            </div>
        </div>
    </section>

<?php
get_footer()
?>