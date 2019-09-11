<?php get_header('inner'); ?>
<div class="container">
	<div class="row">
		<div class="page-title" style="position: relative;">
			<h1>Frequently Asked Questions</h1>
		</div>
		<div class="txt-pages">
			<div class="col-md-12">
				<h2 class="subtitle-faqs ">Questions about TMS</h2>
				<p class="secondary-subtitle-faqs">All Your Questions Answer In One Place</p>
			</div>
		<?php 
			$query = new WP_Query( array( 'post_type' => 'FAQ' ) );
			$count = 0;
			while ( $query->have_posts() ) : $query->the_post();
			?>
			<div class="col-md-12">
				
					<h3>
						<a data-toggle="collapse" href="#faq-<?php echo $count; ?>" aria-expanded="false" aria-controls="faq" class="collapsed">
							<?php the_title(); ?>
						</a>
					</h3>
				
					<div class="collapse in" id="faq-<?php echo $count; ?>" aria-expanded="false">
						<?php the_content(); ?>
					</div>
			</div>
		
		<?php 
			$count++;
			endwhile; 
		?>
		</div>
	</div>
</div
><script type="application/ld+json">
{
	"@context" : "https://schema.org",
	"@type" : "FAQPage",
	"mainEntity": [
	<?php
		wp_reset_query();
		$secondary_query = new WP_Query( array( 'post_type' => 'FAQ' ) );

		$count = $secondary_query->post_count;
		while ( $secondary_query->have_posts() ) : $secondary_query->the_post(); ?>
			{
				"@type": "Question",
				"name" : "<?php echo the_title(); ?>",
				"acceptedAnswer" : {
					"@type" : "Answer",
					"text" : "<?php echo the_content(); ?>"
				}
			}
			<?php
			if($count > 1){
				$count--;
				echo ",";
			}
		endwhile;
	 ?>
	]

}
</script>
<?php get_footer(); ?>
