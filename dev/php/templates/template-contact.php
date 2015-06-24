<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div class="gradient-bg">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				
				<div class="Content-text">

					<div class="u-gridRow">					
										
						<div class="adress-map u-gridCol12">
							<div id="map_canvas"></div>
						</div> 

					</div> <!-- /gridRow -->
				</div> <!-- content-text -->
			</div>
		</article>
	</div>
				<div class="u-gridContainer">
					
					<div class="u-gridRow">
						<h3 class="less-marg" style="font-weight: 400 ;"><?php the_title(); ?></h3><hr>
						<div class="adress u-gridCol4">
							
							<div class="adress-info">
								<p>Blokvorm</p>
								<p>Sluismeesterslag 3</p>
								<p>2805 DZ Gouda</p>
								<p>Email: info@blokvorm.nl</p>
								<p>Tel: 0619011511</p>
								<p>BTW: NL8512.02.366B01</p>
								<p>KVK: 54163846</p>
							</div>
	
						</div>
						<div class="u-Col8">
							<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
							<?php the_content(); ?>
						
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>	
					</div>
					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">						
						
					</div>
				</div>

	<?php endwhile; endif; ?>
	

<?php get_footer(); ?>

