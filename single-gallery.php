<?php get_header();?>

	<?php	if(have_posts()): while(have_posts()): the_post();?>

<main>
	<div class="container">

				<h1><?php the_title();?></h1>
				<?php the_content();?>

				<?php $thisGallery = get_field('gallery_items'); ?>

				<?php
				$images = $thisGallery;
				if( $images ):  ?>
						<ul class="slides">
							<?php foreach( $images as $image ): ?>
								<li>
									<a class="gallery-image" data-gallery="<?php echo 'gallery'; ?>" href="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_html($image['caption']); ?>" rel="gallery" />
										<img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />
										</a>
								</li>
							<?php endforeach; ?>
						</ul>
					<hr>
				<?php endif; ?>

	</div>
</main>

	<?php	endwhile; endif;?>

<?php get_footer();
