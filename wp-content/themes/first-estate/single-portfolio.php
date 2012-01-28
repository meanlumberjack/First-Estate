<?php
	// Variabelen custom meta boxes
	$adres = get_field('adres');
	$nummer = get_field('nummer');
	$gemeente = get_field('gemeente');
	$type = get_field('type');
	$prijs = get_field('prijs');
	$beschrijving = get_field('beschrijving');
	$opsomming = get_field('opsomming');
?>

<?php get_header(); ?>

	<section id="content">
		<div class="container">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<section class="cf main_details clear">
      <div class="grid_1 summary">
        <h3><?php the_title(); ?></h3>
        <h4>
        	<?php echo $adres ?> <?php echo $nummer ?>, <?php echo $gemeente ?>
        </h4>
        <?php echo $opsomming ?>
        <div class="contact">
          <h5>Contacteer ons voor een afspraak</h5>
            <span class="tel icon">+32 475 71 50 10</span>
            <span class="email icon"><a href="mailto:alain@first-estate.be">alain@first-estate.be</a></span>
            <span class="share">Share:</span>
            <!-- <div class="fb-send" data-href="http://www.first-estate.be"></div> -->
        </div><!-- .contact -->
      </div><!-- .summary -->
      
      <!-- SLIDER -->
      <div class="grid_2">
        <div class="slider_container">
          <div class="flexslider">
          	<?php if(get_field('afbeeldingen')): ?>
            <ul class="slides">
            	<?php while (the_repeater_field('afbeeldingen')): ?>	
							<li>
  							<img src="<?php echo the_sub_field('slideshow_afbeelding'); ?>" alt="" />
  							<div class="flex-caption">
                  <h3><?php echo $type ?></h3>
                  <p>&euro; <?php echo $prijs ?></p>
                </div>
  						</li>
							<?php endwhile; ?>
            </ul><!-- .slides -->
            <?php endif; ?>
          </div><!-- .flexslider -->
        </div><!-- .slider_container -->
      </div>
			</section>
			
			<!-- BLOCKS --> 
      <section class="cf blocks">
        <div class="grid_1 map">
          <h3>Details</h3>
          <div class="iframe_container">
            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=schalmei+11+2970&amp;aq=&amp;ie=UTF8&amp;hq=&amp;hnear=Schalmei+11,+2970+Schilde,+Antwerpen,+Vlaams+Gewest,+Belgium&amp;t=m&amp;vpsrc=6&amp;ll=51.265621,4.581299&amp;spn=0.018797,0.036478&amp;z=14&amp;output=embed&amp;iwloc=near"></iframe>
          </div><!-- .iframe_container -->
        </div>
        <div class="grid_1 extra_info">
          <p><?php echo $beschrijving ?></p>
        </div>
        <div class="grid_1 list">
          <?php echo $opsomming ?>
         </div>
      </section>
			
		<?php endwhile; endif; ?>
		
		</div><!-- .container -->
	</section><!-- #content -->

<?php get_footer(); ?>