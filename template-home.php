<?php

/* Template Name: Home Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>

<main>
<?php
$homeImage = get_field('main_image');
$productsImage = get_field('products_image');
$aboutImage = get_field('about_image');
$contactImage = get_field('contact_image');
$headline = get_field('headline');
$intro_image = get_field('intro_image');
?>
		<section class="hero">
				<div class="panels">
					<div class="panel initial-active active" id="this-panel-1">
						<?php echo wp_get_attachment_image($homeImage, 'full');?>
						<label><img src="/wp-content/themes/mibs/images/logo.png" alt="MIBS Distro"></label>
					</div>
					<div class="panel" id="this-panel-2">
						<a href="/products"><?php echo wp_get_attachment_image($productsImage, 'full');?></a>
						<label>products</label>
					</div>
					<div class="panel" id="this-panel-3">
						<a href="/about"><?php echo wp_get_attachment_image($aboutImage, 'full');?></a>
						<label>about</label>
					</div>
					<div class="panel" id="this-panel-4">
						<a href="/contact"><?php echo wp_get_attachment_image($contactImage, 'full');?></a>
						<label>contact</label>
					</div>
				</div>
		</section>

		<section class="intro">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-md-8">
							<h1><?php echo $headline;?></h1>
							<?php the_content();?>
						</div>
						<div class="col-md-4">
							<?php echo wp_get_attachment_image($intro_image, 'full');?>
						</div>
					</div>
				</div>
			</div>
		</section>

</main>

<?php
	endwhile;
endif;

get_footer();
?>
