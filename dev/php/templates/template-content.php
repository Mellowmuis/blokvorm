<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>
<div class="gradient-bg">
	<div class="u-gridContainer">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="u-Col8">
			<?php the_content(); 
				$text1 = get_field('informatie');
			?>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		</div>
		<div class="u-Col4 jeroen">
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				  $image_url = $image[0];
			?>
			<img src="<?php echo $image_url; ?>" />
			<p>
				<?php echo $text1; ?> 

			</p>
		</div>
	<?php endwhile; endif; ?>
	</div>
	
	
</div>
<div class="u-gridContainer marginprojecten">
	<div class="u-Row thumb-cont">
		<div>
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
						<div class="thumblast">
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
