<?php
	/* Template Name: Homepage */
	get_header();
?>

<main>
	<section>
		<div class="container">
			<h1><?php the_title() ?></h1>
			<?php the_content(); ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>