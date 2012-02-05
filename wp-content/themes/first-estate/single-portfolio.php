<?php
	// Variabelen custom meta boxes
	$adres = get_field('adres');
	$nummer = get_field('nummer');
	$gemeente = get_field('gemeente');
	$type = get_field('type');
	$prijs = get_field('prijs');
	$beschrijving = get_field('beschrijving');
	$opsomming = get_field('opsomming');
	$map = get_field('map');
?>

<?php get_header(); ?>

	<section id="content">
		<div class="container">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<section class="cf main_details clear">
      <div class="grid_1 summary">
        
         <div class="reeds_verkocht">
          Verkocht na 2 weken!
        </div>

        <h3><?php the_title(); ?></h3>
        <h4>
        	<?php echo $adres ?> <?php echo $nummer ?> <?php echo $gemeente ?>
        </h4>
        <?php echo $opsomming ?>
        <div class="contact">
          <h5>Contacteer ons voor een afspraak</h5>
            <span class="tel icon">+32 475 71 50 10</span>
            <span class="email icon"><a href="mailto:alain@first-estate.be">alain@first-estate.be</a></span>
            <span class="share">
              Share:
              <a class="share_mail_btn" href="mailto:?subject=<?php the_title('','',true); ?> (via first-estate.be)&body=<?php echo strip_tags($beschrijving) ?>%0D%0D<?php the_permalink(); ?>" title="Verstuur dit pand via email" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/share_mail_btn.png" width="56" height="20" alt="Mail"></a>
              <div class="fb-like" data-href="<?php echo urlencode(get_permalink($post->ID)); ?>" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-font="lucida grande"></div>
            </span>
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
			<?php if ($map == '') { ?>
				<div class="grid_2 map">
          <h3>Details</h3>
          <?php echo $beschrijving ?>
        </div>
        <div class="grid_1">
          <blockquote>Voor al mijn vragen kan ik steeds terrecht bij First Estate, overdag tijdens kantooruren en zelfs tijdens het weekend. Dit is pas echte service!</blockquote>
					<cite>Jeanine D'Hoore</cite>
        </div>
			<?php } else { ?>
				<div class="grid_1 map">
          <h3>Details</h3>
          <div class="iframe_container">
						<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $map ?>&amp;output=embed&iwloc=near"></iframe>
          </div><!-- .iframe_container -->
        </div>
        <div class="grid_2 extra_info">
          <?php echo $beschrijving ?>
        </div>
			<?php } ?>
			</section>
			
		<?php endwhile; endif; ?>
		
		</div><!-- .container -->
	</section><!-- #content -->

<?php get_footer(); ?>