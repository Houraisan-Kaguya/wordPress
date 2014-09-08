<?php
/**
 * The Template for displaying all single posts.
 *
 * @package fabthemes
 * @since fabthemes 1.0
 */

get_header(); ?>
	<header class="wide-entry-header">
	<div class="container_12 cf">
		<div class="grid_12">
			<h1 class="entry-title"><?php the_title(); ?></h1>
	
			<div class="entry-meta">
				 <?php _e('Posted on', 'fabthemes') ?> <?php the_time('F j - Y'); ?>  | <?php comments_popup_link(__('0 Comments', 'fabthemes'), __('1 Comment', 'fabthemes'), __('% Comments', 'fabthemes')); ?>
			</div><!-- .entry-meta -->
		</div>	
	</div>
	</header><!-- .entry-header -->
<div class="container_12">
		<div id="primary" class="content-area grid_9">
			<div id="content" class="site-content" role="main">
			<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>