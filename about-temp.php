<?php
/*
Template Name:About	
*/	
 get_header('inner'); ?>
<div class="container" style="position: relative;">
	<div class="row">
		<div class="page-title">
			<h1><?php the_field('blue_bar_title');?></h1>
		</div>
		<div class="page-content">
		<?php
		if( have_rows('section_1') ):
			while ( have_rows('section_1') ) : the_row();

		?>
		<div class="col-md-12">
			<div class="col-md-6 about-left-section-1">
				<?php the_sub_field('left_section');?>
			</div>
			<div class="col-md-6 about-right-section-1">
				<?php the_sub_field('right_section');?>
			</div>
			

		</div> <!-- /.blog-main -->
		<?php
			endwhile;
		endif;	
		?>	
		
		</div>

	</div> <!-- /.row -->
</div> <!-- /.container -->
<div class="about-section-2 row">
	<?php
		if( have_rows('section_2') ):
			while ( have_rows('section_2') ) : the_row();

		?>
	<div class="col-md-6 homepage-txt-3">
		<?php the_sub_field('left_section');?>
		
	</div>
	<div class="col-md-6 homepage-txt-4">
		<?php the_sub_field('right_section');?>
		
	</div>
	<?php
		endwhile;
	endif;	
	?>	
</div>

<div class="container">
<div class="row">
	<div class="col-md-12 about-page-content">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			the_content();

		// End the loop.
		endwhile;
		?>
	</div>
</div>
	</div>
<?php get_footer(); ?>