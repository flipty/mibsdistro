<?php

/* Template Name: Brands Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>

<main>
	<div class="container">
		<h1><?php echo get_the_title();?></h1>
		<section class="content">
			<?php the_content();?>
		</section>
		<div class="brands">
		<?php
			$args = array(
					'posts_per_page' => -1,
					'post_type' => 'brand',
					'orderby' => 'menu_order',
          			'order'   => 'ASC'
			);
			$brands = new WP_Query( $args );
			if ( $brands->have_posts() ) {
				while ( $brands->have_posts() ) {
					$brands->the_post();
				?>
				<div class="brand">
				<a href="<?php echo get_the_permalink();?>">
					<div class="image">
					<?php if (has_post_thumbnail()){
						echo get_the_post_thumbnail();
					}?>
					</div>
					<span><?php echo get_the_title();?></span>
				</a>
				</div>
				<?php
				}
			}
			wp_reset_postdata();
			?>
		</div>
		
	</div>
</main>

<?php
	endwhile;
endif;

get_footer();
?>
