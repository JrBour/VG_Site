<?php get_header(); ?>

<div class="container-fluid">
    <!-- section -->
    <section>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- post thumbnail -->
                <div class="thumbnail_single_post">
                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?> 
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> 
                            <?php the_post_thumbnail('full', array('class' => 'thumbnail_single' )); // Fullsize image for the single post ?> 
                        </a> <?php endif; ?>
                </div>
                <!-- /post thumbnail -->

                <!-- post title -->
                <div class="col-lg-8 col-md-8 single-blog">
                    <h1>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h1>
                    <?php the_content(array('class' => 'single_blog')); // Dynamic Content ?>


                    <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
                </div>
                <div class="col-lg-3 col-md-3 aside_blog">
                    <h3 class="text-center">Derniers articles</h3>
                    <?php
                    $my_query = new WP_Query(array(
                        'post_type' => 'blog',
                        'posts_per_page' => 2,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ));
                    if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post(); ?>
                            <div class="col-lg-12">
                                <a href="<?php the_permalink() ?>">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'full', array( 'class' => 'thumbnail_aside' ) ); ?>
                                    <?php endif; ?>                        </a>


                                <h4><?php the_title(); ?></h4>
                                <p><?php html5wp_excerpt('html5wp_index'); ?></p>
                            </div>


                    <?php endwhile; endif; ?>

                </div>
            </article>
            <!-- /article -->

        <?php endwhile; endif; ?>

    </section>
    <!-- /section -->
</div>
<?php get_footer(); ?>



