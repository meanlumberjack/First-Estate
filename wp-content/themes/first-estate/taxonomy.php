<?php get_header(); ?>
  
  <script src="<?php bloginfo('template_url'); ?>/js/masonry.js"></script>
  <script type="text/javascript">
    $(function() {
      //$('#masonry').masonry({ singleMode: true });
      $('#masonry').imagesLoaded( function(){
        $('#masonry').masonry({
            itemSelector : '.grid_1'
         });
      });
    });
  </script>
    
  <script type="text/javascript">
    //HIGHLIGHT
    $(function() {

      $(".overview").mouseenter(function() {   

        $(".pand").mouseenter(function() {   
          $(this).css({ opacity: 1 });
          $(this).siblings().css({ opacity: 0.5 });
          //$(this).fadeTo('slow', 1);
        }).mouseleave(function() {  
          $(this).css({ opacity: 0.5 });
          //$(this).fadeTo('slow', 0.5);
        });

      }).mouseleave(function() {
        //$(this).children().fadeTo('slow', 1);
        $(this).children().css({ opacity: 1 });
      });

    });
  </script>

	<section id="content">
		<div class="container">
      <section class="cf main_details clear overview" id="masonry">
				
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

  <div class="container pagination_container">
    <div class="grid_3 pagination">
      <?php 
          if ( function_exists( 'wp_pagenavi' ) ) {
            wp_pagenavi();
          }
        ?>
    </div><!-- .pagination -->
  </div>

<?php get_footer(); ?>