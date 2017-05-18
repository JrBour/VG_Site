<?php
/*
Template Name: Index
 */
?>
<?php get_header(); ?>

<!--Partie 1 - SLOGAN-->
<div class="containerSlogan">
    <div class="textSlogan">
        <h2><?php the_field('slogan_1'); ?></h2>
        <div class="border_index"></div>
        <h3><?php the_field('slogan_2'); ?></h3>
    </div>
    <?php $image = wp_get_attachment_image_src(get_field('background_image_slogan'), 'Miniature'); ?>
    <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('background-titre-img')) ?>" />
</div>
<div class="container_index">
		<h2><?php the_field('titre_content'); ?></h2>
</div>
    <div class="contentIndex-1">
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <h4 ><?php the_field('titre_content_1'); ?></h4>
                <p>
                    <?php the_field('text_content_1'); ?>
                </p>
            </div>
            <div class="col-md-5">
                <div><?php $image = wp_get_attachment_image_src(get_field('img_content_1'), 'Miniature'); ?></div>
                <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('titre_content_1')) ?>" />
            </div>
        </div>
    </div>
<div class="contentIndex-2">
    <div class="row">
        <div class="col-md-5">
            <div><?php $image = wp_get_attachment_image_src(get_field('img_content_2'), 'Miniature'); ?></div>
            <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('titre_content_2')) ?>" />
        </div>
        <div class="col-md-5 col-md-offset-1">
            <h4 ><?php the_field('titre_content_2'); ?></h4>
            <p>
                <?php the_field('text_content_2'); ?>
            </p>
        </div>
    </div>
</div>
<div class="title-preview-blog">
    <h2>Blog</h2>
</div>



<div class="row">
	<div class="col-md-6 col-md-offset-3" data-category="view">
		<div class="lib-panel">
			<div class="row box-shadow">
				<div class="col-md-6">
					<img class="lib-img-show" src="http://lorempixel.com/850/850/?random=123">
				</div>
				<div class="col-md-6">
					<div class="lib-row lib-header">
						Example library
						<div class="lib-header-seperator"></div>
					</div>
					<div class="lib-row lib-desc">
						Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor
					</div>
			</div>
		</div>
	</div>
</div>
	</div>
	</div>
<?php get_footer(); ?>
