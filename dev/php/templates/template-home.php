<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<div class="gradient-bg">
	<div class="u-gridContainer" style="max-width:93rem;">
		<div class="Slider"> 
			<?php
 
				$args = array(
					'post_type' => 'slides',
					'posts_per_page'=>999
				);
				$slides = new WP_Query( $args );
				$num = count($slides);
				$counter = 0;
				if( $slides->have_posts() ) {
					while( $slides->have_posts() ) {
						$slides->the_post();
						$counter++;
						?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							  $image_url = $image[0];
						?>
						<div class="slide" style="">
							<div class="slide-title">
								<?php the_title(); ?>
							</div>
							<div class="slide-text">
								<?php the_content(); ?>
							</div>
							<img src="<?php echo $image_url; ?>" />
						</div>
						<?php
					}
				}
			?>
		</div>
		<div class="marg-top" style="margin-bottom:-15px;">
			<a class="home-button" href="/projecten">
				PROJECTEN
			</a>
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

<!--
	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>
-->
<?php get_footer(); ?>
