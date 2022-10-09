<?php

/* Template Name: Newsletter Archive */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>

<main>
	<div class="container">
		<h1><?php echo get_the_title();?></h1>

		<?php the_content();?>

		<?php
		if (have_rows('newsletter_year')):
		while (have_rows('newsletter_year')): the_row();
		$title = get_sub_field('title');
		$items = get_sub_field('items');
		?>
		<h2><?php echo $title;?></h2>
		<ul>
			<?php foreach ($items as $item):
				$newsletterTitle = get_the_title($item);
				$pdf = get_field('file_download', $item);
				?><li>
					<a href="<?php echo wp_get_attachment_url($pdf);?>" target="_blank"><?php echo $newsletterTitle;?></a>
					</li>
			<?php endforeach; ?>
		</ul>
		<?php
		endwhile; endif;
		?>

	</div>
</main>

<?php
	endwhile;
endif;

get_footer();
?>
