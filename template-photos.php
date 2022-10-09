<?php

/* Template Name: Photos Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>
<main>
	<div class="container">
		<h1><?php echo get_the_title();?></h1>
		<?php the_content();?>
		<div class="row galleries">
			<?php
			if (have_rows('photo_gallery')):
			while (have_rows('photo_gallery')): the_row();
			$thisGallery = get_sub_field('gallery_page');
			?>
			<div class="col-md-4">
				<a href="<?php echo get_the_permalink($thisGallery);?>">
					<h2><?php echo get_the_title($thisGallery); ?></h2>
					<?php echo get_the_post_thumbnail($thisGallery, 'medium');?>
				</a>
				<hr>
 			</div>
			<?php
			endwhile; endif;
			if (!have_rows('photo_gallery')) {
				echo 'No photo galleries exist. Please check back soon.';
			}
			?>
		</div>

	</div>
</main>
<?php
	endwhile;
endif;

get_footer();
?>
