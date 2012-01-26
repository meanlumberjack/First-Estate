<?php get_header(); ?>

	<section id="content">
		<div class="container">
			<div class="grid_3">
				
				<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>
        	
					<p id="post-<?php the_ID(); ?>">
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</p>
					
					<?php echo get_the_post_thumbnail(); ?>
					
					<p>
        		<?php the_field('adres'); ?> <?php the_field('nummer'); ?>, <?php the_field('gemeente'); ?>
        	</p>
        	
        	<p>
        		<?php the_field('beschrijving'); ?>
        	</p>
        	
        	<p>
        		<?php the_field('type'); ?><br />
        		&euro; <?php the_field('prijs'); ?>
        	</p>
        	
        	<hr />

				<?php endwhile; ?>
			
				<?php else : ?>

					<h3>Niets gevonden</h3>

				<?php endif; ?>

			</div><!-- .grid_3 -->
		</div><!-- .container -->
	</section><!-- #content -->

<?php get_footer(); ?>