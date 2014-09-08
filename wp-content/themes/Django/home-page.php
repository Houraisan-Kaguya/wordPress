<?php
/**
 * The template for displaying all pages.
 *
 Template name:Homepage
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package fabthemes
 * @since fabthemes 1.0
 */

get_header(); ?>

<?php get_template_part( 'feature' ); ?>
	
<div class="container_12">	
<div class="homeblog cf">
	<h2 class="homeblog-title grid_12"> From the blog </h2>


 		 		<?php
				$args = array( 'numberposts' => 3 );
				$homeposts = get_posts( $args );
				foreach($homeposts as $post) : setup_postdata($post); ?>
	 	
				<div class="homepost grid_4">
		
		 		<?php
					$thumb = get_post_thumbnail_id();
					$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
					$image = aq_resize( $img_url, 300, 200, true ); //resize & crop the image
				?>
				
				<?php if($image) : ?>
				<a href="<?php the_permalink(); ?>"> <img  src="<?php echo $image ?>"/></a>
				<?php endif; ?>
		 		
		 						
				<h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
				<div class="home-meta"> <?php _e('Posted on', 'fabthemes') ?>  <?php the_time('F j - Y'); ?>  | <?php comments_popup_link(__('0 Comments', 'fabthemes'), __('1 Comment', 'fabthemes'), __('% Comments', 'fabthemes')); ?>
 </div>
				<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
				<a class="readmore" href="<?php the_permalink(); ?>"> Read More </a>
				
				</div>
			
	         	<?php endforeach; ?>

	
</div>
</div>
<?php get_footer(); ?>