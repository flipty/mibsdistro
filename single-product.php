<?php get_header();?>

	<?php	if(have_posts()): while(have_posts()): the_post();
			$thisProduct = get_the_ID();
			$thisBrand = get_field('brand');
			$thisCategory = get_field('category');
			$categoryClean = urlencode($thisCategory);
	?>
<main>
	<div class="container">
		<div <?php post_class();?>>

			<ul class="breadcrumb">
				<li><a href="/brands">MIBS Brands</a></li>
				<li><a href="<?php echo get_the_permalink($thisBrand);?>"><?php echo get_the_title($thisBrand);?></a></li>
				<li><a href="<?php echo esc_url( add_query_arg( array('productbrand' => $thisBrand, 'producttype' => $categoryClean), site_url('/product-type/') ) )?>"><?php echo $thisCategory;?></a></li>
				<li><?php echo get_the_title();?></li>
			</ul>

			<h1><?php the_title();?></h1>
			
			<div class="row">
				<div class="product-photos col-md-5">
					<div class="current-image">
						<?php echo get_the_post_thumbnail();?>
					</div>
				<?php 
				$thisGallery = get_field('product_photos');
				$images = $thisGallery;
				if( $images ):  ?>
					<ul class="slides">
						<li>
							<a href="#" class="trigger">
								<?php echo get_the_post_thumbnail();?>
							</a>
						</li>
						<?php foreach( $images as $image ): ?>
						<li>
							<a href="#" class="trigger">
								<img src="<?php echo esc_attr($image['sizes']['large']); ?>" alt="<?php echo($image['alt']); ?>" class="thumbnail" />
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
					<div class="product-specs">
						<?php echo get_field('product_intro');?>
					</div>
				</div>
				<div class="product-info col-md-7">
				<?php the_content();?>
				<?php if (get_field('product_documentation')){?>
				<div class="product-documents">
					<hr/>
					<h3>Product Documents</h3>
					<ul>
						<?php while (have_rows('product_documentation')){ the_row(); ?>
							<li><a target="_blank" href="<?php echo wp_get_attachment_url(get_sub_field('product_file'));?>"><?php echo get_sub_field('title');?></a></li>
						<?php } ?>
						
					</ul>
				</div>
				<?php } ?>

				</div>
			</div>
		</div>
	</div>
	<section class="other-products">
		<div class="container">
	<?php
	$args = array(
			'posts_per_page' => -1,
			'post_type' => 'product',
			'post__not_in' => array($thisProduct),
			'meta_key'  => 'brand',
			'meta_value' => $thisBrand
	);
	$brand_products = new WP_Query( $args );
	if ( $brand_products->have_posts() ) { ?>
		<h2>Other Products from <?php echo get_the_title($thisBrand);?></h2>
		<ul class="products">
		<?php
			while ( $brand_products->have_posts() ) {
					$brand_products->the_post();
		?>
			<li class="product">
				<a href="<?php echo get_the_permalink();?>">
					<?php echo get_the_post_thumbnail();?>
					<span><?php echo get_the_title();?></span>
				</a>
			</li>
		<?php } ?>
		</ul>

		<?php }
		wp_reset_postdata();
		?>
		</div>
	</section>

</main>

	<?php	endwhile; endif;?>

<?php get_footer();
