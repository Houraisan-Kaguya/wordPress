<div class="slider-section">

	<div id="slider" class="container_12">


	    <?php 	$count = ft_of_get_option('fabthemes_slide_number');
				$slidecat =ft_of_get_option('fabthemes_slide_categories');
				$query = new WP_Query( array( 'cat' =>$slidecat,'posts_per_page' =>$count ) );
	           	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();	?>
	 	
		<div class="slide grid_12" data-out="right:-1000;opacity:0; duration:100" data-in="left:-1000; opacity:.2; duration:1000 delay:800">
		
		 		<div class="slimg">	
				<?php
					$thumb = get_post_thumbnail_id();
					$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
					$image = aq_resize( $img_url, 420, 300, true ); //resize & crop the image
				?>
				
				<?php if($image) : ?>
				<a href="<?php the_permalink(); ?>"> <img  src="<?php echo $image ?>"/></a>
				<?php endif; ?>
		 		</div>
		 		
				<div data-in="left:-1000;delay:1000;duration:1550" class="slide-title"><h2><?php the_title(); ?></h2></div>
				<div data-in="top:-1000;delay:800;duration:1550" class="slide-content"><?php the_excerpt(); ?></div>
				<div data-in="top:-1000;delay:900;duration:1550" class="slide-more"> <a href="<?php the_permalink(); ?>">  Read More </a></div>
				
	   </div>
			
	         	<?php endwhile; endif; ?>

</div>	

<div class="container_12">
	<a href="#" class="next">next</a>
	<a href="#" class="prev">prev</a>	
</div>

</div>


<div class="cta-section cf">
	<div class="container_12">
		<div class="grid_12">
			<h2> <?php echo ft_of_get_option('fabthemes_intro_title','My site intro title'); ?> </h2>
			<p>  <?php echo ft_of_get_option('fabthemes_intro_message','My site intro text' ); ?></p>
		</div>
	</div>
</div>