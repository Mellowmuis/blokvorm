<?php
/*
Template Name: projecten
*/
?>

<?php get_header(); ?>



		<article class="Content" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				
					<?php

					        $taxonomies = array( 
					            'projecttypes'
					        );

					        $args = array(
					            'orderby'           => 'name', 
					            'order'             => 'ASC',
					            'hide_empty'        => 0,
					            'exclude'           => array(), 
					            'exclude_tree'      => array(), 
					            'include'           => array(),
					            'fields'            => 'all', 
					            'slug'              => '',
					            'parent'            => '',
					            'hierarchical'      => true, 
					            'child_of'          => 0, 
					            'get'               => '', 
					            'name__like'        => '',
					            'description__like' => '',
					            'pad_counts'        => false, 
					            'offset'            => '', 
					            'search'            => '', 
					            'cache_domain'      => 'core'
					        ); 

					        $terms = get_terms($taxonomies, $args);


					// now run a query for each animal family
					foreach( $terms as $term ) {
					 
					    // Define the query
					    $args = array(
					        'post_type' => 'projecten',
					        'projecttypes' => $term->name,
				        	'post_status' => 'publish'

					    );
					    $query = new WP_Query( $args );
					     
					    if($query->post_count == 0) {
					     	continue;
					    }     
					    // output the term name in a heading tag                

					    ?>
				    	
					    
						    <?php
						    // output the post titles in a list
						     	$total =  $query->post_count;
						        // Start the Loop
						        $counter = 1;
						        while ( $query->have_posts() ) : $query->the_post(); ?>
						        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
									  $image_url = $image[0];
							
									  $isLast = false;
									  //echo $total.'-'.$counter;
									  if(intval($total) == $counter){
									  	$isLast = true;
									  }

								?>
								<?php if($counter%6 == 1) { ?> <div class="u-gridRow " style="border-bottom: 0px solid #ccc;"> <?php } ?>
									<?php if($counter == 1){  ?>
										<h3 class="less-marg" style="font-weight: 400 ;"><?php echo $term->name; ?></h3>
									<?php } ?>
									
									<div class="u-gridCol2" style="">
										<a href="<?php the_permalink();?>">
											<img src="<?php echo $image_url; ?>" style="margin-bottom: 10px;"/>
										</a>
									</div>
							
								<?php if($isLast) { ?> <div style="clear:both;"><hr/></div><?php } ?>
								<?php if($counter%6 == 0 || $isLast) { ?></div> <?php } ?>
						        <?php $counter++; 
						        endwhile;
						     
						     
						    // use reset postdata to restore orginal query
						    wp_reset_postdata();
						
							?>

						<?php 
						} ?>
			</div>
		</article>


<?php get_footer(); ?>
