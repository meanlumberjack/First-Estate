<?php get_header(); ?>

	<section id="content">
		<div class="container">
			<div class="grid_3">


			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
			<div class="post" id="post-<?php the_ID(); ?>">
				
				<?php the_content(); ?>
			</div>

			<?php endwhile; endif; ?>


			</div><!-- .grid_3 -->
		</div><!-- .container -->
	</section><!-- #content -->

<?php get_footer(); ?>