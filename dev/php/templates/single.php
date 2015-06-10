<?php get_header(); ?>
	<div class="u-gridContainer">
		<div class="u-Row">
			<a href="/projecten">Terug</a>
		</div>
		<div class="u-Row">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						  $image_url = $image[0];
					?>
					
					<div class="u-Col4 detail-text">
						<h2 class="no-marg"><?php the_title(); ?></h2>
						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
					</div>
					<div class="u-Col8 detail-photo">
						<img src="<?php echo $image_url; ?>" />
					</div>
				</article>
				
				<nav>
					<div><?php previous_post_link('&laquo; %link') ?></div>
					<div><?php next_post_link('%link &raquo;') ?></div>
				</nav>

				
			<?php endwhile; else: ?>

				<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>
