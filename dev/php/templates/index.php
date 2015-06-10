<?php get_header(); ?>
<div class="gradient-bg">
	<div class="u-gridContainer">

		
		<div class="u-Col8">
			<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>

						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<h3 class="no-marg"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<span><?php the_time( get_option( 'date_format' ) ); ?></span>
							<div><?php the_content('Read the rest of this entry &raquo;'); ?></div>
							<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
						</article>
						<hr>
					<?php endwhile; ?>

					<nav>
						<div><?php next_posts_link('&laquo; Older Entries') ?></div>
						<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
					</nav>

				<?php else : ?>

					<h2>Not Found</h2>
					<p>Sorry, but you are looking for something that isn't here.</p>
					<?php get_search_form(); ?>

				<?php endif; ?>

			<?php get_sidebar(); ?>
		</div>
		<div class="u-Col4">
			<div id="fb-root"></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-post" data-href="https://www.facebook.com/BlokvormArchitectuur/posts/296377100555735:0" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/BlokvormArchitectuur/posts/296377100555735:0">Posted by <a href="https://www.facebook.com/BlokvormArchitectuur">Blokvorm Architectuur</a> on <a href="https://www.facebook.com/BlokvormArchitectuur/posts/296377100555735:0">woensdag 22 oktober 2014</a></blockquote></div></div>
		</div>
	</div>
	
	
</div>
<div class="u-gridContainer">
	<div class="u-Row thumb-cont">
		<div id="content-1" class="content">
			<ul>
				<li>
					<a href="#">
						<div class="thumb">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1.jpg">
							<div class="thumb-text">
								<a href="#">Interieur ontwerp</a>
							</div>
						</div>
					</a>	
				</li>
				<li>
					<a href="#">
						<div class="thumb">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.jpg">
							<div class="thumb-text">
								<a href="#">Exterieur ontwerp</a>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meubel.jpg">
							<div class="thumb-text">
								<a href="#">Meubelontwerp</a>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/product.jpg">
							<div class="thumb-text">
								<a href="#">Product design</a>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buiten.jpg">
							<div class="thumb-text">
								<a href="#">Buitenruimte</a>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hek.jpg">
							<div class="thumb-text">
								<a href="#">Hekwerk</a>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/last.jpg">
							<div class="thumb-text">
								<a href="#">Vrijwerk</a>
							</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
	

<?php get_footer(); ?>