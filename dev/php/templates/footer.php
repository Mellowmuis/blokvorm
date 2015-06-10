	<div class="Footer scheme1-invert">
		<div class="u-gridContainer">
			<div class="u-Col2 footer-box">
				<h5 class="no-marg">CONTACT</h5>
				<ul>
					<li>Sluismeesterslag 3</li>
					<li>2805 DZ Gouda</li>
					<li><a href="tel:0619011511"><i class="fa fa-phone"></i>  06 – 190 11 511</a></li>
					<li><a href="mailto:info@blokvorm.nl"><i class="fa fa-envelope"></i>  info@blokvorm.nl</a></li>
				</ul>
			</div>
			<div class="u-Col2 footer-box">
				<h5 class="no-marg">INSCHRIJVINGEN</h5>
				<ul>
					<li>BTW: NL8512.02.366B01</li>
					<li>KVK: 54163846</li>
				</ul>
			</div>
			<div class="u-Col2 footer-box">
				<h5 class="no-marg">COPYRIGHT</h5>
				<p  style="width:95px; font-size:12px; float:left;">
					All our concepts 
					and designs <br>
					are registered by 

				</p>
				<img  style="width:85px; float:left;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cc-proof.png">
			</div>
			<div class="u-Col2 footer-box">
				<h5 class="no-marg">ONZE APP</h5>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.jpg">
			</div>
			<div class="u-Col2 footer-box">
				<h5 class="no-marg">SOCIAL MEDIA</h5>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.jpg">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.jpg">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/google.jpg">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin.jpg">
			</div>
			<div class="u-Col2 footer-box">
				<h5 class="no-marg">SITEMAP</h5>
			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			<div class="Footer-inner u-gridRow">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</div>
			<?php endif; ?>
			</div>
			
		</div>
	</div>


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>
	<script>
		(function($){
			$(window).load(function(){
				
				$("#content-1").mThumbnailScroller({
					
					callbacks:{
						onInit:function(){
							var $this=$(this);
							$("#si").text("true");
							setTimeout(function(){ $this.addClass("scroller-ready"); },300); //optional timeout
						}
					}
				});
				
			});
		})(jQuery);
	</script>
	
  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.mThumbnailScroller.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/isotope.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/isotop.start.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swapthumb.js"></script>

  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
