<?php
/*
Template Name: projeten
*/
?>

<?php get_header(); ?>
<div class="gradient-bg">
	<div class="button-group filter-button-group">
		<div class="u-gridContainer">
		  <button class="is-checked" data-filter="*">ALLE PROJECTEN</button>
		  <button data-filter=".INTERIEUR">INTERIEUR ONTWERP</button>
		  <button data-filter=".EXTERIEUR">EXTERIEUR ONTWERP</button>
		  <button data-filter=".MEUBELONTWERP">MEUBELONTWERP</button>
		  <button data-filter=".PRODUCT">PRODUCT DESIGN</button>
		  <button data-filter=".BUITENRUIMTE">BUITENRUIMTE</button>
		  <button data-filter=".HEKWERK">HEKWERK</button>
		  <button data-filter=".VRIJWERK">VRIJWERK</button>
		</div>
	</div>
	<div class="u-gridContainer" style="max-width:122em;">
		
		<div class="grid" style="max-width:122em; width:100%;">
			<?php

				$args = array(
					'post_type' => 'projecten',
					'posts_per_page'=>999
				);
				$projecten = new WP_Query( $args );
				$num = count($projecten);
				$counter = 0;
				if( $projecten->have_posts() ) {
					while( $projecten->have_posts() ) {
						$projecten->the_post();
						$counter++;
						?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							  $image_url = $image[0];
						?>
						<?php
						 $image1 = get_field('foto_1'); 
						 $image2 = get_field('foto_2'); 
						 $image3 = get_field('foto_3'); 
						 $image4 = get_field('foto_4');
						 $categorie = get_field('categorie');
						 ?>
						<div class="grid-item slideDown <?php echo $categorie ?>">
							<div class="item-content">
								<div class="grid-text">
									<?php the_title(); ?>
								</div> 
								<div class="left-culumn u-cf">
									<div class="spec-img u-cf">
										<img src="<?php echo $image_url; ?>" />
									</div>
									
									
									<div class="image-row u-cf">
										<a href="#"><img src="<?php echo $image1['sizes']['medium']; ?>" alt="<?php echo $image1['alt']; ?>"/></a>
							       		<a href="#"><img src="<?php echo $image2['sizes']['medium']; ?>" alt="<?php echo $image2['alt']; ?>"/></a>
							       		<a href="#"><img src="<?php echo $image3['sizes']['medium']; ?>" alt="<?php echo $image3['alt']; ?>"/></a>
							       		<a href="#"><img style="margin-right:0px;" src="<?php echo $image4['sizes']['medium']; ?>" alt="<?php echo $image4['alt']; ?>"/></a>
							       	</div>
								</div>
								<div class="right-column">
									<div class="hidden-content">
										<?php the_content(); ?>
										
										
									</div>
								</div>
								
								
							</div>							
							
						</div>
						<?php
					}
				}
			?>
		  
		</div>


	</div>
	
	
</div>



<?php get_footer(); ?>
