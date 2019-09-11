<?php get_header('inner'); ?>
<div class="container" style="position: relative;">
	<div class="row">
		<div class="page-title">
			<h1><?php the_field('blue_bar_title');?></h1>
		</div>
		<div class="page-content txt-pages">
			<div class="col-md-12">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			the_content();

		// End the loop.
		endwhile;
		?></div>
		</div>

	</div> <!-- /.row -->
</div> <!-- /.container -->

<?php get_footer(); ?>