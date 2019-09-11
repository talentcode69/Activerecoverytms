<?php get_header('inner'); ?>
<div class="container">
	<div class="row">
		<div class="page-title" style="position: relative;">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="txt-pages">
		
			<div class="col-md-12">
				
				
					<div class="collapse in" id="faq-<?php echo $count; ?>" aria-expanded="false">
						<?php the_content(); ?>
					</div>
			</div>
		
		<?php 
		?>
		</div>
	</div>
</div
>
<?php get_footer(); ?>
