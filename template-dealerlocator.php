<?php

/* Template Name: Dealer Locator */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
	$thisBrand = get_field('associated_brand');
?>

<main>
	<div class="container">
		<?php if ($thisBrand) { ?>
		<ul class="breadcrumb">
			<li><a href="/brands">MIBS Brands</a></li>
			<li><a href="<?php echo get_the_permalink($thisBrand);?>"><?php echo get_the_title($thisBrand);?></a></li>
			<li>Dealers</li>
		</ul>
		<?php } ?>
		<h1><?php echo get_the_title();?></h1>
		<section class="content">
			<?php the_content();?>
		</section>		
	</div>
</main>

<?php
	endwhile;
endif;

get_footer();
?>
