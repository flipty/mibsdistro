<?php

/* Template Name: Product Type */

get_header();

if(have_posts()):
	while(have_posts()): the_post();

	$productType = $_GET['producttype']; 
	$currentBrand = $_GET['productbrand']; 
?>
<main>
	<div class="container">

		<ul class="breadcrumb">
			<li><a href="/brands">MIBS Brands</a></li>
			<li><a href="<?php echo get_the_permalink($currentBrand);?>"><?php echo get_the_title($currentBrand);?></a></li>
			<li><?php echo $productType;?></li>
		</ul>

		<h1><?php echo get_the_title($currentBrand);?> <?php echo $productType;?></h1>

			<?php
			$args = array(
					'posts_per_page' => -1,
					'post_type' => 'product',
					'meta_query'    => array(
						'relation'      => 'AND',
						array(
							'key'       => 'brand',
							'value'     => $currentBrand,
							'compare'   => '='
						),
						array(
							'key'       => 'category',
							'value'     => $productType,
							'compare'   => '='
						)
					)
			);
			$matchingProducts = new WP_Query( $args );
			if ( $matchingProducts->have_posts() ) { ?>
			<div class="matching-products">
			<?php
				while ( $matchingProducts->have_posts() ) {
					$matchingProducts->the_post();
				?>				
				<a href="<?php echo get_the_permalink();?>">
					<div class="image">					
						<?php if ( has_post_thumbnail() ){ echo get_the_post_thumbnail();}?>
					</div>
					<span><?php echo get_the_title();?></span>
				</a>
				<?php
				}
				?>
			</div>
			<?php }
			wp_reset_postdata();
			?>


	</div>
</main>

<?php
	endwhile;
endif;

get_footer();
?>
