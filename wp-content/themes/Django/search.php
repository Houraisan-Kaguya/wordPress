<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package fabthemes
 * @since fabthemes 1.0
 */

get_header(); ?>
<header class="wide-entry-header">
	<div class="container_12 cf">
		<div class="grid_12">
			<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'fabthemes' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</div>	
	</div>
	</header><!-- .entry-header -->

<div class="container_12">
		<section id="primary" class="content-area grid_9">
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<?php fabthemes_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</section><!-- #primary .content-area -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>