<!-- META -->
  <div class="meta">
    <div class="container">
        <div class="grid_1 connect">
          <h3>Blijf op de hoogte</h3>
          <div class="rss icon"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank">Via RSS</a> <small><a href="http://www.gentblogt.be/info/wat-is-rss" target="_blank">Wat is RSS?</a></small></div>
          <div class="fb icon"><a href="http://www.facebook.com/pages/FIRST-ESTATE/157532300982364" target="_blank">Word fan op Facebook</a></div>

          <div class="newsletter">
            <h4>Schrijf je in op onze nieuwsbrief</h4>
            <form action="#" method="post" accept-charset="utf-8">
              <!-- <h4><label for="email">Schrijf je in op onze nieuwsbrief</label></h4> -->
              <input type="email" name="email" id="email" placeholder="Emailadres" />
              <input type="submit" name="submit" value="Inschrijven" />
            </form>
            <p>Blijf op de hoogte van de nieuwste panden via een automatische email.</p>
          </div><!-- .newsletter -->
        </div><!-- .connect -->

        <div class="grid_1 kantoor cf">
          <h3>Ons nieuw kantoor</h3>
          <p>Voor al u vragen hebben wij een antwoord.<br /> Dus aarzel niet om ons te contacteren.</p>
          
          <span class="vcard"><!-- microformats.org -->
            <div class="address">
              <span class="fn org">First-Estate</span> <br />
              <span class="adr">
                <span class="street-address">Turnhoutsebaan 21</span> <br />
                <span class="postal-code">2970</span> <span class="locality">Schilde</span> <br />
              </span><!-- .adr -->
            </div><!-- .address -->

            <div class="contact_info" id="contact">
              <span class="tel icon">+32 475 71 50 10</span>
              <span class="email icon"><a href="mailto:alain@first-estate.be">alain@first-estate.be</a></span>
            </div><!-- .contact_info -->
          </span><!-- .vcard -->
          
        </div><!-- .kantoor -->

        <div class="grid_1 map">
          <div class="iframe_container">
            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=schalmei+11+2970&amp;aq=&amp;ie=UTF8&amp;hq=&amp;hnear=Schalmei+11,+2970+Schilde,+Antwerpen,+Vlaams+Gewest,+Belgium&amp;t=m&amp;vpsrc=6&amp;ll=51.265621,4.581299&amp;spn=0.018797,0.036478&amp;z=14&amp;output=embed&amp;iwloc=near"></iframe>
          </div><!-- .iframe_container -->
        </div>
    </div><!-- .container -->
  </div><!-- .meta_container -->



<!-- FOOTER -->
  <div class="footer_container">
    <footer class="container">
      
      <div class="legal left">  
        &copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> BVBA <span>- Alle rechten voorbehouden</span>
      </div><!-- .legal -->

        <!-- SECONDARY NAV -->
        <nav role="navigation" class="sec_nav right">
          <ul>         
            <li><a href="<?php bloginfo('home'); ?>/legaal" title="Legaal">Legaal</a></li>
            <li><a href="<?php bloginfo('home'); ?>/categorieen/reeds-verkocht" title="Reeds verkocht/verhuurd">Reeds verkocht/verhuurd</a></li>
            <li><a href="<?php bloginfo('home'); ?>/over-ons" title="Over ons">Over ons</a></li>
          </ul>
        </nav>
  
    </footer>
  </div><!-- .footer_container -->

  <!-- JS -->
  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> -->
  <!-- <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script> -->
  <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
  
  <!--[if (lt IE 9) & (!IEMobile)]>
  <script src="<?php bloginfo('template_url'); ?>/js/libs/respond.1.0.1.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/libs/selectivizr.1.0.2.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/libs/imgsizer.js"></script>
  <![endif]-->

  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

<?php wp_footer(); ?>

</body>
</html>