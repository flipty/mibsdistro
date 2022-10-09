<?php

/* Template Name: Home Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>

<main>
	<div class="container">

		<section class="hero">
			<div class="content">
				<div class="inner">
				<?php the_content();?>
				</div>
			</div>
		</section>

	</div>
</main>

<?php
	endwhile;
endif;

get_footer();
?>
