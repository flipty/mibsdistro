<?php

/* Template Name: Officers Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>

<main>
	<div class="container">
		<h1><?php echo get_the_title();?></h1>

		<?php the_content();?>

		<div class="row lead-officers">
			<?php
			if (have_rows('lead_officers')):
			while (have_rows('lead_officers')): the_row();
			$thisOfficer = get_sub_field('officer');
			$name = get_the_title($thisOfficer);
			$title = get_field('title', $thisOfficer);
			?>
			<div class="col-md-4">
				<div class="person">
					<div class="image">
						<?php if (has_post_thumbnail($thisOfficer)) {echo get_the_post_thumbnail($thisOfficer, 'medium');} ?>
						<?php if (! has_post_thumbnail($thisOfficer)) { echo '<div class="nophoto"><span>No Photo</span></div>';} ?>
					</div>
					<div class="content">
						<h3><?php if ($title) { echo '<span>'; echo $title; echo '</span>'; } ?><?php echo $name;?></h3>
					</div>
				</div>
			</div>
			<?php
			endwhile; endif;
			?>
		</div>

		<?php
		if (have_rows('other_officers')):
		?>
		<hr>
		<div class="row officers">
			<?php
			while (have_rows('other_officers')): the_row();
			$thisOfficer = get_sub_field('officer');
			$name = get_the_title($thisOfficer);
			$title = get_field('title', $thisOfficer);
			?>
			<div class="col-md-3 col-xs-6">
				<div class="person">
					<div class="image">
						<?php if (has_post_thumbnail($thisOfficer)) {echo get_the_post_thumbnail($thisOfficer, 'medium');} ?>
						<?php if (! has_post_thumbnail($thisOfficer)) { echo '<div class="nophoto"><span>No Photo</span></div>';} ?>
					</div>
					<div class="content">
						<h3><?php if ($title) { echo '<span>'; echo $title; echo '</span>'; } ?><?php echo $name;?></h3>
					</div>
				</div>
			</div>
			<?php
			endwhile;
			?>
		</div>
		<?php endif;?>

		<hr>

		<h3>Trustees</h3>
		<div class="row trustees">
			<?php
			if (have_rows('trustee_officers')):
			while (have_rows('trustee_officers')): the_row();
			$thisOfficer = get_sub_field('officer');
			$name = get_the_title($thisOfficer);
			$title = get_field('title', $thisOfficer);
			?>
			<div class="col-md-4">
				<div class="person">
					<h3><?php echo $name;?></h3>
				</div>
			</div>
			<?php
			endwhile; endif;
			?>
		</div>

	</div>
</main>

<?php
	endwhile;
endif;

get_footer();
?>
