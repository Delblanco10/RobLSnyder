<?php get_header(); ?>

<div id="primary" class="site-content">
<div id="content" role="main">

	<!-- Begin loop for latest photos -->		
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<article class="photo-entry">

			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(); ?>

			<footer>
				<h2><?php the_title(); ?></h2>
				<p class="date"><?php the_time('m.d.Y'); ?></p>
			</footer>
			</a>

		</article>
		<?php endwhile; ?>			

	<?php else : ?>

		<!-- Message if there are no photos -->			
		<p><?php _e( 'There should be a photo here! (Let me get back to you.)', 'twentytwelve' ); ?></p>

	<?php endif; ?>
	<!-- End loop -->

	<!-- Navigation for older and newer posts -->
	<nav class="photo-navigation">

		<p class="previous-photos">
			<?php next_posts_link('&lsaquo; Older photos ');  ?>		
		</p>		
		<p class="newer-photos">
			<?php previous_posts_link('Newer photos &rsaquo;');  ?>
		</p>

	</nav>

</div>
</div>

<?php get_footer(); ?>