<?php
/*
Template Name:Why	
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
		<div class="col-md-6" style="padding-top: 40px;">
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
	<div class="talk-to-us" style="clear: both; display: none;">
			
		<?php
			if( have_rows('section_2') ):
				while ( have_rows('section_2') ) : the_row();

			?><div class="row">
		<div class="col-md-6" style="padding-top: 40px;">
			<?php the_sub_field('left_section');?>
			
		</div>
		<div class="col-md-6" style="padding-top: 40px;">
			<?php the_sub_field('right_section');?>
			
		</div></div>
		<?php
			endwhile;
		endif;	
		?>	
	</div>
	</div>
	
	
</div>
</div> <!-- /.container --><div class="su-spacer" style="height:50px"></div>
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
			<p class="text-left" style="text-align: left;"><?php the_field('bottom_description');?></p>
			<div class="side-effects">
				<p><?php the_field('side_effects_description');?></p>
				<a href="#" id="side-effects" class="custom-link-btn2">Check Side Effects</a>
			</div>
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