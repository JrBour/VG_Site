<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <section>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- post thumbnail -->
                <div class="thumbnail_single_post">
                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?> 
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> 
                            <?php the_post_thumbnail('full', array('class' => 'thumbnail_single' )); // Fullsize image for the single post ?> 
                        </a> <?php endif; ?>
                </div>
                <!-- /post thumbnail -->

                <!-- post title -->
                <div class="col-lg-10 col-lg-offset-1 single-blog">
                    <h1>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h1>
                    <?php the_content(); // Dynamic Content ?>

                    <!-- post details -->
                    <div class="col-lg-2 col-lg-offset-10">
                        <span class="author">Ecrit par <span class="authorName"><?php the_author() ?></span></span><br>
                        <span class="date"><?php the_time('j F Y'); ?></span>
                        <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
                    </div>

                    <!-- /post details -->

                    <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

                    <br>Commentaire : <?php comments_template(); ?>

            </article>
            <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

            </article>

            <!-- /article -->

        <?php endif; ?>

    </section>
    <!-- /section -->
</main>


<?php get_footer(); ?>
