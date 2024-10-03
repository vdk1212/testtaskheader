<?php get_header(); ?>

	<main>
		<!-- BANNER -->
		<div class="banner section small">
			<div class="bg animation banner-animation parallax" data-rellax-speed="-3">
				<div data-bg-src="<?php the_field( 'news_banner', 468 ) ?>"></div>
			</div>
			<div class="click-path animation fade-in-up">
				<a href="<?php echo get_home_url(); ?>"><?php the_field( 't_home', 'options' ) ?></a>
				<?php if(function_exists('bcn_display')) {
					bcn_display();
				} ?>
			</div>
			<div class="container text-center">
				<div class="row">
					<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
						<span class="date light animation fade-in-up"><?php echo get_the_date('j F, Y'); ?></span>
						<h1 class="h1 light animation fade-in-up"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
		<!-- BANNER END -->
	</main>

<?php get_footer(); ?>