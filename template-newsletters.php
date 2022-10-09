<?php

/* Template Name: Newsletters Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>

<main>
	<div class="container">
		<h1><?php echo get_the_title();?></h1>

		<?php the_content();?>

		<div class="row newsletters">
			<?php
			$args = array(
					'posts_per_page' => 12,
					'post_type' => 'newsletter',
					'orderby' => 'date',
          'order'   => 'DESC'
			);
			$latest_posts = new WP_Query( $args );
			if ( $latest_posts->have_posts() ) {
				while ( $latest_posts->have_posts() ) {
					$latest_posts->the_post();
					$file = get_field('file_download');
				?>
				<div class="col-md-3">
				<a target="_blank" href="<?php echo wp_get_attachment_url($file);?>">
					<div class="image">
					<?php if (!has_post_thumbnail()){?><img src="<?php echo wp_get_attachment_image_url($file, 'medium');?>" alt="<?php echo get_the_title();?> Newsletter"><?php }?>
					<?php if (has_post_thumbnail()){
						echo get_the_post_thumbnail();
					}?>
					</div>
					<?php echo get_the_title();?>
				</a>
				</div>
				<?php
				}
			}
			wp_reset_postdata();
			?>

		</div>

		<div class="row">
			<div class="col-md-12">
				<div style="text-align: center;">
				<a href="/past-newsletters"><h2>Visit the complete newsletter archive</h2></a>
				</div>

			</div>
		</div>

	</div>
</main>

<?php
	endwhile;
endif;

get_footer();
?>
