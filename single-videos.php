<?php get_header('inner'); ?>
<div class="container" style="position: relative;">
	<div class="row">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		$video = get_post_meta($post->ID, 'video', true);
		?>	
		<div class="page-title">
			<h1><?php the_title(); ?></h1>
		</div>

		<div class="page-content txt-pages">
			<div id="video-page"> <!-- Video Page !-->
				<div class="video-thumbnail">
					<?php if ($video): ?>
						<iframe src="<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>
					<?php endif; ?>
				</div>

				<?php the_content();?>
			</div> <!-- Video Page End !-->
		</div>
		
		<?php
		// End the loop.
		endwhile;
		?>
	</div> <!-- /.row -->
</div>	
<?php get_footer(); ?>