<?php
/*
Template Name:Proof
*/	
 get_header('inner'); ?>
<div class="container" style="position: relative;">
	<div class="row">
		<div class="page-title">
			<h1><?php the_field('blue_bar_title');?></h1>
		</div>
		<div class="page-content txt-pages"><div class="talk-to-us">
			<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			the_content();

		// End the loop.
		endwhile;
		?></div>
		<div class="row">
			<div class="col-md-12 text-center patients-saying">
				<h3>What Patients are Saying
</h3>
			</div>
			<?php
		if( have_rows('testimonial') ):
			$ii=1;
			while ( have_rows('testimonial') ) : the_row();
			$is_full = get_sub_field('full_width');
			if($is_full=='Yes'){
				$cc_class = 'col-md-12';
			}else{
				$cc_class = 'col-md-6';
			}
			if($ii==1 || $ii==3 || $ii==5 || $ii==7 || $ii==9 || $ii==11){?> <div class="row"><?php }
		?><div class="<?php echo $cc_class;?>">
			<div class="testimonial-content">
				<p><?php the_sub_field('testimonial_content');?></p>
			</div>
			<div class="testimonial-author">
				<?php the_sub_field('author');?>
			</div>
		</div>
		<?php if($ii==2 || $ii==4 || $ii==6 || $ii==8 || $ii==10 || $ii==12){?> </div><?php }?> 
	
	
		<?php
		$ii++;
			endwhile; 
		endif;	
		?>
		<div class="col-md-12 text-center testimonial-bottom-content">
			<p><?php the_field('testimonial_bottom_content');?></p>
			<h3><?php the_field('testimonial_bottom_heading');?></h3>
			<!--<a href="#" class="custom-link-btn">See All Testimonials</a>-->
		</div>
		</div>
		</div>

	</div> <!-- /.row -->
</div> <!-- /.container -->

<?php get_footer(); ?>