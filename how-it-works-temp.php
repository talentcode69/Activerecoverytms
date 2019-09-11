<?php
/*
Template Name:How It Works	
*/	
 get_header('inner'); ?>
<div class="container" style="position: relative;">
	<div class="row">
		<div class="page-title">
			<h1><?php the_field('blue_bar_title');?></h1>
		</div>
		<div class="page-content txt-pages" style=""><div class="talk-to-us">
			<h2 style="text-align: center;"><?php the_field('top_heading');?></h2>
			<p><?php the_field('top_description');?></p>
		<?php
			if( have_rows('section_1') ):
				while ( have_rows('section_1') ) : the_row();

			?>
		<div class="col-md-6 custom-how-section-1" style="padding-top: 40px;">
			<?php the_sub_field('left_section');?>
			
		</div>
		<div class="col-md-6" style="padding-top: 40px;">
			<?php //the_sub_field('right_section');?>
			<img class="alignnone size-full wp-image-174" src="<?php the_sub_field('right_section');?>" alt="" />
		</div>
		<?php
			endwhile;
		endif;	
		?>	
	</div>
	</div>
		<div class="page-content how-it-works-steps" style="display: none;"><div class="talk-to-us">
			<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			the_content();

		// End the loop.
		endwhile;
		?></div>
			<?php
		if( have_rows('steps') ):
			while ( have_rows('steps') ) : the_row();

		?><div class="row step-count">
		<div class="col-md-3"><img src="<?php the_sub_field('step_image');?>" alt="Img" /></div>
		<div class="col-md-9">
			<h4><?php the_sub_field('step_number');?></h4>
			<h2><?php the_sub_field('step_title');?></h2>
			<p><?php the_sub_field('step_description');?></p>
		</div>	
		<div class="col-md-12 down-arrow"><span class="glyphicon glyphicon-chevron-down"></span></div>
	</div>
	
		<?php
			endwhile;
		endif;	
		?>
		</div>

	</div> <!-- /.row -->
</div> <!-- /.container -->
<div class="su-spacer" style="height:50px"></div>
<div class="about-section-2 row" style="margin-left: 0px; margin-right: 0px;">
	<?php
		if( have_rows('section_2') ):
			while ( have_rows('section_2') ) : the_row();

		?>
	<div class="col-md-6 homepage-txt-3 custom-why-section-1">
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
		<div class="page-content txt-pages" style="padding-top: 0px;"><div class="talk-to-us">
			
			<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			the_content();

		// End the loop.
		endwhile;
		?></div>
		
		
		</div>
	</div>
</div>
	</div>
<?php get_footer(); ?>