<?php get_header();?>

	<?php	if(have_posts()): while(have_posts()): the_post();?>

<main>
	<div class="container">

		<ul class="breadcrumb">
			<li><a href="/brands">MIBS Brands</a></li>
			<li><?php echo get_the_title();?></li>
		</ul>

		<section class="brand-intro">
		<h1><?php the_title();?></h1>
			<div class="row">
				<div class="col-md-8">
					<?php echo get_field('brand_intro');?>
					<section class="buttons">
					<?php 
					if ( get_field('dealer_locator_url') || get_field('website_url') || get_field('contact_url') ) { ?>
						<div class="button-container">
						<?php } ?>
							<?php 
							if ( get_field('dealer_locator_url') ) { 
							?>
							<div class="button-holder">
								<a class="button" href="<?php echo get_field('dealer_locator_url');?>">Dealer Locator</a>
							</div>
							<?php }
							if ( get_field('website_url') ) { 
							?>
							<div class="button-holder">
								<a class="button" href="<?php echo get_field('website_url');?>">Visit Website</a>
							</div>
							<?php }
							if ( get_field('contact_url') ) { 
							?>
							<div class="button-holder">
								<a class="button" href="mailto:<?php echo get_field('contact_url');?>">Contact</a>
							</div>
							<?php }
						if ( get_field('dealer_locator_url') || get_field('website_url') || get_field('contact_url') ) { 
						?>
						</div>
						<?php } ?>
					</section>	
				</div>
				<div class="col-md-4 brand-image">
					<?php echo get_the_post_thumbnail();?>
				</div>
			</div>
		
		</section>
		
	</div>
	
	<section class="products">
		<div class="container">
			<?php
			$thisBrand = get_the_ID();
			$args = array(
					'posts_per_page' => -1,
					'post_type' => 'product',
					'meta_key'  => 'brand',
					'meta_value' => $thisBrand
			);
			$brandProducts = new WP_Query( $args );
			if ( $brandProducts->have_posts() ) {
			?>

			<h2><?php echo get_the_title();?> Products</h2>

				<div class="product-list">
				<?php
					while ( $brandProducts->have_posts() ) {
							$brandProducts->the_post();
							$productID = get_the_ID();
				?>				
					<div class="product">
					<a href="<?php echo get_the_permalink();?>"><?php echo get_the_post_thumbnail();?></a>
					<?php echo get_the_title();?>
					</div>
				
				<?php }
				} ?>
				</div>
			</div>
	</section>

	
</main>

	<?php	endwhile; endif;?>

<?php get_footer();