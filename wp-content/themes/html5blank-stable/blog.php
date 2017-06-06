<?php
/*
* Template Name: Blog
*/
get_header()
?>
    <div class="container-fluid">
        <div class="header2">
            <h1 class="blog_title">Blog</h1>
        </div>
        <section>

            <div class="row_blog">

                <?php
                $my_query = new WP_Query(array(
                    'post_type' => 'blog',
                    'posts_per_page' => -1,
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

        </section>
    </div>

<?php
get_footer()
?>