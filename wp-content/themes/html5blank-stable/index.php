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
	<div class="col-md-12">
		<h1><?php the_field('titre_content'); ?></h1>
	</div>
</div>




    <div class="content_index_1">
        <div class="row">
		<div class="col-md-6">
			<div><?php $image = wp_get_attachment_image_src(get_field('background-titre-img'), 'Miniature'); ?></div>
            <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('background-titre-img')) ?>" /></div>
		</div>

		<div class="col-md-6" id="coaching_sportif">
			<h1 id="partie_sport"><?php the_field('titre_cours_1'); ?></h1>
			<p id="partie_sport">
                <?php the_field('titre_cours_1'); ?>
			</p>
		</div>
	</div>
</div>
<div class="partie_sportif2">
	<div class="row">
		<div class="col-md-6" id="coaching_sportif2">
			<h1 id="partie_sport2"><?php the_field('titre_cours_1'); ?></h1>
			<p id="partie_sport2">
                <?php the_field('titre_cours_1'); ?>
			</p>
		</div>
		<div class="col-md-6"><?php $image = wp_get_attachment_image_src(get_field('background-titre-img'), 'Miniature'); ?></div>
        <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('background-titre-img')) ?>" />
		</div>
	</div>
</div>

<div class="partie_cours">
	<div class="row">
		<div class="col-md-12">
			<h1>Blog</h1>
		</div>
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
