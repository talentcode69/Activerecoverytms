<?php
/*
Template Name:Contact	
*/	
 get_header('inner'); ?>
<div class="container" style="position: relative;">
	<div class="row">
		<div class="page-title">
			<h1><?php the_field('blue_bar_title');?></h1>
		</div>
		<div class="page-content">
			<div class="talk-to-us">
 			<div class="container">
 				<div class="row">
 			<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			the_content();

		// End the loop.
		endwhile;
		?>
 			<?php echo do_shortcode('[contact-form-7 id="29" title="Contact page form"]');?>
 		</div>
 			</div>
 		</div>
		
		</div>

	</div> <!-- /.row -->
</div> <!-- /.container -->

<?php get_footer('inner'); ?>