<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<html>

<head>
  <!-- META -->
	<meta charset="<?php bloginfo('charset'); ?>" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
  <!-- JS -->
  <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.0.6.min.js"></script>

	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Lobster+Two">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Facebook JS SDK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- HEADER -->  
  <header>
    <div class="container">  
      <!-- LOGO -->
      <h1 class="ir"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    </div><!-- .container -->
    

    <div class="nav_container"> 

      <!-- MAIN NAV -->
      <nav role="navigation" class="main_nav">
        <ul>
          <li class="multi-level">
            <a href="<?php bloginfo('home'); ?>/categorieen/all" title="Een overzicht van alle panden">Onze panden</a>
            <div class="sub_nav">
            <ul>
            	<?php
								$args_list = array(
									'taxonomy' => 'categorieen', // Registered tax name
									'show_count' => false,
									'hierarchical' => true,
									'echo' => '0',
									'title_li' => '',
									'parent' => '',
									'hide_empty' =>'0',
									'child_of' => '7',
								);	 
								echo wp_list_categories($args_list);
							?>
            </ul>
            </div><!-- .sub_nav -->
          </li>
          <li><a href="<?php bloginfo('home'); ?>/over-ons" title="Een woordje over ons">Over ons</a></li>
          <li><a href="<?php bloginfo('home'); ?>/expertise" title="Onze werkwijze">Expertise</a></li>
          <li><a href="#contact" title="Contacteer ons">Contact</a></li>
        </ul>
      </nav>
     
    </div><!-- .nav_container -->
  </header>