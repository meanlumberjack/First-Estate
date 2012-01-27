<?php get_header(); ?>

	<section id="content">
		<div class="container">
      <section class="cf main_details clear overview">
				
				<?php if (have_posts()) : ?>

  				<?php while (have_posts()) : the_post(); ?>
            
            <div class="grid_1 pand koop" id="post-<?php the_ID(); ?>">
              <div class="img_container">
                <a href="<?php the_permalink() ?>">
                 
                  <!-- THUMBNAIL -->
                  <?php //echo get_the_post_thumbnail(); ?>
                  <?php 
                  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(),'thumbnail' );
                  //print_r($thumb);
                  ?> 
                  <img src="<?php echo $thumb[0]; ?>">

                  <div class="caption">
                    <h3><?php the_field('type'); ?></h3>
                    <p>&euro; <?php the_field('prijs'); ?></p>
                  </div>
                </a>
              </div><!-- .img_container -->
              <h3><?php the_title(); ?></h3>
              <h4><?php the_field('adres'); ?> <?php the_field('nummer'); ?>, <?php the_field('gemeente'); ?></h4>
              <p><?php the_field('beschrijving'); ?></p>
              <a href="<?php the_permalink() ?>" class="btn">Bekijk dit pand</a>
            </div><!-- .pand .koop -->
            
  				<?php endwhile; ?>
  			
  				<?php else : ?>

  					<h3>Niets gevonden</h3>

				<?php endif; ?>
      
      </section>
		</div><!-- .container -->
	</section><!-- #content -->

<?php get_footer(); ?>