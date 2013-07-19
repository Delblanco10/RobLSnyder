<?php get_header(); ?>

<div id="primary" class="site-content">
<div id="content" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

	<!-- Display the main photo -->
	<article class="photo-detail">

		<h1><?php the_title(); ?></h1>		
		<p class="date"><?php the_time('M. d, Y'); ?></p>

		<?php the_post_thumbnail('large'); ?>		
		<?php the_content(); ?>			

	</article>

	<!-- Thumbnail navigation for prev and next posts -->
	<nav class="nav-single">						
		<span class="nav-previous">
		<?php $prevPost = get_previous_post(true); if($prevPost): ?>				
			<?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );?>		
			<?php previous_post_link('%link',"$prevthumbnail  <p>&lsaquo; Previous</p>", TRUE); ?>						
		<?php endif; ?>
		</span>					

		<span class="nav-next">
		<?php $nextPost = get_next_post(true); if($nextPost): ?>
			<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) ); ?>
			<?php next_post_link('%link',"$nextthumbnail  <p>Next &rsaquo;</p>", TRUE); ?>					
		<?php endif; ?>
		</span>				
	</nav>

	<!-- Display comments -->
	<?php comments_template( '', true ); ?>

	<?php endwhile; ?>

</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>